<?php
namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('custom:task')->dailyAt('13:00');
        // $schedule->command('custom:task')->hourly();
        // $schedule->command('custom:task')->everyMinute();
        // $schedule->command('custom:task')->weekly();
        // $schedule->command('custom:task')->monthly();
        // Add other schedule frequencies as needed
    }

    protected function commands() {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
