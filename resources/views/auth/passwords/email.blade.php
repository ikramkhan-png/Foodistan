@extends('layouts.authentication.layout')

@section('content')
<div class="main_content">

  <!-- START LOGIN SECTION -->
  <div class="login_register_wrap section">
    
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-md-10">
                  <div class="login_wrap">
                    <div class="padding_eight_all bg-white">
                          <div class="heading_s1">
                              <h3>Reset Password</h3>
                          </div>
                          @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                         @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                              <div class="form-group">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                          </form>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- END LOGIN SECTION -->
</div>
@endsection
