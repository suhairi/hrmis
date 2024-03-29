@extends('layouts.app')

@section('content')
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <img class="mx-auto" src="{{ asset('assets/img/logo_text - 250x97.png') }}" width="250" height="97" alt="Logo">
            <div class="loginbox">
                <div class="login-right">
                    <div class="login-right-wrap">
                        <div class="inline flex mb-1 items-center justify-center gap-5 mb-5">
                            <img class="shadow-lg" src="{{ asset('assets/img/mada.png') }}" alt="Logo" width="80" height="80">
                            <img src="{{ asset('assets/img/lpp.png') }}" alt="Logo" width="80" height="80">
                        </div>
                        
                        <hr class="mb-5" />

                        <!-- <h1>Log Masuk</h1> -->
                        <!-- <p class="account-subtitle text-lg font-semibold">Akses ke p-HRIS Dashboard</p> -->
                        <form method="POST" action="{{ route('login') }}" class="md-float-material">
                            @csrf
                            <div class="relative mb-4" data-te-input-wrapper-init>
                                <!-- <label class="form-control-label"><strong>Kata Nama</strong></label> -->
                                <input type="text" class="form-control @error('email') is-invalid @enderror shadow-md rounded-full" name="email" value="a1@mada.gov.my" placeholder="Kata Nama" autofocus />

                            </div>
                            <div class="form-group">
                                <!-- <label class="form-control-label"><strong>Kata Laluan</strong></label> -->
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input @error('password') is-invalid @enderror shadow-md rounded-full" name="password" placeholder="Kata Laluan" value="password">
                                    <!-- <span class="fas fa-eye toggle-password"></span> -->
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    
                                </div>
                            </div>
                            <button style="border-radius: 20px" type="submit"
                                class="btn btn-block button bg-green-500 hover:bg-green-600 text-white hover:font-semibold
                                transition ease-in-out delay-30 
                                hover:-translate-y-1 duration-300
                                shadow-md text-lg" 
                            >
                            Log Masuk</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
