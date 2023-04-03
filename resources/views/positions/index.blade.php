@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Positions Management</strong></div>

                        <div class="card-body">

                            @can('position-create')
                                <div class="pull-right p-3">
                                    <a href="{{ route('positions.create') }}"
                                        class="btn bg-green-400 hover:bg-green-500 text-white hover:font-semibold
                                        transition ease-in-out delay-30
                                        hover:-translate-y-1 duration-300
                                        shadow-sm rounded" 
                                    > 
                                    Create New Position</a>
                                </div>
                            @endcan


                            @if(session('success'))
                                @include('partials.messages.success')
                            @endif

                            <table class="table table-bordered mb-4 table-striped data-table">
                                <thead>
                                    <tr class="bg-blue-500 text-white">
                                        <th>#</th>
                                        <th>Grade - Nama Jawatan</th>
                                        <th>Skema Jawatan</th>
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
            ajax: "{{ route('positions.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: true},
                {data: 'name', name: 'name'},
                {data: 'scheme', name: 'scheme'},
                {data: 'actions', name: 'actions', orderable: false, searchable: false},
            ],
            sPaginationType: "simple_numbers",
        });
    });
</script>
@endpush

