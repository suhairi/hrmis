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
                            <li class="breadcrumb-item active">Users</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Audits Management</strong></div>

                        <div class="card-body">

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success! </strong> {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <ul class="nav nav-pills">  
                                <li class="nav-item active">
                                    <a data-toggle="tab" href="#employees" class="nav-link">Employees</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#positions" class="nav-link">Positions</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#users" class="nav-link">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#permissions" class="nav-link">Permissions</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#other" class="nav-link">Others</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="employees" class="tab-pane fade in active">
                                    @include('partials.audits.employees')
                                </div>
                                <div id="positions" class="tab-pane fade in">
                                    @include('partials.audits.positions')
                                </div>
                                <div id="users" class="tab-pane fade in">
                                    @include('partials.audits.users')
                                </div>
                                <div id="permissions" class="tab-pane fade in">
                                    @include('partials.audits.permissions')
                                </div>
                                <div id="other" class="tab-pane fade in">
                                    5
                                </div>
                            </div>




                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
