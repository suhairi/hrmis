@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row mb-4">
                <div class="col-12">
                    <div class="breadcrumb-path ">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><img src="{{ URL::to('assets/img/dash.png') }}" class="mr-3" alt="breadcrumb" />Home</a>
                            </li>
                            <li class="breadcrumb-item active">Employee</li>
                        </ul>
                        <!-- <h3>Admin Dashboard</h3> -->
                    </div>
                </div>
            </div>

            <div class="pull-right p-2 mb-3">
                <a class="btn bg-gray-500 hover:bg-gray-600 text-white hover:font-semibold 
                    transition ease-in-out delay-30 
                    hover:-translate-y-1 duration-300 
                    rounded-full shadow-md" 
                    href="{{ URL::previous() }}">
                < Back</a>
            </div>

            <div class="row">
                <div class="col col-12">
                                    
                    <!-- Submenu for employee -->
                    <!-- Later put in partials -->
                    <div class="card">
                        <div class="card-body">                         
                            
                            @include('partials.employees.employeeMenu')

                            @can('leave-create')
                                <div class="p-3">
                                    <a href="{{ route('leaves.create') }}" class="btn button bg-green-500 hover:bg-green-600 text-white hover:font-semibold 
                                    transition ease-in-out delay-30
                                    hover:-translate-y-1 duration-300
                                    shadow-md rounded"
                                    >
                                    Cipta Rekod Cuti</a>
                                </div>
                                <hr class="mb-4">
                            @endcan

                            <div class="col-6">
                                <table class="table table-bordered table-hover table-striped shadow-2xl">
                                        <thead>
                                            <tr>
                                                <th>Bil</th>
                                                <th>Description</th>
                                                <th>Duration (days)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>                                        
                                    <tr>
                                        <td class="text-center font-bold">1.</td>
                                        <td>01 Jan - 02 Jan 2023</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
                                            </a>
                                            <a class="btn btn-success rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-pencil-square mr-2"> </i>Edit
                                            </a>
                                            <a class="btn text-white bg-red-600 hover:bg-red-700 rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-trash mr-2"> </i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-bold">2.</td>
                                        <td>14 Feb - 14 Feb 2023</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
                                            </a>
                                            <a class="btn btn-success rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-pencil-square mr-2"> </i>Edit
                                            </a>
                                            <a class="btn text-white bg-red-600 hover:bg-red-700 rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-trash mr-2"> </i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-bold">3.</td>
                                        <td>03 Mar - 04 Mar 2023</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
                                            </a>
                                            <a class="btn btn-success rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-pencil-square mr-2"> </i>Edit
                                            </a>
                                            <a class="btn text-white bg-red-600 hover:bg-red-700 rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-trash mr-2"> </i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-bold">4.</td>
                                        <td>01 Apr - 02 Apr 2023</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
                                            </a>
                                            <a class="btn btn-success rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-pencil-square mr-2"> </i>Edit
                                            </a>
                                            <a class="btn text-white bg-red-600 hover:bg-red-700 rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-trash mr-2"> </i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            

                        </div>
                    </div>


                </div>                
            </div>

            </div>

        </div>
    </div>


@endsection