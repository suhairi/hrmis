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
                            <li class="breadcrumb-item active">Products</li>
                        </ul>
                        <!-- <h3>Admin Dashboard</h3> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Add New Product</strong></div>

                        <div class="card-body">

                            <div class="pull-right p-3">
                                <a class="btn btn-dark rounded-full hover:bg-gray-600" href="{{ URL::previous() }}"> < Back</a>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif



                            <form action="{{ route('products.store') }}" method="POST">
                            	@csrf
                                 <div class="row">
                        		    <div class="col-xs-12 col-sm-12 col-md-12">
                        		        <div class="form-group">
                        		            <strong>Name:</strong>
                        		            <input type="text" name="name" class="form-control" placeholder="Name" autofocus />
                        		        </div>

                        		    </div>
                        		    <div class="col-xs-12 col-sm-12 col-md-12">
                        		        <div class="form-group">
                        		            <strong>Detail:</strong>
                        		            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                        		        </div>
                        		    </div>

                        		    <div class="col-xs-12 col-sm-12 col-md-12 text-center p-3">
                                        @include('partials.buttons.submit', ['text' => 'Cipta'])
                        		    </div>

                        		</div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection