<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Mail\AppMail;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

class Login extends Component
{

    public string $email = '';


    public string $password = '';


    public function login()
    {

        $validated = $this->validate([
            'email' => ['required', 'string', 'lowercase', 'email'],
            'password' => ['required'],
        ]);

        

        if (!Auth::attempt($validated)) {
            
            session()->flash('error', 'invalid login Details');
            return redirect('/login');

        }else{

            $user = User::where("email", "$this->email")->get()->first();
            
            Auth::loginUsingId($user->id);

            Session::regenerate();

            $app = config('app.name');
            $date = date('Y-M-d H:i');
            $userEmail = $user['email'];

            $full_name = $user['last_name'] . " " . $user['first_name'];
            $subject = "Login Notification";

            $bodyUser = [
                "name" => $full_name,
                "title" => "Login Notification",
                "message" => "We noticed a login attempt on your $app account on $date. <br> Please contact us if you did not initiate this login or Change your password for safety ",
            ];

            try {
                // user email
                Mail::to($userEmail)->send(new AppMail($subject, $bodyUser));
            } catch (\Throwable $th) {
                //throw $th;
            }

            $route = ($user->role == 1) ? "admin_dashboard" : "user_dashboard";

            return redirect()->route($route);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
