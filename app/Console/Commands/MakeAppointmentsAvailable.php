<?php

namespace App\Console\Commands;

use App\Http\Controllers\BookingController;
use Illuminate\Console\Command;

class MakeAppointmentsAvailable extends Command
{
    protected $signature = 'appointments:make-available';
    protected $description = 'Make expired appointments available again';

    public function handle()
    {
        $controller = new BookingController;
        $controller->makeAppointmentAvailable();

        $this->info('تم تحديث حالة الحجوزات بنجاح.');
    }

}
