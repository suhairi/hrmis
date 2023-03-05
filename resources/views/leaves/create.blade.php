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
                            <li class="breadcrumb-item active">Leaves</li>
                        </ul>
                        <!-- <h3>Admin Dashboard</h3> -->
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Leave New Record</strong></div>

                        <div class="card-body">

                            <h1>Leave Index</h1>

                            {!! Form::open(array('route' => 'employees.store','method'=>'POST')) !!}
                            <div class="row pt-4 rounded mt-2 shadow">

                                <!-- ######## PERSONAL ######### -->
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="alert bg-blue-500 text-white"><strong>Employee Leave</strong></div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6"></div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-blue-200" id="basic-addon1"><strong>Name</strong></span>
                                        </div>
                                        {!! Form::text('name', null, array('placeholder' => 'Name', 'class' => 'form-control bg-gray-200 hover:bg-gray-200', 'readonly' => 'true')) !!}
                                        @error('name')
                                            <span class="text-danger mr-4">{{ $message }}</span>
                                        @enderror                                      
                                    </div>                                    
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8"></div>

                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection