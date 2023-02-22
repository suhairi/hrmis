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
                            <li class="breadcrumb-item active">Products</li>
                        </ul>
                        <!-- <h3>Admin Dashboard</h3> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Products</strong></div>

                        <div class="card-body">

                            <div class="pull-right p-3">
                                @can('product-create')
                                    <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
                                @endcan
                            </div>

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success! </strong>{{session('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-blue-500 text-white">
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Details</th>
                                        <th scope="col" width="280px">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                        	    @foreach ($products as $product)
                        	    <tr>
                        	        <td scope="row">{{ ++$i }}</td>
                        	        <td>{{ $product->name }}</td>
                        	        <td>{{ $product->detail }}</td>
                        	        <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            <a class="btn btn-info shadow-md" href="{{ route('products.show',$product->id) }}">Show</a>

                                            @can('product-edit')
                                            <a class="btn btn-success shadow-md" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                            @endcan

                                            @csrf

                                            @method('DELETE')

                                            @can('product-delete')
                                                <button type="submit" class="btn btn-danger shadow-md">Delete</button>
                                            @endcan
                                        </form>
                        	        </td>
                        	    </tr>
                        	    @endforeach
                                </tbody>
                            </table>

                            {!! $products->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection