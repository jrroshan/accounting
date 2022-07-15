@extends('login.layouts.master')

@section('content')
    <div class="page-content">


        <div class="form-v7-content">


            <form class="form-detail" action="{{ route('login') }}" method="post" id="myform">
                @csrf
                <div class="utop"><label>
                        <center id="top">
                            <h3><br>Admin Login</h3>
                        </center>
                    </label></div><br><br>
                <div class="form-row">
                    <label for="username">{{ __('Email Address') }}</label>
                    <input type="email" name="email" value="{{ old('email') }}" id="email"
                        class="input-text form-control @error('email') is-invalid @enderror" required autocomplete="email"
                        autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-row">
                    <label for="password">{{ __('Password') }}</label>
                    <input type="password" name="password" id="password"
                        class="input-text form-control @error('password') is-invalid @enderror" required
                        autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-row-last">
                    <input class="btn" type="submit" name="login" value="{{ __('Login') }}">
                    <br><br>
                    <p>Or<a href="reg.html">Register</a></p><br>
                </div>
            </form>
        </div>

    </div>
@endsection
