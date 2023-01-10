<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $name = 'Jelly';
    public $currentStep = 1;

    public function secondStep() {

        $this->currentStep++;
    }

    public function prev() {
        $this->currentStep--;
    }


    public function render()
    {
        return view('livewire.welcome');
    }
}
