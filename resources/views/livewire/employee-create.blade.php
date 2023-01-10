<div>
@if($currentStep == 1)
    
                <strong>Employee Name :</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            
                <strong>No KP :</strong>
                {!! Form::text('nokp', null, array('placeholder' => 'No KP','class' => 'form-control')) !!}
            
                <strong>Gender :</strong>
                {!! Form::select('gender', ['LELAKI', 'PEREMPUAN'], 'GENDER', array('placeholder' => 'Gender','class' => 'form-control')) !!}

            <button class="btn btn-success" wire:click="secondStep">Next</button>
        </div>
    </div>
@endif

{{ $counter }}

@if($currentStep == 2)
    
                <strong>Start Date :</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            
                <strong>Basic Salary :</strong>
                {!! Form::text('nokp', null, array('placeholder' => 'No KP','class' => 'form-control')) !!}

            <button class="btn btn-success" wire:click="prev">Previous</button>
            <button class="btn btn-success" wire:click="thirdStep">Next</button>

@endif

</div>

