<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Mail\AppMail;
use App\Models\token;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class ForgetPassword extends Component
{
    public $email = '';

    public function resetPassword()
    {
        $this->validate([
            "email" => ["required", "exists:users,email"],
        ]);


        // starting using (object) Here
        $user = (object) User::where("email", "$this->email")->get()->first();

        // Generate password reset token
        $token = Password::createToken($user);

        token::create([
            'email' => $user->email,
            'token' => $token
        ]);

        $app = config('app.name');
        $userEmail = $user->email;

        $full_name = $user->last_name . " " . $user->first_name;
        $subject = "Password Reset Notification";

        $bodyUser = [
            "name" => $full_name,
            "title" => "Password Reset Notification",
            "message" => "Click This link <br>" . route('password_reset', [$userEmail, $token]) . " <br> to reset your password for your $app's account ",
        ];

        try {
            // user email
            Mail::to($userEmail)->send(new AppMail($subject, $bodyUser));
        } catch (\Throwable $th) {
            //throw $th;
        }

        session()->flash('success', 'A reset mail will be sent to the email address you provided');
        return redirect('/forgot-password');
    }

    public function render()
    {
        return view('livewire.auth.forget-password');
    }
}
