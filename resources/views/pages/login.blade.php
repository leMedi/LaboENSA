@extends('layouts.master')

@section('content')
<div id="login-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Login</h1>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="email input" placeholder="example@ensa.com" value="{{ old('email') }}">
                    
                    @if ($errors->has('email'))
                        <small class="text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Password" value="{{ old('password') }}">

                    @if ($errors->has('password'))
                        <small class="text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </small>
                    @endif
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Connexion
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </form>
        </div>
    </div>

</div> <!-- .container -->
@stop