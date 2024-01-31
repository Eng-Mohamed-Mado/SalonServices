<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>قائمة الحجوزات</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">تاريخ الزيارة</th>
                <th scope="col">وقت الحضور</th>
                <th scope="col">وقت الانتهاء</th>
                <th scope="col">الحالة</th>
                <th scope="col">الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bookings as $booking)
                <tr>
                    <td>{{ $booking->visit_date }}</td>
                    <td>{{ $booking->start_time }}</td>
                    <td>{{ $booking->end_time }}</td>
                    <td>{{ $booking->canceled ? 'تم الإلغاء' : 'قيد الحجز' }}</td>
                    <td>
                        @if (!$booking->canceled)
                            <form action="{{ route('test.destroy', $booking->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('هل أنت متأكد من إلغاء الحجز؟')">إلغاء الحجز</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">لا يوجد حجوزات حاليًا.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('test.create') }}" class="btn btn-primary">حجز موعد جديد</a>

</body>

</html>
