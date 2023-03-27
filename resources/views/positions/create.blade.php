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

                            {!! Form::open(array('route' => 'positions.store','method'=>'POST')) !!}
                            <div class="row pt-4 rounded mt-3 shadow">

                                <!-- ######## PERSONAL ######### -->
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="alert alert-info"><strong>Create New Position</strong></div>
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
                                            <span class="input-group-text" id="basic-addon1"><strong>Grade</strong></span>
                                        </div>
                                        {!! Form::text('grade', null, array('placeholder' => 'S1 / S2 / S3 / S4','class' => 'form-control')) !!}
                                        @error('grade')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><strong>Scheme</strong></span>
                                        </div>
                                        {!! Form::select('scheme', ['SOKONGAN' => 'SOKONGAN', 'KONTRAK' => 'KONTRAK'], null, array('placeholder' => 'Select Scheme','class' => 'form-control')) !!}
                                        @error('scheme')
                                            <p class="text-danger mr-4">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                            </div>
                            <div class="row pt-4 rounded shadow">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center p-3">
                                    @include('partials.buttons.submit', ['text' => 'Cipta'])
                                </div>
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