@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="pull-right p-3">
                <a class="btn btn-dark rounded-full hover:bg-gray-600" href="{{ URL::previous() }}"> < Back</a>
            </div>

            <div class="row">
                <div class="col col-12">
                                    
                    <!-- Submenu for employee -->
                    <!-- Later put in partials -->
                    <div class="card">
                        <div class="card-body">                         
                            
                            @include('partials.employees.employeeMenu')

                            <div class="col-6">
                                <table class="table table-bordered table-hover table-striped ">
                                <tr>
                                    <td colspan="2" class="bg-info text-light"><strong>Personal</strong></td>
                                </tr>
                                <tr>
                                    <td width="15%"><strong>Name</strong></td>
                                    <td>
                                        {{ ucWords(strtolower($employee->name)) }}
                                        @if($employee->employment_status == 'BEKERJA')
                                            <sup><span class="badge bg-green-600 text-white rounded-pill" style="font-size: 8px;">Active</span></sup>
                                        @else
                                            <sup><span class="badge bg-red-500 text-white rounded-pill" style="font-size: 8px;">Inative</span></sup>
                                        @endif
                                    </td>
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
                                    <td>RM {{ $employee->allowance }}</td>
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

        </div>
    </div>


@endsection