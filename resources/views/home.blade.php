@extends('layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success! </strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            
            <div class="row mb-4">
                <div class="col-xl-12 col-sm-12 col-12">
                    <div class="breadcrumb-path ">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><img src="assets/img/dash.png"
                                        class="mr-3" alt="breadcrumb" />Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                        <h3>Admin Dashboard</h3>
                    </div>
                </div>
<!--                 <div class="col-xl-6 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-6 col-sm-6 col-12">
                            <a class="btn-dash" href="#"> Admin Dashboard</a>
                        </div>
                        <div class="col-xl-6 col-sm-6 col-12">
                            <a class="btn-emp" href="index-employee.html">Employee Dashboard</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill2 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>PPK</label>
                                <h4><small><small>{{ $ppk }}</small></small></h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="assets/img/dash2.png" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill1 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>Employees</label>
                                <h4>{{ count($employees) }}</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="assets/img/dash1.png" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill3 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>**Leaves</label>
                                <h4>9</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="assets/img/dash3.png" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill4 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>**Salary</label>
                                <h4>$5.8M</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="assets/img/dash4.png" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-xl-6 d-flex mobile-h">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Total Employees</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <div id="invoice_chart"></div> -->
                            <!-- <div id="sales_chart"></div> -->
                            <div class="card">
                                <div class="card-header bg-orange-300"><strong>By Gender</strong></div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped table-hover">
                                        <tr>
                                            <td><strong><i class="fas fa-male">  </i> LELAKI</strong></td>
                                            <td>
                                                @if(array_key_exists('LELAKI', $gender->toArray()))
                                                    {{ $gender['LELAKI'] }} orang.
                                                @else
                                                    {{ $gender['L'] }} orang.
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong><i class="fa fa-female">  </i> PEREMPUAN</strong></td>
                                            <td>
                                                @if(array_key_exists('PEREMPUAN', $gender->toArray()))
                                                    {{ $gender['PEREMPUAN'] }} orang.
                                                @else
                                                    {{ $gender['P'] }} orang.
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="bg-slate-200">
                                            <td><strong>TOTAL</strong></td>
                                            <td><strong>{{ count($employees) }} orang.</strong></td>
                                        </tr>
                                                                            
                                    </table>

                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-orange-300"><strong>By Employment Status</strong></div>
                                <div class="card-body">
                                    <table class="table table-bordered table-condensed table-striped">
                                    @foreach($employment_status as $value)
                                        <tr>
                                        @if(array_key_exists($value['employment_status'], $employments))
                                            <td><strong>{{ $value['employment_status'] }}</strong></td>
                                            <td>{{ $employments[$value['employment_status']] }} orang.</td>
                                        @else
                                            <td><strong>{{ $value['employment_status'] }}</strong></td>
                                            <td>0 orang.</td>
                                        @endif
                                        </tr>
                                    @endforeach
                                        <tr class="bg-slate-200">
                                            <td><strong>TOTAL</strong></td>
                                            <td><strong>{{ count($employees) }} orang.</strong></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Housekeeping</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="team-list">
                                <div class="team-view">
                                    <div class="team-content">
                                        <label>Employee Work More than 30 Years</label>
                                        <span>Action : Display the list</span>
                                    </div>
                                </div>
                                <div class="team-action">
                                    <ul>
                                        <li><a href="{{ route('trim.employee.name') }}"><i data-feather="play"></i></a></li>
                                    </ul>
                                </div>                                                                
                            </div>
                        </div>

                            

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection