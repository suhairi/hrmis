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
                            <li class="breadcrumb-item active">Permissions</li>
                        </ul>
                        <!-- <h3>Admin Dashboard</h3> -->
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Permissions Management</strong></div>

                        <div class="card-body">

                            @can('role-create')
                                <div class="pull-right p-3">
                                    <a class="btn btn-success shadow-sm rounded" href="{{ route('permissions.create') }}"> Create New Permission</a>
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
                               <th>Guard Name</th>
                               <th width="280px">Action</th>
                             </tr>
                             @foreach ($permissions as $key => $permission)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->guard_name }}</td>                            
                                <td>
                                   <a class="btn btn-info shadow-md" href="{{ route('permissions.show', $permission->id) }}">Show</a>
                                   <a class="btn btn-success shadow-md" href="{{ route('permissions.edit', $permission->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger shadow-md']) !!}
                                    {!! Form::close() !!}
                                </td>
                              </tr>
                             @endforeach
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection