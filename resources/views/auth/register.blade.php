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
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="color__blue">Register</li>
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
            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#login-tab" type="button">Login</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#register-tab" type="button">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="tab-content tab__content__wrapper" id="myTabContent">

        {{-- LOGIN TAB (optional, bisa pakai file login.blade jika terpisah) --}}
        <div class="tab-pane fade" id="login-tab" role="tabpanel">
          <div class="col-xl-8 offset-md-2 loginarea__col">
            <div class="loginarea__wraper">
              <div class="loginarea__heading">
                <h5 class="login__title">Login</h5>
                <p class="login__description">Don't have an account yet? <a href="#register-tab" data-bs-toggle="tab">Sign up for free</a></p>
              </div>

              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="loginarea__form">
                  <label class="form__label">Email</label>
                  <input class="common__login__input" type="email" name="email" value="{{ old('email') }}" required>
                  @error('email')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="loginarea__form">
                  <label class="form__label">Password</label>
                  <input class="common__login__input" type="password" name="password" required>
                  @error('password')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="loginarea__form d-flex justify-content-between flex-wrap gap-2">
                  <div class="form__check">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Remember Me</label>
                  </div>
                  <div class="text-end login__form__link">
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                  </div>
                </div>
                <div class="loginarea__button text-center">
                  <button type="submit" class="default__button">Log In</button>
                </div>
              </form>

              <div class="loginarea__social__option">
                <ul class="loginarea__social__btn">
                  <li><a class="default__button" href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                  <li><a class="default__button" href="#"><i class="fab fa-google"></i> Google</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        {{-- REGISTER TAB --}}
        <div class="tab-pane fade show active" id="register-tab" role="tabpanel">
          <div class="col-xl-8 offset-md-2 loginarea__col">
            <div class="loginarea__wraper">
              <div class="loginarea__heading">
                <h5 class="login__title">Sign Up</h5>
                <p class="login__description">Already have an account? <a href="#login-tab" data-bs-toggle="tab">Log In</a></p>
              </div>

              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                  <div class="col-xl-6">
                    <div class="loginarea__form">
                      <label class="form__label">Name</label>
                      <input class="common__login__input" name="name" type="text" value="{{ old('name') }}" required>
                      @error('name')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="loginarea__form">
                      <label class="form__label">Email</label>
                      <input class="common__login__input" name="email" type="email" value="{{ old('email') }}" required>
                      @error('email')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="loginarea__form">
                      <label class="form__label">Password</label>
                      <input class="common__login__input" name="password" type="password" required>
                      @error('password')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="loginarea__form">
                      <label class="form__label">Confirm Password</label>
                      <input class="common__login__input" name="password_confirmation" type="password" required>
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
