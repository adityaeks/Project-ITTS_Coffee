@extends('layouts.loginan')

@section('content')
<div class="wrapper">
    <div class="logo">
        <img src="{{ Vite::asset('resources/images/logoittscoffe.svg') }}" alt="">
    </div>
    <div class="text-center mt-4 name">
        ITTS COFFEE
    </div>
    <form method="POST" action="{{ route('login') }}" class="p-3 mt-3">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                   name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                   {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
        </div>
        <button type="submit" class="btn mt-3">{{ __('Login') }}</button>
    </form>
    <div class="text-center fs-6">
        Dont have an account? <a href="{{ route('register') }}">{{ __('Register') }}</a>
    </div>
</div>
@endsection
