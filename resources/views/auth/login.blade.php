@extends('admin.layouts.master')
@section('login')
<section class="section">
    <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
            <div class="p-4 m-3">
                <div class=""></div>
                <img src="" alt="Logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
                {{-- <img src="{{ asset('assets/img/stisla-fill.svg') }}" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2"> --}}
                <h4 class="text-dark font-weight-normal">Selamat datang di <span class="font-weight-bold">Gummlas</span></h4>
                <p class="text-muted">Untuk mengakses dasbor, silahkan login terlebih dahulu.</p>
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" tabindex="1" required autofocus>
                        <div class="invalid-feedback">
                            @if (count($errors) > 0)
                                Email anda tidak terdaftar di sistem
                            @else 
                                Email harus diisi dengan benar
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                        <div class="invalid-feedback">
                            Password harus diisi
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember-me">Ingat aku</label>
                        </div>
                    </div>
                    
                    <div class="form-group text-right">
                        <a href="auth-forgot-password.html" class="float-left mt-3">
                            Lupa Password?
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                            Login
                        </button>
                    </div>
                    
                    <div class="mt-5 text-center">
                        Belum mempunyai akun? <a href="auth-register.html">Daftar sekarang</a>
                    </div>
                </form>
                
                <div class="text-center mt-5 text-small">
                    Copyright &copy; Gummlas. Made with 💙 by Stisla
                    {{-- <div class="mt-2">
                        <a href="#">Privacy Policy</a>
                        <div class="bullet"></div>
                        <a href="#">Terms of Service</a>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="{{ asset('assets/img/unsplash/login-bg.jpg') }}">
            <div class="absolute-bottom-left index-2">
                <div class="text-light p-5 pb-2">
                    <div class="mb-5 pb-3">
                        <h1 class="mb-2 display-4 font-weight-bold" id="hello"></h1>
                        <h5 class="font-weight-normal text-muted-transparent">Jangan lupa senyum :)</h5>
                    </div>
                    Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    var greeting;
    var time = new Date().getHours();
    if (time >= 0 && time < 12) {
        greeting = "Good Morning";
    } else if (time == 12) {
        greeting = "Good Noon";
    } else if (time >= 12 && time <= 17){
        greeting = "Good Afternoon"
    } else {
        greeting = "Good Evening";
    }
    document.getElementById("hello").innerHTML = greeting;
</script>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
