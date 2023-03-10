<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmployeeCreate extends Component
{
    public $currentStep = 1;
    public $name, $nokp, $gender;

    public function secondStep() {


        $this->counter++;
        $this->currentStep++;

        dd($this->secondStep);
    }

    public function prev() {

        $this->currentStep--;
    }

    public function thirdStep() {

        $counter++;
        $this->currentStep++;
    }

    public function render()
    {
        return view('livewire.employee-create');
    }
}
