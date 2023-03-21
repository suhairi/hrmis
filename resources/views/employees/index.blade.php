@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Pengurusan Pekerja</strong></div>

                        <div class="card-body">

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success! </strong> {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            @can('employee-list')
                                <div class="p-3">
                                    <a href="{{ route('employees.create') }}" class="btn button bg-green-500 hover:bg-green-600 text-white hover:font-semibold 
                                    transition ease-in-out delay-30
                                    hover:-translate-y-1 duration-300
                                    shadow-md rounded"
                                    >
                                    Cipta Rekod</a>
                                </div>
                            @endcan

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
            pagingType: "first_last_numbers",
        });
    });

</script>
@endpush

