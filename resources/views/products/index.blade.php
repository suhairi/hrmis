@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

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
                                @include('partials.messages.success')
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