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

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Users Management</strong></div>

                        <div class="card-body">

                            @can('role-create')
                                <div class="pull-right p-3">
                                    <a class="btn btn-success shadow-sm rounded" href="{{ route('employees.create') }}"> Create New Employee</a>
                                </div>
                            @endcan

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success! </strong> {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <table class="table table-bordered mb-5">
                             <tr>
                               <th>No</th>
                               <th>Name</th>
                               <th>No KP</th>
                               <th>Jantina</th>
                               <th>PPK / Jawatan / Status</th>
                               <th>Tarikh Lantikan</th>
                               <th width="280px">Action</th>
                             </tr>
                             @foreach ($employees as $key => $employee)
                              <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->nokp }}</td>
                                <td>{{ $employee->gender }}</td>
                                <td>
                                    {{ $employee->ppk->code }} - {{ $employee->ppk->name }} <br />
                                    {{ $employee->position->name }} <br />
                                    {{ $employee->service_status }} 
                                </td>
                                <td>
                                    {{ Carbon\Carbon::parse($employee->start_date)->format('d-m-Y') }} <br />
                                    {{ Carbon\Carbon::parse($employee->start_date)->diffInYears(Carbon\Carbon::now()) }} years<br />
                                </td>
                                <td>
                                   <a class="btn btn-info shadow-md" href="{{ route('employees.show', $employee->id) }}">Show</a>
                                   <a class="btn btn-success shadow-md" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['employees.destroy', $employee->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger shadow-md']) !!}
                                    {!! Form::close() !!}
                                </td>
                              </tr>
                             @endforeach
                            </table>

                            <div class="d-flex justify-content-center">
                                {!! $employees->links('vendor.pagination.bootstrap-5') !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection