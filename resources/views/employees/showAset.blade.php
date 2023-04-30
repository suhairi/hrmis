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

                            <div class="col-6">
                                <table class="table table-bordered table-hover table-striped shadow-2xl">
                                    <tr>
                                        <td colspan="2" class="bg-info text-light"><strong>Aset</strong></td>
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