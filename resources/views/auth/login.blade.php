@extends('layouts.app')

@section('content')
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <img class="img-fluid logo-dark" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
            <div class="loginbox">
                <div class="login-right">
                    <div class="login-right-wrap">
                        <div class="inline flex mb-1 items-center justify-center gap-4">
                            <img class="img-fluid" src="{{ asset('assets/img/mada.png') }}" alt="Logo" width="80" height="80">
                            <img class="img-fluid" src="{{ asset('assets/img/lpp.jpeg') }}" alt="Logo" width="80" height="80">
                        </div>
                        
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to p-HRIS dashboard</p>
                        <form method="POST" action="{{ route('login') }}" class="md-float-material">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Username</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="c2@mada.gov.my" placeholder="Enter username" autofocus />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password" placeholder=" Enter Password" value="password">
                                    <span class="fas fa-eye toggle-password"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    
                                </div>
                            </div>
                            <button class="btn btn-sm btn-block btn-primary transition ease-in-out delay-30 hover:font-semibold hover:-translate-y-1 duration-300" style="border-radius: 20px" type="submit">Login</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
