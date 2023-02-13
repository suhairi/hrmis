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
                        <!-- <h3>Admin Dashboard</h3> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Show Employee</strong></div>

                        <div class="card-body">

                            <div class="pull-right p-3">
                                <a class="btn btn-dark" href="{{ URL::previous() }}"> Back</a>
                            </div>

                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td colspan="2" class="bg-info text-light"><strong>Personal</strong></td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>Name</strong></td>
                                    <td>{{ ucWords(strtolower($employee->name)) }}</td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>No KP</strong></td>
                                    <td>{{ $employee->nokp }}</td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>Jantina</strong></td>
                                    <td>{{ ucWords(strtolower($employee->gender)) }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="bg-info text-light"><strong>Employment</strong></td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>Position</strong></td>
                                    <td>{{ ucWords(strtolower($employee->position->name)) }}</td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>Employment Status</strong></td>
                                    <td>{{ ucWords(strtolower($employee->employment_status)) }}</td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>Service Status</strong></td>
                                    <td>{{ ucWords(strtolower($employee->service_status)) }}</td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>Start Date</strong></td>
                                    <td>{{ \Carbon\Carbon::parse($employee->start_date)->format('d-m-Y') }}</td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>Basic Salary</strong></td>
                                    <td>RM {{ $employee->basic_salary }}</td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>Allowance</strong></td>
                                    <td>RM {{ $employee->basic_salary }}</td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>KWSP No</strong></td>
                                    <td>{{ $employee->kwsp_no }}</td>
                                </tr>                                
                                <tr>
                                    <td colspan="2" class="bg-info text-light"><strong>Education</strong></td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>Education</strong></td>
                                    <td>{{ $employee->education->name }}</td>
                                </tr>                        
                            </table>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection