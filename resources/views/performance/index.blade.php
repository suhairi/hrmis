@extends('layouts.master')
@section('menu')
@extends('sidebar.sidebar')
@endsection
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
                        <div class="card-header"><strong>Performance Management</strong></div>

                        <div class="card-body">

                            @can('role-create')
                                <div class="pull-right p-3">
                                    <a class="btn btn-success shadow-sm rounded" href="{{ route('employees.create') }}"> Create New Employee</a>
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

                            <table class="table table-bordered mb-5 data-table">
                                <thead>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>No KP</th>
                                    <th>Jantina</th>
                                    <th>PPK / Jawatan </th>
                                    <th>Tarikh Lantikan / Status</th>
                                    <th width="280px">Tindakan</th>
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
            ajax: "{{ route('performance.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: true},
                {data: 'name', name: 'name'},
                {data: 'nokp', name: 'nokp'},
                {data: 'gender', name: 'gender'},
                {data: 'ppk', name: 'ppk'},
                {data: 'start_date', name: 'start_date'},
                {data: 'actions', name: 'actions', orderable: false, searchable: false},
            ],
            sPaginationType: "simple_numbers",
        });
    });
</script>
@endpush

