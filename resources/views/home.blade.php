@extends('layouts.master')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @if(session('success'))
                @include('partials.messages.success')
            @endif
            
            
            <div class="row mb-4">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill2">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>PPK</label>
                                <h4><small><small>{{ $ppk }}</small></small></h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="assets/img/dash2.png" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill2">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>Pekerja</label>
                                <h4>{{ count($employees) }}</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="assets/img/dash2.png" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill3 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>**Leaves</label>
                                <h4>9</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="assets/img/dash3.png" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card board1 fill4 ">
                        <div class="card-body">
                            <div class="card_widget_header">
                                <label>**Salary</label>
                                <h4>$5.8M</h4>
                            </div>
                            <div class="card_widget_img">
                                <img src="assets/img/dash4.png" alt="card-img" />
                            </div>
                        </div>
                    </div>
                </div> -->
                
            </div>
            <div class="row">
                <div class="col-xl-6 d-flex mobile-h">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Jumlah Pekerja</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <div id="invoice_chart"></div> -->
                            <!-- <div id="sales_chart"></div> -->
                            <div class="card">
                                <div class="card-header bg-orange-300"><strong>Mengikut jantina</strong></div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped table-hover">
                                        <tr>
                                            <td><strong><i class="fas fa-male">  </i> LELAKI</strong></td>
                                            <td>
                                                @if(array_key_exists('LELAKI', $gender->toArray()))
                                                    {{ $gender['LELAKI'] }} orang.
                                                @else
                                                    {{ $gender['L'] }} orang.
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong><i class="fa fa-female">  </i> PEREMPUAN</strong></td>
                                            <td>
                                                @if(array_key_exists('PEREMPUAN', $gender->toArray()))
                                                    {{ $gender['PEREMPUAN'] }} orang.
                                                @else
                                                    {{ $gender['P'] }} orang.
                                                @endif
                                            </td>
                                        </tr>
                                        <tr class="bg-slate-200">
                                            <td><strong>TOTAL</strong></td>
                                            <td><strong>{{ count($employees) }} orang.</strong></td>
                                        </tr>
                                                                            
                                    </table>

                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-orange-300"><strong>Mengikut status pekerjaan</strong></div>
                                <div class="card-body">
                                    <table class="table table-bordered table-condensed table-striped">
                                    @foreach($employment_status as $value)
                                        <tr>
                                        @if(array_key_exists($value['employment_status'], $employments))
                                            <td><strong>{{ $value['employment_status'] }}</strong></td>
                                            <td>{{ $employments[$value['employment_status']] }} orang.</td>
                                        @else
                                            <td><strong>{{ $value['employment_status'] }}</strong></td>
                                            <td>0 orang.</td>
                                        @endif
                                        </tr>
                                    @endforeach
                                        <tr class="bg-slate-200">
                                            <td><strong>TOTAL</strong></td>
                                            <td><strong>{{ count($employees) }} orang.</strong></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Selenggara</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="team-list">
                                <div class="team-view shadow-md">
                                    <div class="team-content">
                                        <label>Senarai Pekerja yg bekerja melebihi 30 tahun</label>
                                        <span>Tindakan : Paparan senarai</span>
                                    </div>
                                </div>
                                <div class="team-action">
                                    <ul>
                                        <li><a href="{{ route('trim.employee.years') }}"><i data-feather="play"></i></a></li>
                                    </ul>
                                </div>                                                                
                            </div>
                        </div>

                            

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection