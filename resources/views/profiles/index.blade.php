@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Tukar Kata Laluan</strong></div>

                        <div class="card-body">

                            <div class="row">

                            @if(session('success'))
                                @include('partials.messages.success')
                            @endif


                            <table class="table table-bordered rounded-lg">
                             <tr class="bg-blue-400 text-white">
                               <th>Nama</th>
                               <th>Email</th>
                               <th width="280px">Tindakan</th>
                             </tr>
                              <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                   <a href="{{ route('profiles.edit', $user->id) }}"
                                        class = "btn button bg-green-400 hover:bg-green-500 text-white hover:font-semibold
                                                transition ease-in-out delay-30
                                                hover:-translate-y-1 duration-300
                                                rounded-full hover:shadow-md shadow-md"
                                    >Tukar Kata Laluan</a>
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