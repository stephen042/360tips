<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\User;
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
        $schedule->call(function () {
            $user_data = Auth::user();
            
            $userObj = User::findOrFail($user_data->id);

            $plans = $userObj->plans_transactions()
            ->where("plan_transaction_status",1)->get();
        
            foreach ($plans as $plan) {
                // Get the duration of the plan from the database
                $durationInDays = $plan->plan_duration;
        
                // Calculate the date to compare based on the plan's duration
                $compareDate = Carbon::now()->subDays(Carbon::parse($durationInDays)->day);
        
                // Check if the plan's creation date is before or equal to the compare date
                if ($plan->created_at <= $compareDate) {
                    // Update the plan's status to completed
                    $plan->update(['plan_transaction_status' => 2]);
                }
            }
        })->hourly();
        
        // $schedule->command('inspire')->hourly();
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
