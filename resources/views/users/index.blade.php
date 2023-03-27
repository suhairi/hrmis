@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Users Management</strong></div>

                        <div class="card-body">

                            @can('role-create')
                                <div class="pull-right p-3">
                                    <a href="{{ route('users.create') }}"
                                        class="btn bg-green-400 hover:bg-green-500 text-white hover:font-semibold
                                        transition ease-in-out delay-30
                                        hover:-translate-y-1 duration-300
                                        shadow-sm rounded" 
                                    > 
                                    Create New User</a>
                                </div>
                            @endcan

                            @if(session('success'))
                                @include('partials.messages.success')
                            @endif


                            <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-blue-500 text-white">
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Roles</th>
                                    <th>Permissions</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                             @foreach ($data as $key => $user)
                              <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->location }}</td>
                                <td style="vertical-align:top">
                                  @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                       <label class="badge badge-secondary">{{ $v }}</label>
                                    @endforeach
                                  @endif
                                </td>
                                <td>
                                  @if(!empty($user->getPermissionsViaRoles()))
                                    <ol>
                                    @foreach($user->getPermissionsViaRoles() as $permission)
                                       <li>{{ $permission->name }}</li>
                                    @endforeach
                                    </ol>
                                  @endif
                                </td>
                                
                                <td>
                                   <a href="{{ route('users.show', $user->id) }}"
                                        class="btn bg-yellow-300 hover:bg-yellow-400 text-white hover:font-semibold
                                        transition ease-in-out delay-30
                                        hover:-translate-y-1 duration-300
                                        shadow-md rounded-full" 
                                    >Show</a>
                                   <a href="{{ route('users.edit', $user->id) }}"
                                         class="btn bg-green-400 hover:bg-green-500 text-white hover:font-semibold
                                         transition ease-in-out delay-30
                                         hover:-translate-y-1 duration-300
                                         shadow-md rounded-full"
                                    >Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                    {{ Form::button('Delete', ['type' => 'submit', 
                                            'class' => 
                                            'btn button bg-red-600 hover:bg-red-700 text-white hover:font-semibold
                                            transition ease-in-out delay-30
                                            hover:-translate-y-1 duration-300
                                            shadow-md rounded-full'
                                        ]) 
                                    }}
                                    {!! Form::close() !!}
                                </td>
                              </tr>
                             @endforeach
                            </table>

                            <div class="mt-4">
                                {!! $data->links('vendor.pagination.bootstrap-5') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection