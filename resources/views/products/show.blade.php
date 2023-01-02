@extends('layouts.app2')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Show Product</strong></div>

                <div class="card-body">

                    <div class="pull-right p-3">
                        <a class="btn btn-dark" href="{{ route('products.index') }}"> Back</a>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $product->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Details:</strong>
                                {{ $product->detail }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
