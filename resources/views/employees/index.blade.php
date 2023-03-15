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
                            <li class="breadcrumb-item active">Users</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Employees Management</strong></div>

                        <div class="card-body">

                            @can('employee-create')
                                <div class="p-3">
                                    <a class="btn btn-success shadow-md rounded" href="{{ route('employees.create') }}"> Create New Employee</a>
                                </div>
                            @endcan



                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success! </strong> {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="col-md-12 shadow-md mb-12">
                                <div class="alert mb-2 float-right">
                                    <a href="{{ route('pdf.employeesList') }}" target="_blank" class="text-red-500 hover:text-red-700">
                                        <i class="fa fa-file-pdf fa-xl transition ease-in-out delay-30 hover:font-semibold hover:-translate-y-1 shadow-md mr-4"></i>
                                    </a>
                                    <a href="{{ route('excel.employeesList') }}" class="text-red-500 hover:text-red-700">
                                        <i class="fa-sharp fa-solid fa-file-csv fa-xl transition ease-in-out delay-30 hover:font-semibold hover:-translate-y-1 shadow-md mr-4"></i>
                                    </a>
                                    
                                </div>
                            </div>

                            <table class="table table-bordered mb-4 data-table">
                                <thead>
                                    <tr class="bg-blue-500 text-white">
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>No KP</th>
                                        <th>Jantina</th>
                                        <th>PPK / Jawatan </th>
                                        <th>Tarikh Lantikan / Status</th>
                                        <th width="280px">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script type="text/javascript">

    $(function () {
      
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('employees.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: true, searchable: true},
                {data: 'name', name: 'name'},
                {data: 'nokp', name: 'nokp'},
                {data: 'gender', name: 'gender'},
                {data: 'ppk', name: 'ppk'},
                {data: 'start_date', name: 'start_date'},
                {data: 'actions', name: 'actions', orderable: true, searchable: false},
            ],
            sPaginationType: "simple_numbers",
        });
    });

</script>
@endpush

