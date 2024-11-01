<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class PlansAutoComplete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:plans-auto-complete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user_data = Auth::user();

        $userObj = User::findOrFail($user_data->id);

        $plans = $userObj->plans_transactions()
            ->where("plan_transaction_status", 1)->get();

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
    }
}
