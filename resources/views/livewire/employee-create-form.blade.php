<div>
    @if(!empty($successMsg))
    <div class="alert alert-success">
        {{ $successMsg }}
    </div>
    @endif
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="multi-wizard-step">
                <a href="#step-1" type="btn btn-circle"
                    class="btn {{ $currentStep != 1 ? 'btn-default' : 'btn-success' }}">1</a>
                <p>Step 1</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-2" type="btn btn-circle"
                    class="btn {{ $currentStep != 2 ? 'btn-default' : 'btn-success' }}">2</a>
                <p>Step 2</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-3" type="btn btn-circle"
                    class="btn {{ $currentStep != 3 ? 'btn-default' : 'btn-success' }}"
                    disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
        <div class="col-md-12">
            <h3>Employee Personal Details</h3>
            <div class="form-group">
                <label for="title">Employee Name:</label>
                <input type="text" wire:model="name" class="form-control" id="taskTitle">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Employee No KP :</label>
                <input type="text" wire:model="nokp" class="form-control" id="teamPrice" />
                @error('nokp') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Gender :</label>
                <input type="text" wire:model="gender" class="form-control" id="teamPrice" />
                @error('gender') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button class="btn btn-success nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                type="button">Next</button>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
        <div class="col-md-12">
            <h3>Employee Employment Details</h3>
            <div class="form-group">
                <label for="description">Employee Start Date :</label>
                <input type="text" wire:model="start_date" class="form-control" id="teamPrice" />
                @error('start_date') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Employment Status :</label>
                <input type="text" wire:model="employment_status" class="form-control" id="teamPrice" />
                @error('employment_status') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Employment Position :</label>
                <input type="text" wire:model="position_id" class="form-control" id="teamPrice" />
                @error('position_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Employment Basic Salary :</label>
                <input type="text" wire:model="basic_salary" class="form-control" id="teamPrice" />
                @error('basic_salary') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Employment Basic Salary :</label>
                <input type="text" wire:model="allowance" class="form-control" id="teamPrice" />
                @error('allowance') <span class="error">{{ $message }}</span> @enderror
            </div>            
            <div class="form-group">
                <label for="description">Employment Service Status :</label>
                <input type="text" wire:model="service_status" class="form-control" id="teamPrice" />
                @error('service_status') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Employment KWSP No :</label>
                <input type="text" wire:model="kwsp_no" class="form-control" id="teamPrice" />
                @error('kwsp_no') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Employment Location :</label>
                <input type="text" wire:model="location" class="form-control" id="teamPrice" />
                @error('location') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Employment PPK :</label>
                <input type="text" wire:model="ppk_id" class="form-control" id="teamPrice" />
                @error('ppk_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Employment Education :</label>
                <input type="text" wire:model="education_id" class="form-control" id="teamPrice" />
                @error('education_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Employment Education Major:</label>
                <input type="text" wire:model="edu_major" class="form-control" id="teamPrice" />
                @error('edu_major') <span class="error">{{ $message }}</span> @enderror
            </div>    
            <button class="btn btn-success nextBtn btn-lg pull-right" type="button"
                wire:click="secondStepSubmit">Next</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
        <div class="col-md-12">
            <h3> Step 3</h3>
            <table class="table">
                <tr>
                    <td>Employee Name :</td>
                    <td><strong>{{ $name }}</strong></td>
                </tr>
                <tr>
                    <td>Employee No KP :</td>
                    <td><strong>{{ $nokp }}</strong></td>
                </tr>
                <tr>
                    <td>Employee Gender :</td>
                    <td><strong>{{ $gender }}</strong></td>
                </tr>
                <tr>
                    <td>Employee Start Date :</td>
                    <td><strong>{{ $start_date }}</strong></td>
                </tr>
                <tr>
                    <td>Employee Employment Status :</td>
                    <td><strong>{{ $employment_status }}</strong></td>
                </tr>                
            </table>
            <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
        </div>
    </div>
</div>
