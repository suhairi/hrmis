@extends('layouts.master')
@section('menu')
@extends('sidebar.sidebar')
@endsection
@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

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
                                @include('partials.messages.success')
                            @endif


                            <table class="table table-bordered">
                            <thead>
                                <tr class="bg-blue-500 text-white">
                                   <th>No</th>
                                   <th>Name</th>
                                   <th>Guard Name</th>
                                   <th width="280px">Action</th>
                                </tr>
                            </thead>
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

                            <div class="mt-3">
                                {!! $permissions->links('vendor.pagination.bootstrap-5') !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection