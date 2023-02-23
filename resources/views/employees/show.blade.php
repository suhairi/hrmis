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

            <div class="pull-right p-3">
                <a class="btn btn-dark rounded-full hover:bg-gray-600" href="{{ URL::previous() }}"> < Back</a>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Employee Dashboard</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-6">
                    <div class="card">
                        <div class="card-header shadow-lg text-white text-bold" style="background-color: #6E9AF6">
                            <div class="card-title">Profile</div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped shadow-2xl">
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
                <div class="col col-3">
                    <div class="card">
                        <div class="card-header shadow-lg text-white" style="background-color: #6E9AF6">
                            <div class="card-title">Cuti</div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped shadow-2xl">
                                <tr>
                                    <td colspan="3" class="bg-info text-light"><strong>**Rekod Cuti Tahun Semasa</strong></td>
                                </tr>
                                <tr class="bg-blue-200">
                                    <th>Bil</th>
                                    <th>Keterangan</th>
                                    <th>Tempoh</th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>30 Jan 2023 - 31 Jan 2023</td>
                                    <td>2 Hari</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>15 Feb 2023 - 15 Feb 2023</td>
                                    <td>1 Hari</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>20 Mar 2023 - 20 Jan 2023</td>
                                    <td>1 Hari</td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="right"><strong>JUMLAH</strong></td>
                                    <td><strong>4 Hari</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>                    
                </div>
                <div class="col col-3">
                    <div class="card">
                        <div class="card-header shadow-lg text-white" style="background-color: #6E9AF6">
                            <div class="card-title ">Prestasi</div>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-hover table-striped shadow-2xl">
                                <tr>
                                    <td colspan="3" class="bg-info text-light"><strong>**Prestasi Kerja Tahunan</strong></td>
                                </tr>
                                <tr class="bg-blue-200 hover:none">
                                    <th>Bil</th>
                                    <th>Tahun</th>
                                    <th>Indicator/Markah</th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td><a href="#">2023</a></td>
                                    <td> <i>-no record-</i></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td><a href="#" class="link-primary">2022</a></td>
                                    <td>90.5 %</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td><a href="#">2021</a></td>
                                    <td>87.3 %</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td><a href="#">2020</a></td>
                                    <td>88.6 %</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td><a href="#">2019</a></td>
                                    <td>91.3 %</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td><a href="#">2018</a></td>
                                    <td>92.1 %</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Second Row -->
            <div class="row">
                <div class="col col-6">
                    <div class="card">
                        <div class="card-header shadow-lg text-white" style="background-color: #6E9AF6">
                            <div class="card-title ">Aset</div>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-hover table-striped shadow-2xl">
                                <tr>
                                    <td colspan="3" class="bg-info text-light"><strong>**Aset </strong></td>
                                </tr>
                                <tr class="bg-blue-200 hover:none">
                                    <th>Bil</th>
                                    <th>Keterangan</th>
                                    <th>Bilangan</th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td><a href="#">External hard disk</a></td>
                                    <td>1 unit</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td><a href="#" class="link-primary">Bosch - Pengukur Digital</a></td>
                                    <td>2 unit</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td><a href="#">Samsung - Telefon Bimbit (Galaxy S23)</a></td>
                                    <td>1 unit</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td><a href="#">Bosch - Pengukur PH Tanah</a></td>
                                    <td>2 Unit</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection