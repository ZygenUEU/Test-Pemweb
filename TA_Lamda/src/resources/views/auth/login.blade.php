@extends('layouts.app')
@section('content')
@include('partials.styles')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card border-0 card-style mx-4 text-white">
            <div class="card-body p-4">
                <div class="h1 fonth-weight-bold" style="font-family: 'Asap', sans-serif; font-weight: 700;">GAME POST</div>

                <p class="text-muted">{{ trans('global.login') }}</p>

                @if(session('message'))
                    <div class="alert alert-info" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="font-size: 10px;">
                                <i class="fa fa-duotone fa-envelope"></i>
                            </span>
                        </div>

                        <input id="email" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">

                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>

                        <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">

                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                                    <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                        {{ trans('global.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="float-right">
                                @if(Route::has('password.request'))
                                    <a class="btn-link-style" href="{{ route('password.request') }}" style="padding: 0px !important;">
                                        {{ trans('global.forgot_password') }}
                                    </a><br>
                                @endif
                            </div>
                        </div>
                    </div>

                    

                    <button type="submit" class="btn border-0 mt-2"  style="width: 100%; background-color: #7f8389; color: black;">
                        {{ trans('global.login') }}
                    </button>

                    <p class="mt-2">Don't have an account? <a href="{{ route('register') }}" class="btn-link-style">Sign Up</a></p>
                    
                    <hr>

                    <button type="button" class="btn btn-outline-secondary mt-2" style="width: 100%; border-color: #7f8389;" onclick="fillGuestCredentials()">
                        Continue As Guest
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function fillGuestCredentials() {
        document.getElementById('email').value = 'guest@guest.com';
        document.getElementById('password').value = '12345678';
        document.forms[0].submit();
        document.getElementById('email').value = '';
        document.getElementById('password').value = '';
    }
</script>
@endsection