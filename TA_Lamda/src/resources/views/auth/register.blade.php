@extends('layouts.app')

@section('content')
    @include('partials.styles')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                {{-- <div class="card text-white border-0 card-style">
                    <div class="card-header h1" style="font-weight: 700;">Sign Up</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a href="{{ route('login') }}" class="btn btn-danger">Back</a>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}

                {{-- NEW CARD DESIGN --}}

                <div class="card border-0 card-style text-white">
                    <div class="card-body p-4">
                        <div class="h1 fonth-weight-bold" style="font-family: 'Asap', sans-serif; font-weight: 700;">Sign Up
                        </div>

                        <form method="POST" action="{{ route('register') }}" class="mt-3">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="text-white border-0 input-group-text" style="
                                    background-color: #2b2b2b;
                                    border-right: 4px solid rgb(69, 69, 69) !important;">
                                        <i class="fa fa-solid fa-user"></i>
                                    </span>
                                </div>

                                <input id="name" name="name" type="text"
                                    class="text-white border-0 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required
                                    autocomplete="name" autofocus placeholder="Name" value="{{ old('name', null) }}" style="background-color: #2b2b2b;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="text-white border-0 input-group-text" style="
                                    background-color: #2b2b2b;
                                    font-size: 10px;
                                    border-right: 4px solid rgb(69, 69, 69) !important;">
                                        <i class="fa fa-duotone fa-envelope"></i>
                                    </span>
                                </div>

                                <input id="email" type="email"
                                    class="text-white border-0 form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" placeholder="Email" style="background-color: #2b2b2b;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="text-white border-0 input-group-text" style="
                                    background-color: #2b2b2b;
                                    border-right: 4px solid rgb(69, 69, 69) !important;">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>

                                <input id="password" type="password"
                                    class="text-white border-0 form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password" placeholder="Password" style="background-color: #2b2b2b;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="text-white border-0 input-group-text" style="
                                    background-color: #2b2b2b;
                                    border-right: 4px solid rgb(69, 69, 69) !important;">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>

                                <input id="password-confirm" type="password" class="text-white border-0 form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password" style="background-color: #2b2b2b;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <button type="submit" class="text-white btn border-0 mt-2"
                                style="width: 100%; background-color: #7f8389;">
                                Sign Up
                            </button>
                            <a href="{{ route('login') }}" class="mt-2 btn btn-outline-secondary"
                                style="width: 100%; border-color: #7f8389;">Back</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
