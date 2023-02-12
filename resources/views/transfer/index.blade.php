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
                                    <a class="btn btn-success shadow-sm rounded" href="{{ route('users.create') }}"> Create New User</a>
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


                            <table class="table table-bordered">
                             <tr>
                               <th>No</th>
                               <th>Name</th>
<!--                                <th>No KP</th>
                               <th>Location</th>
                               <th>Employment Status</th>
                               <th>Position</th>
                               <th>Start Date</th>                               
                               <th width="280px">Action</th> -->
                             </tr>
                             @foreach($transfers as $key => $transfer)
                              <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $transfer->user()->name }}</td>
<!--                                 <td>{{ $transfer->email }}</td>
                                <td>{{ $transfer->location }}</td>                              
                                <td>
                                   <a class="btn btn-info shadow-md" href="{{ route('users.show', $user->id) }}">Show</a>
                                   <a class="btn btn-success shadow-md" href="{{ route('users.edit', $user->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger shadow-md']) !!}
                                    {!! Form::close() !!}
                                </td> -->
                              </tr>
                             @endforeach
                            </table>

                            <div class="mt-4">
                                {!! $transfers->links('vendor.pagination.bootstrap-5') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection