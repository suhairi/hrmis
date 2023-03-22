@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row mb-4">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header"><strong>Employee - Status 'active' and service more than 30 years</strong></div>

                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">

                                    <small>** data terkini - jun 2022 <br /><br /></small>
                                    <table class="table table-bordered table-striped table-hover">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Start Date</th>
                                        <th>PPK</th>
                                    </tr>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $employee->name }}
                                                <sup>
                                                    @if($employee->employment_status == 'BEKERJA')
                                                        <span class='badge bg-green-600 text-white rounded-pill' style='font-size: 8px;'>Active</span>
                                                    @else
                                                        <span class='badge bg-red-500 text-white rounded-pill' style='font-size: 8px;'>Inative</span>
                                                    @endif
                                                </sup>
                                                <br />
                                                {{ $employee->nokp }}
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($employee->start_date)->format('d-m-Y') }}
                                                <br />
                                                <font class="text-red-500 font-bold">
                                                    {{ \Carbon\Carbon::now()->diffInYears($employee->start_date) }}
                                                    years of service
                                                </font> <br />
                                                <hr class="my-2">
                                                <strong>Umur Sekarang :</strong> {{ $employee->age }} tahun. <br />
                                                <strong>Umur Mula Kerja :</strong> {{ $employee->age - \Carbon\Carbon::now()->diffInYears($employee->start_date) }} tahun.
                                            </td>
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