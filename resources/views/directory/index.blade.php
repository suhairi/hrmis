@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Direktori PPK</strong></div>


                        <div class="col-md-7">
                            <div class="card-body">

                                <table class="table table-bordered mb-4 data-table">
                                    <thead>
                                        <tr class="bg-blue-500 text-white">
                                            <th class="text-center">#</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Telefon</th>
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
    </div>


@endsection

@push('scripts')
<script type="text/javascript">
    $(function () {
      
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('directory.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: true},
                {data: 'name', name: 'name'},
                {data: 'address', name: 'address'},
                {data: 'telephone', name: 'telephone'},
            ],
            sPaginationType: "first_last_numbers",
        });
    });
</script>
@endpush