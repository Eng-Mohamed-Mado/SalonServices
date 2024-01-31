<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        // اعرض قائمة الحجوزات هنا
        $bookings = Booking::all();

        return view('testTimeManger.index', compact('bookings'));
    }

    public function create()
    {
        // اعرض نموذج الحجز هنا
        return view('testTimeManger.create');
    }

    //Selecte Time Available
    private function isTimeAvailable($visitDate, $startTime, $endTime)
    {
        $existingBookings = Booking::where('visit_date', $visitDate)
            ->where(function ($query) use ($startTime, $endTime) {
                $query->where(function ($query) use ($startTime, $endTime) {
                    $query->whereBetween('start_time', [$startTime, $endTime])
                        ->orWhereBetween('end_time', [$startTime, $endTime]);
                })
                    ->orWhere(function ($query) use ($startTime, $endTime) {
                        $query->where('start_time', '<=', $startTime)
                            ->where('end_time', '>=', $endTime);
                    });
            })
            ->count();

        return $existingBookings == 0;
    }
    // Make Time After Finsh Available
    public function makeAppointmentAvailable()
    {
        // اعثر على جميع الحجوزات التي انتهت
    $expiredBookings = Booking::whereRaw('end_time <= ? AND canceled_at = ?', [now()->subMinutes(15), 0])
    ->get();

foreach ($expiredBookings as $booking) {
    // قم بتحديث حالة الحجز إلى متاح
    $booking->update(['canceled_at' => now()]);
}

return 'تم تحديث الحالة بنجاح.';
    }

    public function store(Request $request)
    {
        $request->validate([
            'visit_date' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
        ]);

        $user = Auth::user();
        $start_time = $request->input('start_time');
        $end_time = date('H:i', strtotime($start_time) + 4 * 60 * 60);

        if (!$this->isTimeAvailable($request->input('visit_date'), $start_time, $end_time)) {
            return redirect()->route('test.create')->with('error', 'الوقت المحدد غير متاح. يرجى اختيار وقت آخر.');
        }

        // إنشاء نموذج الحجز وحفظه
        $booking = new Booking([
            'user_id' => $user->id,
            'visit_date' => $request->input('visit_date'),
            'start_time' => $start_time,
            'end_time' => $end_time,
        ]);

        $booking->save();

        // إرسال إشعار بنجاح الحجز
        // Notification::send($user, new BookingNotification());

        return redirect()->route('test.index')->with('success', 'تم حجز الموعد بنجاح!');
    }
}
