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
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Telefon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ppks as $ppk)
                                            <tr>
                                                <td class="align-top text-center">{{ $loop->iteration }}</td>
                                                <td class="align-top">PPK {{ $ppk->code}} - {{ $ppk->name }}</td>
                                                <td class="align-top">
                                                    {{ $ppk->address }} <br />
                                                    {{ $ppk->address2 }} <br />
                                                    {{ $ppk->address3 }} <br />
                                                    {{ $ppk->address4 }} <br />
                                                </td>
                                                <td class="align-top">{{ $ppk->phone }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>                            
                        </div>



                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection