@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>PPK Management</strong></div>

                        <div class="card-body">

                            @if(session('success'))
                                @include('partials.messages.success')
                            @endif

                            <table class="table table-bordered table-striped mb-4 data-table">
                                <thead>
                                    <tr class="bg-blue-500 text-white">
                                        <th>#</th>
                                        <th>Nama</th>
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
            pageLength: 30,
            processing: true,
            serverSide: true,
            ajax: "{{ route('ppk.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: true},
                {data: 'name', name: 'name'},
            ],
            sPaginationType: "simple_numbers",
        });
    });
</script>
@endpush

