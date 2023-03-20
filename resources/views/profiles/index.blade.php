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
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                        <!-- <h3>Admin Dashboard</h3> -->
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Profile Management</strong></div>

                        <div class="card-body">

                            <div class="row">

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success! </strong> {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <table class="table table-bordered rounded-lg">
                             <tr class="bg-blue-400 text-white">
                               <th>Name</th>
                               <th>Email</th>
                               <th width="280px">Action</th>
                             </tr>
                              <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                   <a class="btn btn-success shadow-md" href="{{ route('profiles.edit', $user->id) }}">Edit</a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                </td>
                              </tr>
                            </table>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection