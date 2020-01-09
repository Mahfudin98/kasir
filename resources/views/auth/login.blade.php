@extends('layouts.layoutlog')

@section('title')
    Silahkan Masuk!
@stop


@section('title2')
    Jika belum punya akun, Daftar terlebih <a href="register"> dahulu</a>!   
@stop

@section('body')
                        <form method="POST" action="{{ route('login') }}" id="loginForm">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="email">Username</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <span class="help-block small">Yur strong password</span>
                            
                                <label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                            <br>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                    
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
@endsection
