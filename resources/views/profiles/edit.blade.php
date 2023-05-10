@extends('layouts.master')

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            @include('partials.buttons.back')

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong>Tukar Password</strong></div>

                        <div class="card-body">

                            @if(session('errors'))
                                @include('partials.messages.error')
                            @endif

                            {!! Form::model($user, ['method' => 'PATCH','route' => ['profiles.update', $user->id]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'block w-full mt-1 rounded-md')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'block w-full mt-1 rounded-md')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Password:</strong>
                                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'block w-full mt-1 rounded-md')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Confirm Password:</strong>
                                        {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password','class' => 'block w-full mt-1 rounded-md')) !!}
                                    </div>
                                </div>

                                <button type="submit" class="btn text-white bg-blue-500 hover:font-semibold hover:bg-blue-600
                                    transition ease-in-out delay-30 
                                    hover:-translate-y-1 duration-300 
                                    rounded-full shadow-md
                                    mt-3"
                                >
                                Submit</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    


@endsection