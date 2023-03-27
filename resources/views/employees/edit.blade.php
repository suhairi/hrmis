@extends('layouts.master')

@section('content')
    
    <style type="text/css">
        .input-group>.input-group-prepend {
            flex: 0 0 40%;
        }
        .input-group .input-group-text {
            width: 100%;
        }
    </style>

    <div class="page-wrapper">
        <div class="content container-fluid">

            @include('partials.buttons.back')

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Kemaskini Maklumat Pekerja</strong></div>

                        <div class="card-body">

                            {!! Form::model($employee, ['method' => 'PATCH','route' => ['employees.update', $employee->id]]) !!}

                            <h3 class="mb-2"><strong>Maklumat Peribadi</strong></h3>                                
                                <div class="card">
                                    <div class="card-body bg-gray-50">
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>Nama Penuh</strong></span>
                                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'block w-full mt-1 rounded-md', 'autocomplete' => 'off')) !!}
                                            </label>
                                            @error('name')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>No KP</strong></span>
                                                {!! Form::text('nokp', null, array('placeholder' => 'No Kad Pengenalan : 890130025567','class' => 'block w-full mt-1 rounded-md', 'autocomplete' => 'off', 'required')) !!}
                                            </label>
                                            @error('nokp')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4">
                                            <label class="block">
                                                <span class="text-gray-700"><strong>Jantina</strong></span>
                                                {!! Form::select('gender', ['LELAKI' => 'LELAKI', 'PEREMPUAN' => 'PEREMPUAN'], null, array('placeholder' => 'Pilih Jantina','class' => 'block w-full mt-1 rounded-md', 'required')) !!}
                                            </label>
                                            @error('gender')
                                                <div class="text-sm text-red-600">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            <!-- ########################################################## -->
                            <h3 class="mb-2"><strong>Maklumat Jawatan</strong></h3>                                
                            <div class="card">
                                <div class="card-body bg-gray-50">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <label class="block">
                                            <span class="text-gray-700"><strong>Jawatan</strong></span>
                                            {!! Form::select('position_id', $positions, null, array('placeholder' => 'Pilih Jawatan','class' => 'block w-full mt-1 rounded-md', 'required')) !!}
                                        </label>
                                        @error('position_id')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                        <label class="block">
                                            <span class="text-gray-700"><strong>Tarikh Mula Bekerja</strong></span>
                                            {!! Form::date('start_date', \Carbon\Carbon::parse($employee->start_date), array('class' => 'block w-full mt-1 rounded-md', 'required')) !!}
                                        </label>                                    
                                        @error('start_date')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                        <label class="block">
                                            <span class="text-gray-700"><strong>Status Perjawatan</strong></span>
                                            {!! Form::select('service_status', ['TETAP' => 'TETAP', 'KONTRAK' => 'KONTRAK', 'SAMBILAN' => 'SAMBILAN', 'BERHENTI', 'PERCUBAAN' => 'PERCUBAAN'], null, array('placeholder' => 'Select Employment Status','class' => 'block w-full mt-1 rounded-md', 'required')) !!}
                                        </label>
                                        @error('service_status')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                        <label class="block">
                                            <span class="text-gray-700"><strong>Gaji Pokok (RM)</strong></span>
                                            <div class="input-group mb-3">
                                                {!! Form::number('basic_salary', null, array('placeholder' => '0.00','class' => 'block w-full mt-1 rounded-md', 'step' => '.01', 'min' => '0', 'required')) !!}
                                            </div>
                                        </label>
                                        @error('basic_salary')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                        <label class="block">
                                            <span class="text-gray-700"><strong>Elaun (RM)</strong></span>
                                            <div class="input-group mb-3">
                                                {!! Form::number('allowance', null, array('placeholder' => '0.00','class' => 'block w-full mt-1 rounded-md', 'step' => '.01', 'min' =>'0')) !!}
                                            </div>
                                        </label>
                                        @error('allowance')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                        <label class="block">
                                            <span class="text-gray-700"><strong>No KWSP</strong></span>
                                            {!! Form::number('kwsp_no', null, array('placeholder' => 'KWSP No','class' => 'block w-full mt-1 rounded-md', 'autocomplete' => 'off')) !!}
                                        </label>
                                        @error('kwsp_no')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- ######################################################## -->
                            <h3 class="mb-2" class="mt-5"><strong>Maklumat Pendidikan</strong></h3>                                
                            <div class="card">
                                <div class="card-body bg-gray-50">                                
                                    <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                        <label class="block">
                                            <span class="text-gray-700"><strong>Pendidikan</strong></span>
                                            {!! Form::select('education_id', $educations, null, array('placeholder' => 'Select Education Level', 'class' => 'block w-full mt-1 rounded-md', 'required')) !!}
                                        </label>
                                        @error('education_id')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 mt-2">
                                        <label class="block">
                                            <span class="text-gray-700"><strong>Pengkhususan Pendidikan</strong></span>
                                            {!! Form::text('edu_major', null, array('placeholder' => 'Education Major', 'class' => 'block w-full mt-1 rounded-md', 'autocomplete' => 'off')) !!}
                                        </label>
                                        @error('edu_major')
                                            <div class="text-sm text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- ######################################################## -->
                            <button type="submit" class="btn text-white bg-blue-500 hover:font-semibold hover:bg-blue-600
                                transition ease-in-out delay-30 
                                hover:-translate-y-1 duration-300 
                                rounded-full shadow-md
                                mt-3"
                            >
                            Submit</button>                            
                            {!! Form::close() !!}
                    
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection