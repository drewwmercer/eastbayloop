@extends('layouts.app')

@section('css')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
      .social-login .btn-group{
        margin: 1em 1;
      }
      .social-login .btn-fb{
        background: #3B5998;
      }
      .social-login .btn-fb:hover{
        border-color: #2E6DA4;
      }
      .social-login .btn-tw {
        background:#de3116;
        color: white;
      }
      .social-login .btn-tw:hover{
        border-color: #46B8DA;
      }
      .social-login .btn-fb,
      .social-login .btn-tw{
        font-size: 16px;
      }
      .social-login i{
        padding: 0.2em;
      }
      .social-login{
        text-align: center;
        padding:2em 0;
      }
      .social-login .btn-group{
        margin:1em;
      }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="social-login col-sm-12">
                    <div class="btn-group btn-group-one">
                        <a href="{{ url('/redirect/facebook') }}" class="btn btn-primary btn-fb"><i class="fa fa-facebook-f"></i></a>
                        <a href="{{ url('/redirect/facebook') }}" class="btn btn-primary btn-fb">Login with Facebook</a>
                    </div>
                    <div class="btn-group btn-group-two">
                        <a href="#" class="btn btn-info btn-tw"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="btn btn-info btn-tw">Login with Google+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
