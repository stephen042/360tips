<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Status_plan;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Redirect;

class CreateStatusPlan extends Component
{
    #[Rule('required')]
    public $plan_name;

    #[Rule('required')]
    public $plan_amount;

    #[Rule('required')]
    public $plan_duration;

    public function create_status_plan()
    {
        $this->validate();

        $result = Status_plan::create([
            "name" => $this->plan_name,
            "amount" => $this->plan_amount,
            "duration" => $this->plan_duration,
        ]);

        if ($result) {

            session()->flash('success', 'Created successfully');

            return Redirect::route('create_status_plan');
        }

        session()->flash('error', 'Something Went wrong try again');

        return Redirect::route('create_status_plan');
    }
    public function render()
    {
        return view('livewire.admin.create-status-plan');
    }
}
