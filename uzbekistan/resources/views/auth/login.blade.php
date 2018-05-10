@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }} </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
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
            </div>
        </div>
    </div>
</div> --}}

    <section class="container-fluid home-fourth" id="register" style="min-height: 100vh">

        <div class="row">
            <div class="container">
                <p class="home-fourth-heading text-center">
                    <img src="storage/img/logo_uzb_grey.svg" alt="">
                    <span> / <i class="fas fa-user-circle"></i> Log In</span>
                </p>
            </div>
        </div>
        <div class="container">
        <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 login-left">
                    <p class="login-left-text">
                    One way to control your trip is to be authorized in our service. We provide you Personal Cabinet where you can manage your journey in our country.
                    <br><br>
                    Also we will happy to organize for you <span class="gold">Guide</span> and other services such as:
                    <br>
                </p>
                <ul class="login-left-list gold">
                    <li>Ordering Taxi</li>
                    <li>Booking Hotel</li>
                    <li>Reserving Restaurants</li>
                </ul>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="login-right">
                            <p class="login-right-heading text-center">
                                SIGN IN
                            </p>
                            <form action="{{ route('login') }}">
                                @csrf

                                <input type="text" id="email" class="input{{ $errors->has('email')? ' is-invalid' : '' }}" name="email" value=" {{ old('email')}} " required autofocus placeholder="e-Mail or Login">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $error->first('email')}}</strong>
                                    </span>
                                @endif

                                <input type="password" class="input{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required placeholder="Password" id="password">
    
                                @if($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password')}}</strong>
                                    </span>
                                @endif

                                <p><a href="{{ route('password.request')}}">forgot password </a>
                                    <input type="submit" class="submit" value="Sign In">
                                </p>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>




@endsection
