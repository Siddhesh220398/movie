@extends('layout.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="kt-login__signin">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Reset Password</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email"
                                       value="{{ old('email') }}" autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <br>
                            <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password"
                                       placeholder="Password"
                                       value="{{ old('password') }}" autofocus>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <br>
                            <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password_confirmation"
                                       placeholder="Confirm Password"
                                       value="{{ old('email') }}" autofocus>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <br>
                            <br>
                            <div class="kt-login__actions">
                                <button type="submit" id="submit"
                                        class="btn btn-brand btn-elevate center kt-login__btn-primary"
                                        style="color: white;">Reset Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
