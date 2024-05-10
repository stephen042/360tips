<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Contact extends Component
{

    public function contact()
    {
        echo ("<script>window.alert('Thanks for contacting Us for Quicker response write us on website Live chat')</script>");
    }
    public function render()
    {
        return view('livewire.home.contact');
    }
}
