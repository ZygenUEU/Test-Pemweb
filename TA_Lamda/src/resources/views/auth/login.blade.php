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
                            <span class="text-white border-0 input-group-text" style="
                            background-color: #2b2b2b;
                            font-size: 10px;
                            border-right: 4px solid rgb(69, 69, 69) !important;">
                                
                                <i class="fa fa-duotone fa-envelope"></i>
                            
                            </span>
                        </div>

                        <input id="email" name="email" type="text" class="text-white border-0 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}" style="background-color: #2b2b2b; !important">

                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="text-white border-0 input-group-text" style="
                            background-color: #2b2b2b;
                            border-right: 4px solid rgb(69, 69, 69) !important;">
                            
                            <i class="fa fa-lock"></i>
                        
                            </span>
                        </div>

                        <input id="password" name="password" type="password" class="text-white border-0 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}" style="background-color: #2b2b2b; !important">

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

                    

                    <button type="submit" class="text-white btn border-0 mt-2"  style="width: 100%; background-color: #7f8389; color: black;">
                        {{ trans('global.login') }}
                    </button>

                    <p class="mt-2">Don't have an account? <a href="{{ route('register') }}" class="btn-link-style">Sign Up</a></p>
                    
                    <hr style="width: 100%; border-color: #7f8389;">

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