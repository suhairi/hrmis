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
                            <li class="breadcrumb-item active">Users</li>
                        </ul>
                        <!-- <h3>Admin Dashboard</h3> -->
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Employee KWSP - Housekeeping</strong></div>

                        <div class="card-body">


                            <div class="card">
                                <div class="card-header  bg-slate-200">
                                    <strong>Employee has no KWSP No</strong>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped table-hover">
                                    <tr>
                                        <th>Name</th>
                                        <th>No KP</th>
                                        <th>KWSP No</th>
                                        <th>PPK</th>
                                    </tr>
                                    @foreach($empty as $employee)
                                        <tr>
                                            <td>{{ $employee->name }}</td>
                                            <td align="right">{{ $employee->nokp }}</td>
                                            <td>{{ $employee->kwsp_no }}</td>
                                            <td>{{ $employee->ppk->code }} - {{ $employee->ppk->name }}</td>
                                        </tr>
                                    @endforeach
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