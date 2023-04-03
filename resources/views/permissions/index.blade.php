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
                                    <a href="{{ route('permissions.create') }}"
                                        class="btn bg-green-400 hover:bg-green-500 text-white hover:font-semibold
                                        transition ease-in-out delay-30
                                        hover:-translate-y-1 duration-300
                                        shadow-sm rounded" 
                                    > 
                                    Create New Permission</a>
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
                                    <a href="{{ route('permissions.show', $permission->id) }}"
                                        class="btn bg-yellow-300 hover:bg-yellow-400 text-white hover:font-semibold
                                        transition ease-in-out delay-30
                                        hover:-translate-y-1 duration-300
                                        shadow-md rounded-full" 
                                    >Show</a>
                                   <a href="{{ route('permissions.edit', $permission->id) }}"
                                         class="btn bg-green-400 hover:bg-green-500 text-white hover:font-semibold
                                         transition ease-in-out delay-30
                                         hover:-translate-y-1 duration-300
                                         shadow-md rounded-full"
                                    >Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                    {{ Form::button('Delete', ['type' => 'submit', 
                                            'class' => 
                                            'btn button bg-red-600 hover:bg-red-700 text-white hover:font-semibold
                                            transition ease-in-out delay-30
                                            hover:-translate-y-1 duration-300
                                            shadow-md rounded-full'
                                        ]) 
                                    }}

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