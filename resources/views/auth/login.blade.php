@extends('layout.auth')

@section('content')
    <form class="kt-form login_form" id="login_form" role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="kt-login__signin">
            <div class="kt-login__head">
                <h3 class="kt-login__title">Sign In</h3>
            </div>
        </div>
        <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" placeholder="Email"
                   value="{{ old('email') }}" autofocus>
        </div>
        @if ($errors->has('email'))
            <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
        @endif
        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
        </div>
        @if ($errors->has('password'))
            <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
        @endif
        <div class="row kt-login__extra">
            <div class="col">
                <label class="kt-checkbox">
                    <input type="checkbox" name="remember"> Remember me
                    <span></span>
                </label>
            </div>
            <div class="col kt-align-right">
                <a href="{{route('password.request')}}" id="kt_login_forgot" class="kt-login__link">Forget Password
                    ?</a>
            </div>
        </div>
        <div class="kt-login__actions">
            <button type="submit" id="submit" class="btn btn-brand btn-elevate kt-login__btn-primary"
                    style="color: white;">Sign In
            </button>
        </div>
        <div class="kt-login__account">
         <span class="kt-login__account-msg">
          Don't have an account yet ?
        </span>
            <a href="{{route('register')}}" class="kt-login__account-link">Sign Up!</a>
        </div>
    </form>
@endsection
