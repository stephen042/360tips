<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\User;
use App\Jobs\NotificationJob;
use App\Models\Plans_Transactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('app:plans-auto-complete')->hourly();
        
        $schedule->command('app:notifications-auto-delete')->daily();
        // $schedule->call(new NotificationJob())->everyFiveMinutes();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
