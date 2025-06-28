@extends('layouts.frontend')
@section('content')
    <!-- breadcrumb__start -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__title">
                        <h1>Login & Register</h1>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li class="color__blue">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb__end -->

    <!-- login__section__start -->
    <div class="loginarea sp_bottom_80 sp_top_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-md-2 loginarea__col">
                    <ul class="nav tab__button__wrap text-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one"
                                type="button">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two"
                                type="button">Sign up</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content tab__content__wrapper" id="myTabContent">
                    <!-- Login Form -->
                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel">
                        <div class="col-xl-8 offset-md-2 loginarea__col">
                            <div class="loginarea__wraper">
                                <div class="loginarea__heading">
                                    <h5 class="login__title">Login</h5>
                                    <p class="login__description">Don't have an account yet? <a href="#"
                                            data-bs-toggle="tab" data-bs-target="#projects__two">Sign up for free</a></p>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="loginarea__form">
                                        <label class="form__label">Email</label>
                                        <input class="common__login__input" name="email" type="email" required
                                            placeholder="Your Email" value="{{ old('email') }}">
                                    </div>
                                    <div class="loginarea__form">
                                        <label class="form__label">Password</label>
                                        <input class="common__login__input" name="password" type="password" required
                                            placeholder="Password">
                                    </div>
                                    <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input type="checkbox" name="remember" id="login__privacy"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label for="login__privacy">Remember Me</label>
                                        </div>
                                        <div class="text-end login__form__link">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">Forgot your password?</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="loginarea__button text-center">
                                        <button class="default__button" type="submit">Log In</button>
                                    </div>
                                </form>
                                <div class="loginarea__social__option">
                                    <ul class="loginarea__social__btn">
                                        <li><a class="default__button" href="#"><i class="fab fa-facebook-f"></i>
                                                Facebook</a></li>
                                        <li><a class="default__button" href="#"><i class="fab fa-google"></i>
                                                Google</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sign Up Tab Placeholder (jika ingin digunakan Laravel Register juga) -->
                    <div class="tab-pane fade show active" id="register-tab" role="tabpanel">
                        <div class="col-xl-8 offset-md-2 loginarea__col">
                            <div class="loginarea__wraper">
                                <div class="loginarea__heading">
                                    <h5 class="login__title">Sign Up</h5>
                                    <p class="login__description">Already have an account? <a href="#login-tab"
                                            data-bs-toggle="tab">Log In</a></p>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="loginarea__form">
                                                <label class="form__label">Name</label>
                                                <input class="common__login__input" name="name" type="text"
                                                    value="{{ old('name') }}" required>
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="loginarea__form">
                                                <label class="form__label">Email</label>
                                                <input class="common__login__input" name="email" type="email"
                                                    value="{{ old('email') }}" required>
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="loginarea__form">
                                                <label class="form__label">Password</label>
                                                <input class="common__login__input" name="password" type="password"
                                                    required>
                                                @error('password')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="loginarea__form">
                                                <label class="form__label">Confirm Password</label>
                                                <input class="common__login__input" name="password_confirmation"
                                                    type="password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input type="checkbox" id="regi__privacy" required>
                                            <label for="regi__privacy">Accept the Terms and Privacy Policy</label>
                                        </div>
                                    </div>
                                    <div class="login__button">
                                        <button type="submit" class="default__button text-center">Sign Up</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
