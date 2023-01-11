@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row mb-4">
                <div class="col-12">
                    <div class="breadcrumb-path ">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><img src="{{ URL::to('assets/img/dash.png') }}" class="mr-3" alt="breadcrumb" />Home</a>
                            </li>
                            <li class="breadcrumb-item active">Employees</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Create New Employee</strong></div>

                        <div class="card-body">

                            <div class="pull-right p-3">
                                <a class="btn btn-dark" href="{{ URL::previous() }}"> Back</a>
                            </div>

<!--                             @if (count($errors) > 0)
                              <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                   @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                   @endforeach
                                </ul>
                              </div>
                            @endif -->

                            {!! Form::open(array('route' => 'employees.store','method'=>'POST')) !!}
                            <div class="row pt-4 rounded mt-3 shadow">

                                <!-- ######## PERSONAL ######### -->
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="alert alert-info"><strong>1 - Employee Personal Details</strong></div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>Name</strong></span>
                                        </div>
                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                        @error('name')
                                            <span class="text-danger mr-4">{{ $message }}</span>
                                        @enderror                                      
                                    </div>
                                    
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>No KP</strong></span>
                                        </div>
                                        {!! Form::text('nokp', null, array('placeholder' => 'No Kad Pengenalan : 890130-02-5567','class' => 'form-control')) !!}
                                        @error('nokp')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>Gender</strong></span>
                                        </div>
                                        {!! Form::select('gender', ['LELAKI' => 'LELAKI', 'PEREMPUAN' => 'PEREMPUAN'], null, array('placeholder' => 'Select Gender','class' => 'form-control')) !!}
                                        @error('gender')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                            </div>
                            <div class="row pt-4 rounded mt-3 shadow">

                                <!-- ######## JOB DETAILS ######### -->
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="alert alert-info"><strong>2 - Job Details</strong></div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>Position</strong></span>
                                        </div>
                                        {!! Form::select('position_id', $positions, null, array('placeholder' => 'Select Position','class' => 'form-control')) !!}
                                        @error('position_id')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>Start Date</strong></span>
                                        </div>
                                        {!! Form::date('start_date', null, array('placeholder' => 'Start date','class' => 'form-control')) !!}
                                        @error('start_date')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>Employment Status</strong></span>
                                        </div>
                                        {!! Form::select('employment_status', ['BERSARA', 'BEKERJA', 'BERHENTI'], null, array('placeholder' => 'Select Employment Status','class' => 'form-control')) !!}
                                        @error('employment_status')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>Service Status</strong></span>
                                        </div>
                                        {!! Form::select('service_status', ['TETAP', 'SAMBILAN', 'KONTRAK', 'BERSARA'], null, array('placeholder' => 'Select Service Status','class' => 'form-control')) !!}
                                        @error('service_status')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>                                

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>Basic Salary</strong></span>
                                            <span class="input-group-text" id="basic-addon1">RM</span>
                                        </div>
                                        {!! Form::number('basic_salary', null, array('placeholder' => 'Basic Salary','class' => 'form-control', 'step' => '.01')) !!}
                                        @error('basic_salary')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>Allowance</strong></span>
                                            <span class="input-group-text" id="basic-addon1">RM</span>
                                        </div>
                                        {!! Form::number('allowance', null, array('placeholder' => 'Allowance','class' => 'form-control', 'step' => '.01')) !!}
                                        @error('allowance')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>KWSP No</strong></span>
                                        </div>
                                        {!! Form::text('kwsp_no', '', array('placeholder' => 'KWSP No','class' => 'form-control')) !!}
                                        @error('kwsp_no')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>PPK</strong></span>
                                        </div>
                                        {!! Form::select('ppk_id', $ppks, null, array('class' => 'form-control', 'placeholder' => 'Select PPK')) !!}
                                        @error('ppk_id')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                            </div>
                            <div class="row pt-4 mt-3 rounded shadow">
                                
                                <!-- ######## EDUCATION ######### -->                                
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="alert alert-info" role="alert"><strong>3 - Education Background</strong></div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>Education</strong></span>
                                        </div>
                                        {!! Form::select('education_id', $educations, null, array('placeholder' => 'Select Education Level', 'class' => 'form-control')) !!}
                                        @error('education_id')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>Education Major</strong></span>
                                        </div>
                                        {!! Form::text('edu_major', null, array('placeholder' => 'Education Major', 'class' => 'form-control')) !!}
                                        @error('edu_major')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6"></div>

                                
                            
                            </div>
                            <div class="row pt-4 rounded shadow">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center p-3">
                                    <button type="submit" class="btn btn-success shadow">Submit</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                    
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection