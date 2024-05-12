@extends('admin.layouts.app')

@section('content')
    <div class="container d-flex align-items-center  justify-content-center " style="height: 80vh">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card  d-flex flex-row ">
                    <div class="card-body w-50 d-flex  justify-content-center  align-items-center ">
                        <form method="POST" class="w-100" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">

                                <div class="col-12">
                                    <input id="email" type="email" placeholder="Email Address"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <input id="password" type="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class=" text-start">
                                    <div class="form-check  ">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingat Saya') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0 ">
                                <div class=" d-flex flex-column ">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Lupa Password Anda?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-img w-50 d-flex justify-content-center align-items-center"
                        style="background-color: rgb(169, 181, 253)">
                        <img src="../assets/img/login.png" style="width: 90%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
