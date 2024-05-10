<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\AI_Plans;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Redirect;

class CreateAiPlan extends Component
{
    #[Rule('required')]
    public $plan_name;

    #[Rule('required')]
    public $plan_amount;

    #[Rule('required')]
    public $plan_duration;

    #[Rule('required')]
    public $plan_roi;

    public function create_ai_plan() 
    {
        $this->validate();

        $result = AI_Plans::create([
            "name" => $this->plan_name,
            "amount" => $this->plan_amount,
            "duration" => $this->plan_duration,
            "ROI" => $this->plan_roi,
        ]);

        if ($result) {
            
            session()->flash('success', 'Created successfully');

            return Redirect::route('create_ai_plan');
        }

        session()->flash('error', 'Something Went wrong try again');

        return Redirect::route('create_ai_plan');
        
    }

    public function render()
    {
        return view('livewire.admin.create-ai-plan');
    }
}
