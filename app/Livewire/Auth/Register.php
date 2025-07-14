<?php

namespace App\Livewire\Auth;

use App\Mail\AppMail;
use App\Models\CryptoWallets;
use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Register extends Component
{

    public $first_name;

    public $last_name;

    public $email;

    public $phone;

    public $country;

    public $gender;

    public $password;

    public $password_confirmation;



    public function register(){

        $validated = $this->validate([
            'first_name' => ['required', 'string', 'max:255', 'min:3'],
            'last_name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required','min:8','max:13','unique:'.User::class],
            'country' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'password' => ['required',  'confirmed','min:6'],
        ]);

        

        $insert = User::create([
           'first_name' => $validated['first_name'],
           'last_name' => $validated['last_name'],
           'email' => $validated['email'],
           'phone' => $validated['phone'],
           'balance' => 0,
           'sub_balance' => 0,
           'password' => $validated['password'],
           'gender' => $validated['gender'],
           'country' => $validated['country'],
           'verify_status' => 0,
           'role' => 0,
           'account_status' => 'None',
        ]);


        if ($insert) {
            
            CryptoWallets::create([
                'user_id' => $insert->id,
            ]);

            $app = config('app.name');
            $userEmail = $validated['email'];
            $password = $validated['password'];

            $full_name = $validated['last_name']." ". $validated['first_name'];
            $subject = "Welcome Notification";


            $bodyUser = [
                "name" => $full_name,
                "title" => "Registration",
                "message" => "Welcome aboard! We are thrilled to have you join $app – your gateway to the world of trading and investment opportunities.
                At $app, we are committed to providing you with a seamless and rewarding trading experience. Whether you are a seasoned investor or just starting out, our platform offers a comprehensive suite of tools and resources to help you achieve your financial goals.
                <br>
                <br>
                Your login Details are : <br>
                email = $userEmail, <br>
                password = $password <br>
                ",
            ];
            $bodyAdmin = [
                "name" => "Admin",
                "title" => "Registration",
                "message" => " Hello Admin a User by the name $full_name have successfully created an Account on $app . Please check it out ;
                ",
            ];

            try {
                // user email
                Mail::to($userEmail)->send(new AppMail($subject, $bodyUser));

                // Admin email
                Mail::to(config('app.Admin_email'))->send(new AppMail($subject, $bodyAdmin));
            } catch (\Throwable $th) {
                //throw $th;
            }

            session()->flash('success','Account Created Successfully. Check Your email for more information');

            return $this->redirect('/login');
        }
        
        session()->flash('error', 'An error occurred please try again');
        return redirect('/register');
       
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
