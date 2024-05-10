<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Signal_plans;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Redirect;

class CreateSignalPlan extends Component
{
    #[Rule('required')]
    public $plan_name;

    #[Rule('required')]
    public $plan_amount;

    #[Rule('required')]
    public $plan_duration;

    #[Rule('required')]
    public $plan_signal_strength;

    public function create_signal_plan() 
    {
        $this->validate();

        $result = Signal_plans::create([
            "name" => $this->plan_name,
            "amount" => $this->plan_amount,
            "duration" => $this->plan_duration,
            "signal_strength" => $this->plan_signal_strength,
        ]);

        if ($result) {
            
            session()->flash('success', 'Created successfully');

            return Redirect::route('create_signal_plan');
        }

        session()->flash('error', 'Something Went wrong try again');

        return Redirect::route('create_signal_plan');
        
    }
    public function render()
    {
        return view('livewire.admin.create-signal-plan');
    }
}
