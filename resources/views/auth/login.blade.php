@extends('layouts.authentication.layout')
@section('content')
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Login</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Login</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<div class="main_content">

  <!-- START LOGIN SECTION -->
  <div class="login_register_wrap section">
    
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-md-10">
                  <div class="login_wrap">
                  <div class="padding_eight_all bg-white">
                          <div class="heading_s1">
                              <h3>Login</h3>
                          </div>
                          <form method="POST" action="{{ route('login') }}">
                            @csrf
                              <div class="form-group">
                                  <input id="email" type="email" placeholder="Enter Your Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                              <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="*************" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                              <div class="login_footer form-group">
                                  <div class="chek-form">
                                      <div class="custome-checkbox">
                                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                          <label class="form-check-label" for="remember">
                                             {{ __('Remember Me') }}
                                    </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-fill-out btn-block" name="register">{{ __('Login') }}</button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                              </div>
                          </form>
                          <div class="different_login">
                              <span> or</span>
                          </div>
                          <ul class="btn-login list_none text-center">
                              <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                              <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                          </ul>
                          <div class="form-note text-center">Don't have an account? <a href="{{route('register')}}">Register</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- END LOGIN SECTION -->
</div>
@endsection