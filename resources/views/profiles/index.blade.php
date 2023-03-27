@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Profile Management</strong></div>

                        <div class="card-body">

                            <div class="row">

                            @if(session('success'))
                                @include('partials.messages.success')
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
                                   <a class="btn btn-success shadow-md" href="{{ route('profiles.edit', $user->id) }}">Tukar Kata Laluan</a>
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