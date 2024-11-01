<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Notifications;
use Illuminate\Console\Command;

class NotificationsAutoDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notifications-auto-delete';

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
        // Define the threshold date for notifications older than 30 days
        $thresholdDate = Carbon::now()->subDays(30);

        // Delete notifications that are older than 30 days and have a status of "read"
        Notifications::where('notifications_status', 'Read')
            ->where('created_at', '<', $thresholdDate)
            ->delete();
    }
}
