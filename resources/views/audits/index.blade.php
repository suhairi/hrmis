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
                        <div class="card-header"><strong>Audits Management</strong></div>

                        <div class="card-body">

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success! </strong> {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a
                                      class="nav-link active"
                                      id="ex1-tab-1"
                                      data-mdb-toggle="pill"
                                      href="#ex1-pills-1"
                                      role="tab"
                                      aria-controls="ex1-pills-1"
                                      aria-selected="true"
                                      >Employees</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a
                                      class="nav-link"
                                      id="ex1-tab-2"
                                      data-mdb-toggle="pill"
                                      href="#ex1-pills-2"
                                      role="tab"
                                      aria-controls="ex1-pills-2"
                                      aria-selected="false"
                                      >Positions</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a
                                      class="nav-link"
                                      id="ex1-tab-3"
                                      data-mdb-toggle="pill"
                                      href="#ex1-pills-3"
                                      role="tab"
                                      aria-controls="ex1-pills-3"
                                      aria-selected="false"
                                      >Users</a>
                                </li>
                            </ul>
                            <!-- Pills navs -->

                            <!-- Pills content -->
                            <div class="tab-content" id="ex1-content">
                                <div
                                    class="tab-pane fade show active"
                                    id="ex1-pills-1"
                                    role="tabpanel"
                                    aria-labelledby="ex1-tab-1"
                                  >Tab 1 content
                                </div>
                                <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                    Tab 2 content
                                  </div>
                                  <div class="tab-pane fade" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                                    Tab 3 content
                                </div>
                            </div>
                            <!-- Pills content -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
