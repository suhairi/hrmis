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
                            <li class="breadcrumb-item active">Leaves</li>
                        </ul>
                        <!-- <h3>Admin Dashboard</h3> -->
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Leave New Record</strong></div>

                        <div class="card-body">

                            <div class="pull-right p-2">
                                <a class="btn btn-dark rounded-full hover:bg-gray-600" href="{{ URL::previous() }}"> < Back</a>
                            </div>

                            <div class="card">
                                <div class="card-body">

                                    <div class="grid grid-cols-4 gap-4">

                                        <div>
                                            Name : <input type="text" name="name" id="name" class="form-control shadow rounded" autocomplete="off">
                                            <div id="product_list"></div>
                                        </div>
                                        <div>
                                            Leave Type : <select name="type" class="form-control border-black shadow focus:border-blue-400">
                                                <option>Select Leave Type</option>
                                                <option>Sick Leave</option>
                                                <option>Emergency Leave</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                        <div>
                                            Start Date : <input type="date" name="start_date" class="form-control rounded shadow">
                                        </div>
                                        <div>
                                            End Date : <input type="date" name="start_date" class="form-control rounded shadow">
                                        </div>

                                        <div class="alert col-span-4 bg-gray-100 flex-right">
                                            <a href="#" class="btn btn-success float-right">Add</a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            

                            
                            <input type="text" name="name" id="name" class="form-control" autocomplete="off">
                            <div id="product_list"></div>

                            <input type="date" name="start_date" id="name" class="form-control" autocomplete="off">
                            <input type="date" name="end_date" id="name" class="form-control" autocomplete="off">
                            


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')

<script type="text/javascript">

        $(document).ready(function(){
            $('#name').on('keyup',function () {
                var query = $(this).val();
                $.ajax({
                    url:'{{ route('employee.suggestion') }}',
                    type:'GET',
                    data:{'name':query},
                    success:function (data) {
                        $('#product_list').html(data);
                    }
                })
            });
            $(document).on('click', 'li', function(){
                var value = $(this).text();
                $('#name').val(value);
                $('#product_list').html("");
            });
        });
    </script>  

@endpush