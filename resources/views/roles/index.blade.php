@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">


            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Roles Management</strong></div>

                        <div class="card-body">
                        
                            @can('role-create')

                                <div class="pull-right p-3">
                                    <a href="{{ route('roles.create') }}"
                                        class="btn bg-green-400 hover:bg-green-500 text-white hover:font-semibold
                                        transition ease-in-out delay-30
                                        hover:-translate-y-1 duration-300
                                        shadow-sm rounded" 
                                    > 
                                    Create New Role</a>
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
                                     <th width="280px">Action</th>
                                  </tr>
                                </thead>
                                @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a href="{{ route('roles.show', $role->id) }}" 
                                            class="btn button bg-yellow-300 hover:bg-yellow-400 text-white hover:font-semibold
                                            transition ease-in-out delay-30
                                            hover:-translate-y-1 duration-300
                                            rounded-full hover:shadow-md shadow-md" 
                                        >
                                            <i class="fa fa-eye mr-2"> </i>Papar
                                        </a>
                                        <a href="{{ route('roles.edit', $role->id) }}"
                                            class="btn button bg-green-400 hover:bg-green-500 text-white hover:font-semibold
                                            transition ease-in-out delay-30
                                            hover:-translate-y-1 duration-300
                                            rounded-full hover:shadow-md shadow-md" 
                                        >
                                            <i class="fa fa-pencil-square mr-2"> </i>Kemaskini
                                        </a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                            {{ Form::button('<i class="fa fa-trash mr-2"></i>Hapus', ['type' => 'submit', 
                                                    'class' => 'btn button bg-red-600 hover:bg-red-700 text-white hover:font-semibold
                                                    transition ease-in-out delay-30
                                                    hover:-translate-y-1 duration-300
                                                    rounded-full hover:shadow-md 
                                                    show_confirm shadow-md'
                                                ])  
                                            }}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {!! $roles->links('vendor.pagination.bootstrap-5') !!}

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection