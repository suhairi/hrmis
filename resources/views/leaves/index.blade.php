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

            <div class="col-6 mb-3">
                <a class="btn bg-green-400 hover:bg-green-500 text-white hover:font-semibold 
                            transition ease-in-out delay-30 hover:-translate-y-1 duration-300
                            shadow-md rounded-full" 
                    href="{{ route('leaves.create') }}">
                New Record</a>
            </div>

            <div class="grid grid-cols-3 gap-10">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Today</div>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-2 gap-12">
                            <div><strong>Total</strong></div>                            
                            <div>2 employees.</div>                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">This Month</div>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-2 gap-12">
                            <div><strong>Total</strong></div>                            
                            <div>2 employees.</div>                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">2023</div>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-2 gap-12">
                            <div><strong>Total</strong></div>                            
                            <div>2 employees.</div>                            
                        </div>
                    </div>
                </div>              
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Leaves Management</strong></div>

                        <div class="card-body">

                            <div class="col-md-7 shadow-md mb-5">
                                <div class="alert mb-2 float-right">
                                    <a href="{{ route('pdf.leavesList') }}" class="text-red-500 hover:text-red-700">
                                        <i class="fa fa-file-pdf fa-xl transition ease-in-out delay-30 hover:font-semibold hover:-translate-y-1 shadow-md"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-7 shadow-md">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Bil</th>
                                            <th>Nama</th>
                                            <th>Type of Leave</th>
                                            <th>Start and End Date</th>
                                            <th>Duration</th>
                                        </tr>
                                    </thead>
                                    @if(!empty($leaves))
                                        @foreach($leaves as $leave)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $leave->employee->name }}</td>
                                                <td>{{ $leave->type }}</td>
                                                <td>{{ $leave->start_date->format('d M') }} - {{ $leave->end_date->format('d M Y') }}</td>
                                                <td>{{ $leave->start_date->diffInDays($leave->end_date) }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </table>                                
                            </div>
                            

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection