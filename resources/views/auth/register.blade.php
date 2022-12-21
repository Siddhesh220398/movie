@extends('layout.auth')

@section('content')
    <form class="kt-form login_form" id="login_form" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="kt-login__signin">
            <div class="kt-login__head">
                <h3 class="kt-login__title">Sign Up</h3>
            </div>
        </div>

        <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}"
                   autofocus>

        </div>

        @if ($errors->has('name'))
            <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
        @endif

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

        <div class="input-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"
                   placeholder="Confirm Password">

        </div>
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
        <strong>{{ $errors->first('password_confirmation') }}</strong>
    </span>
        @endif

        <div class="row kt-login__extra">
            <div class="col kt-align-left">
                <label class="kt-checkbox">
                    <input type="checkbox" name="agree">I Agree the <a href="#"
                                                                       class="kt-link kt-login__link kt-font-bold">terms
                        and conditions</a>.
                    <span></span>
                </label>
                <span class="form-text text-muted"></span>
            </div>
        </div>
        <div class="kt-login__actions">
            <button id="kt_login_signup_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
            <button type="reset" id="kt_login_signup_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">
                Cancel
            </button>
        </div>
        <div class="kt-login__account">
         <span class="kt-login__account-msg">
        Login In Your Account
        </span>
            <a href="{{route('login')}}" class="kt-login__account-link">Sign In!</a>
        </div>

    </form>

@endsection
