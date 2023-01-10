<div>
@if($currentStep == 1)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Name :</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'wire:model' => 'name')) !!}
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No KP :</strong>
                {!! Form::text('nokp', null, array('placeholder' => 'No KP','class' => 'form-control', 'wire:model' => 'nokp')) !!}
                @error('nokp') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender :</strong>
                {!! Form::select('gender', ['LELAKI', 'PEREMPUAN'], 'GENDER', array('placeholder' => 'Gender','class' => 'form-control', 'wire:model' => 'gender')) !!}
                @error('gender') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center p-3">
            <button class="btn btn-success" wire:click="secondStep">Next</button>
        </div>
    </div>
@endif

@if($currentStep == 2)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Start Date :</strong>
                {!! Form::date('start_date', Carbon\Carbon::today(), array('placeholder' => 'Start Date','class' => 'form-control', 'wire:model' => 'start_date')) !!}
                @error('start_date') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Basic Salary :</strong>
                {!! Form::text('basic_salary', null, array('placeholder' => 'Basic Salary','class' => 'form-control', 'wire:model' => 'basic_salary')) !!}
                @error('basic_salary') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center p-3">
            <button class="btn btn-success" wire:click="prev">Previous</button>
            <button class="btn btn-success" wire:click="thirdStep">Next</button>
        </div>
    </div>
@endif

</div>

