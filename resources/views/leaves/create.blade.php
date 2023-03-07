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

                        <div class="card-body shadow">

                            <div class="pull-right p-2">
                                <a class="btn bg-gray-500 hover:bg-gray-600 text-white hover:font-semibold 
                                    transition ease-in-out delay-30 hover:-translate-y-1 duration-300 
                                    rounded-full shadow-md" 
                                    href="{{ URL::previous() }}">
                                 < Back</a>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header"><div class="card-title">Record Leave</div></div>
                                <div class="card-body">

                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                           @foreach ($errors->all() as $error)
                                             <li>{{ $error }}</li>
                                           @endforeach
                                        </ul>
                                      </div>
                                    @endif

                                    {!! Form::open(['route' => 'leaves.store', 'method' => 'POST']) !!}
                                    <div class="grid grid-cols-4 gap-4">

                                        <div>
                                            Name : <input type="text" name="name" id="name" class="form-control shadow rounded" required autocomplete="off">
                                            <input type="hidden" name="employee_id" id="employee_id">
                                            <div id="employee_list"></div>
                                        </div>
                                        <div>
                                            Leave Type : <select name="type" class="form-control border-black shadow focus:border-blue-400" required>
                                                <option>Select Leave Type</option>
                                                <option>Sick Leave</option>
                                                <option>Emergency Leave</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                        <div>
                                            Start Date : <input type="date" name="start_date" class="form-control rounded shadow" required>
                                        </div>
                                        <div>
                                            End Date : <input type="date" name="end_date" class="form-control rounded shadow" required>
                                        </div>

                                        <div class="alert col-span-4 flex-right">
                                            <button type="submit" 
                                                class="btn float-right bg-green-400 hover:bg-green-500 text-white hover:font-semibold
                                                    transition ease-in-out delay-30 hover:-translate-y-1 duration-300 
                                                    rounded shadow-md">
                                                Add</button>
                                        </div>

                                    </div>
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        


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
                        $('#employee_list').html(data);
                        // console.log(data);
                    }
                })
            });
            $(document).on('click', 'li', function(){
                var value = $(this).text();
                var id = $(this).attr("id");
                $('#name').val(value);
                $('#employee_id').val(id);
                $('#employee_list').html("");
            });
        });
    </script>  

@endpush