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

                            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                              Toggle modal
                            </button>

                            <!-- Main modal -->
                            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                <div class="relative w-full h-full max-w-2xl md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Terms of Service
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6 space-y-6">
                                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                                            </p>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                            <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

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

