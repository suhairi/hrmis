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
                            <img src="{{ asset('assets/img/lpp.jpeg') }}" alt="Logo" width="80" height="80">
                        </div>
                        
                        <hr class="mb-5" />

                        <!-- <h1>Log Masuk</h1> -->
                        <!-- <p class="account-subtitle text-lg font-semibold">Akses ke p-HRIS Dashboard</p> -->
                        <form method="POST" action="{{ route('login') }}" class="md-float-material">
                            @csrf
                            <div class="relative mb-4" data-te-input-wrapper-init>
                                <!-- <label class="form-control-label"><strong>Kata Nama</strong></label> -->
                                <!-- <input type="text" class="form-control @error('email') is-invalid @enderror shadow-md" name="email" value="c3@mada.gov.my" placeholder="Enter username" autofocus /> -->
                                <input
                                    type="text"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    id="exampleFormControlInput1"
                                    autofocus />
                                <label
                                    for="exampleFormControlInput1"
                                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-blue-600 peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8]motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                  >Kata Nama
                                </label>
                            </div>
                            <div class="form-group">
                                <!-- <label class="form-control-label"><strong>Kata Laluan</strong></label> -->
                                <!-- <div class="pass-group"> -->
                                    <!-- <input type="password" class="form-control pass-input @error('password') is-invalid @enderror shadow-md" name="password" placeholder=" Enter Password" value="password"> -->
                                    <!-- <span class="fas fa-eye toggle-password"></span> -->
                                <!-- </div> -->
                                <input
                                  type="password"
                                  class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                  id="exampleFormControlInput11" />
                                <label
                                  for="exampleFormControlInput11"
                                  class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-blue-600 peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                  >Kata Laluan
                                </label>
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
