<?php

namespace App\Livewire\User;

use App\Models\Notifications;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserNav extends Component
{

    public function clear_notifications() : void {
        Notifications::where("notifications_status","Active")->update([
            "notifications_status" => "Read"
        ]);
    }

    // logout function
    public function logout()
    {
        Session::invalidate();
        Session::regenerateToken();

        return redirect('/login');
    }
    
    public function render()
    {
        $user_id = Auth::user()->id;
                
        $user = User::findOrFail($user_id);

        
        $user_notifications = $user->notifications()
        ->where("notifications_status","Active")
        ->orderBy("id", "desc")
        ->take(5)
        ->get();

        $user_notifications_count = $user->notifications
        ->where("notifications_status","Active")
        ->count();

        return view('livewire.user.user-nav', [
            "user_notifications" => $user_notifications,
            "user_notifications_count" => $user_notifications_count,
            "user_data" => Auth::user(),
        ]);
    }
}
