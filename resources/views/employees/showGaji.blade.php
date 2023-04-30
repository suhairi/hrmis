@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            @include('partials.buttons.back')

            <div class="row">
                <div class="col col-12">
                                    
                    <!-- Submenu for employee -->
                    <!-- Later put in partials -->
                    <div class="card">
                        <div class="card-body">                         
                            
                            @include('partials.employees.employeeMenu')

<!--                             <div class="col-6 mb-2">
                                <a class="btn bg-yellow-200 hover:bg-yellow-300 rounded-full mr-2 hover:font-bold">Pending</a>
                                <a class="btn bg-green-100 hover:bg-green-200 rounded-full mr-2 hover:font-bold">Incoming</a>
                            </div> -->

                            <div class="col-6">
                                <table class="table table-bordered table-hover table-striped shadow-2xl">
                                        <thead>
                                            <tr>
                                                <th>Bil</th>
                                                <th>Description (2022)</th>
                                                <th>Payment (RM)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>                                        
                                    <tr>
                                        <td>1.</td>
                                        <td>Jan</td>
                                        <td class="text-left">
                                            Basic : RM 1253.15 <br />
                                            Allowance : RM 125.30 <br />
                                            <strong>Total : RM 1378.45</strong>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Feb</td>
                                        <td class="text-left">
                                            Basic : RM 1253.15 <br />
                                            Allowance : RM 125.30 <br />
                                            <strong>Total : RM 1378.45</strong>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Mar</td>
                                        <td class="text-left">
                                            Basic : RM 1253.15 <br />
                                            Allowance : RM 125.30 <br />
                                            <strong>Total : RM 1378.45</strong>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Apr</td>
                                        <td class="text-left">
                                            Basic : RM 1253.15 <br />
                                            Allowance : RM 125.30 <br />
                                            <strong>Total : RM 1378.45</strong>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Mei</td>
                                        <td class="text-left">
                                            Basic : RM 1253.15 <br />
                                            Allowance : RM 125.30 <br />
                                            <strong>Total : RM 1378.45</strong>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Jun</td>
                                        <td class="text-left">
                                            Basic : RM 1253.15 <br />
                                            Allowance : RM 125.30 <br />
                                            <strong>Total : RM 1378.45</strong>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Jul</td>
                                        <td class="text-left">
                                            Basic : RM 1253.15 <br />
                                            Allowance : RM 125.30 <br />
                                            <strong>Total : RM 1378.45</strong>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Aug</td>
                                        <td class="text-left">
                                            Basic : RM 1253.15 <br />
                                            Allowance : RM 125.30 <br />
                                            <strong>Total : RM 1378.45</strong>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn bg-yellow-300 hover:bg-yellow-400 text-white rounded-full hover:shadow-md" href="#">
                                                <i class="fa fa-eye mr-2"> </i>Show
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