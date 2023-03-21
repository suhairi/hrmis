@extends('layouts.master')

@section('content')
    


    <div class="page-wrapper">
        <div class="content container-fluid">

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
                                            <!-- <input type="text" id="search" name="search" placeholder="Search" class="form-control" /> -->
                                            <strong>Name :</strong> <input type="text" name="name" id="name" class="form-control shadow rounded" required autocomplete="off" placeholder="Type a name..." value="{{ old('name') }}">
                                            <input type="hidden" name="employee_id" id="employee_id" value="{{ old('employee_id') }}">
                                            <div id="employee_list"></div>
                                        </div>
                                        <div>
                                            <strong>Leave Type :</strong> <select name="type" class="form-control border-black shadow focus:border-blue-400" required>
                                                <option>Select Leave Type</option>
                                                <option value="Sick Leave" {{ (old('type') == "Sick Leave") ? 'selected' : '' }}>Sick Leave</option>
                                                <option value="Emergency Leave" {{ (old('type') == "Emergency Leave") ? 'selected' : ''}}>Emergency Leave</option>
                                                <option value="Pregnancy Leave" {{ (old('type') == "Pregnancy Leave") ? 'selected' : ''}}>Pregnancy Leave</option>
                                                <option value="Religious Leave" {{ (old('type') == "Religious Leave") ? 'selected' : ''}}>Religious Leave</option>
                                                <option value="Paternity Leave" {{ (old('type') == "Paternity Leave")? 'selected' : ''}}>Paternity Leave</option>
                                                <option value="Unpaid Leave" {{ (old('type') == "Unpaid Leave")? 'selected' : ''}}>Unpaid Leave</option>
                                                <option value="Half-Paid Leave" {{ (old('type') == "Half-Paid Leave")? 'selected' : ''}}>Half-Paid Leave</option>
                                                <option value="Study Leave" {{ (old('type') == "Study Leave")? 'selected' : ''}}>Study Leave</option>
                                                <option value="Others" {{ (old('type') == "Others")? 'selected' : ''}}>Others</option>
                                            </select>
                                        </div>
                                        <div>
                                            <strong>Start Date :</strong> <input type="date" name="start_date" class="form-control rounded shadow" required value="{{ old('start_date') }}">
                                        </div>
                                        <div>
                                            <strong>End Date :</strong> <input type="date" name="end_date" class="form-control rounded shadow" required value="{{ old('end_date') }}">
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
    var route = "{{ route('employees.suggestion') }}";
    $('#name').typeahead({
        source: function (query, process) {
            return $.get(route, {
                query: query
            }, function (data) {
                return process(data);
            });
        },
        afterSelect: function(data) {
            $('#employee_id').val(data.id);
        } 
    });
</script>  

@endpush