@extends('layouts.master')
@section('menu')
    @extends('sidebar.sidebar')
@endsection
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

                            @if (count($errors) > 0)
                              <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                   @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                   @endforeach
                                </ul>
                              </div>
                            @endif


                            @if($currentStep == 1)
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Employee Name :</strong>
                                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>No KP :</strong>
                                            {!! Form::text('nokp', null, array('placeholder' => 'No KP','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Gender :</strong>
                                            {!! Form::select('gender', ['LELAKI', 'PEREMPUAN'], 'GENDER', array('placeholder' => 'Gender','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center p-3">
                                        <button class="btn btn-success" wire:click='secondStep'>Next</button>
                                    </div>
                                </div>
                            @endif

                            @if($currentStep == 2)
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Start Date :</strong>
                                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Basic Salary :</strong>
                                            {!! Form::text('nokp', null, array('placeholder' => 'No KP','class' => 'form-control')) !!}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center p-3">
                                        <button class="btn btn-success" wire:click='prev'>Previous</button>
                                        <button class="btn btn-success" wire:click='thirdStep'>Next</button>
                                    </div>
                                </div>
                            @endif

                            


                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

