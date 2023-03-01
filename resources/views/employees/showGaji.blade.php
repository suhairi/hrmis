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

            <div class="pull-right p-3">
                <a class="btn btn-dark rounded-full hover:bg-gray-600" href="{{ URL::previous() }}"> < Back</a>
            </div>

            <div class="row">
                <div class="col col-12">
                                    
                    <!-- Submenu for employee -->
                    <!-- Later put in partials -->
                    <div class="card">
                        <div class="card-body">                         
                            
                            @include('partials.employees.employeeMenu')

                            <div class="col-6">
                                <table class="table table-bordered table-hover table-striped shadow-2xl">
                                    <tr>
                                        <td colspan="2" class="bg-info text-light"><strong>Gaji</strong></td>
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