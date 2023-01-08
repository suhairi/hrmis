<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Employee;

class EmployeeCreateForm extends Component
{
    public $currentStep = 1;
    public $name, $nokp, $gender, $start_date, $employment_status, $education_id, $position_id, $basic_salary, $allowance, $service_status, $kwsp_no, $location, $ppk_id, $edu_major;
    public $successMsg = '';

    public function render()
    {
        return view('livewire.employee-create-form');
    }

    public function firstStepSubmit() {

        $validatedData = $this->validate([
            'name'      => 'required',
            'nokp'      => 'required',
            'gender'    => 'required',
        ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit() {

        $validatedData = $this->validate([
            'start_date'        => 'required',
            'employment_status' => 'required',
            'position_id'       => 'required',
            'basic_salary'      => 'required',
            'service_status'    => 'required',
            'kwsp_no'           => 'required',
            'location'          => 'required',
            'ppk_id'            => 'required',
            'education_id'      => 'required',
        ]);

        $this->currentStep = 3;
    }

    public function submitForm() {

        Employee::create([
            'name'              => $this->name,
            'nokp'              => $this->nokp,
            'gender'            => $this->gender,
            'start_date'        => $this->start_date,
            'employment_status' => $this->employment_status,
            'position_id'       => $this->position_id,
            'basic_salary'      => $this->basic_salary,
            'allowance'         => $this->allowance,
            'service_status'    => $this->service_status,
            'kwsp_no'           => $this->kwsp_no,
            'location'          => $this->location,
            'ppk_id'            => $this->ppk_id,
            'education_id'      => $this->education_id,
            'edu_major'         => $this->edu_major,
        ]);

        $this->successMsg = "An employee has successfully created.";
        $this->clearForm();
        $this->currentStep = 1;
    }

    public function back($step) {
        $this->currentStep = $step;
    }

    public function clearForm() {
        $this->name = '';
        $this->nokp = '';
        $this->gender = '';
        $this->start_date = '';
        $this->employment_status = '';
        $this->position_id = '';
        $this->basic_salary = '';
        $this->allowance = '';
        $this->service_status = '';
        $this->kwsp_no = '';
        $this->location = '';
        $this->ppk_id = '';
        $this->education_id = '';
        $this->edu_major = '';
    }
}
