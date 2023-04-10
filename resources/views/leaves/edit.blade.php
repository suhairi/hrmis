@extends('layouts.master')

@section('content')
    


    <div class="page-wrapper">
        <div class="content container-fluid">

            @include('partials.buttons.back')

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Kemaskini maklumat cuti</strong></div>

                        <div class="card-body shadow">

                            <div class="card mt-3">
                                <div class="card-header"><div class="card-title">Record Leave</div></div>
                                <div class="card-body">

                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                        <strong>Ralat!</strong> <br>
                                        <ul>
                                           @foreach ($errors->all() as $error)
                                             <li>{{ $error }}</li>
                                           @endforeach
                                        </ul>
                                      </div>
                                    @endif

                                    {!! Form::model($leave, ['method' => 'PATCH','route' => ['leaves.update', $leave->id]]) !!}
                                    <div class="grid grid-cols-4 gap-4">

                                        <div>
                                            <!-- <input type="text" id="search" name="search" placeholder="Search" class="form-control" /> -->
                                            <strong>Name :</strong> <input type="text" name="name" id="name" class="form-control shadow rounded" required autocomplete="off" value="{{ $leave->employee->name }}" readonly>
                                            <input type="hidden" name="employee_id" id="employee_id" value="{{ $leave->employee_id }}">
                                            <div id="employee_list"></div>
                                        </div>
                                        <div>
                                            <strong>Leave Type :</strong> <select name="type" class="form-control border-black shadow focus:border-blue-400" required>
                                                <option>Select Leave Type</option>
                                                <option value="Sick Leave" {{ ($leave->type == "Sick Leave") ? 'selected' : '' }}>Sick Leave</option>
                                                <option value="Emergency Leave" {{ ($leave->type == "Emergency Leave") ? 'selected' : ''}}>Emergency Leave</option>
                                                <option value="Pregnancy Leave" {{ ($leave->type == "Pregnancy Leave") ? 'selected' : ''}}>Pregnancy Leave</option>
                                                <option value="Religious Leave" {{ ($leave->type == "Religious Leave") ? 'selected' : ''}}>Religious Leave</option>
                                                <option value="Paternity Leave" {{ ($leave->type == "Paternity Leave")? 'selected' : ''}}>Paternity Leave</option>
                                                <option value="Unpaid Leave" {{ ($leave->type == "Unpaid Leave")? 'selected' : ''}}>Unpaid Leave</option>
                                                <option value="Half-Paid Leave" {{ ($leave->type == "Half-Paid Leave")? 'selected' : ''}}>Half-Paid Leave</option>
                                                <option value="Study Leave" {{ ($leave->type == "Study Leave")? 'selected' : ''}}>Study Leave</option>
                                                <option value="Others" {{ ($leave->type == "Others")? 'selected' : ''}}>Others</option>
                                            </select>
                                        </div>
                                        <div>
                                            <strong>Start Date : </strong> <input type="date" name="start_date" class="form-control rounded shadow" required value="{{ $leave->start_date->format('Y-m-d') }}">
                                        </div>
                                        <div>
                                            <strong>End Date : </strong> <input type="date" name="end_date" class="form-control rounded shadow" required value="{{ $leave->end_date->format('Y-m-d') }}">
                                        </div>

                                        <div class="alert col-span-4 flex-right">
                                            @include('partials.buttons.submit', ['text' => 'Kemaskini'])
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