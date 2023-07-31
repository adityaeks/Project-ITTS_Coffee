@extends('layouts.loginan')

@section('content')
<div class="wrapper" >
    <div class="logo">
        <img src="{{ Vite::asset('resources/images/logoittscoffe.svg') }}" alt="">
    </div>
    <div class="text-center mt-4 name">
        ITTS COFFEE
    </div>
    <form method="POST" action="{{ route('register') }}" class="p-3 mt-1">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-envelope"></span>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                   value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                   name="password" required autocomplete="new-password" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn">{{ __('Register') }}</button>
           <div class="text-center fs-6 mt-1">
                Already have an account? <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
    </form>

</div>

@endsection
