@extends('front.layout.layout')
@section('content')
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Register</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Register</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

  <!-- START LOGIN SECTION -->
  <div class="login_register_wrap section">
    
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-md-10">
                  <div class="login_wrap">
                  <div class="padding_eight_all bg-white">
                          <div class="heading_s1">
                              <h3>Create A Customer Account</h3>
                          </div>
                          <form method="POST" action="{{ route('register') }}">
                            @csrf
                              <div class="form-group">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                   @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                              <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                             </div>
                              <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>
                              <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                              <div class="login_footer form-group">
                                  <div class="chek-form">
                                      <div class="custome-checkbox">
                                          <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                          <label class="form-check-label" for="exampleCheckbox2"><span>I agree to terms &amp; Policy.</span></label>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-fill-out btn-block" name="register">Register</button>
                              </div>
                          </form>
                          <div class="different_login">
                              <span> or</span>
                          </div>
                          <ul class="btn-login list_none text-center">
                              <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                              <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                          </ul>
                          <div class="form-note text-center">Already have an account? <a href="{{route('login')}}">Log in</a></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-12">
                <div class="login_register_wrap section">
                    <div style="margin: auto;">
                      <h3>Become Our Partner!&#128522;</h3> 
                    </div>
                </div>
            </div>
          </div>
            <div class="row justify-content-center">
                <div class="col-12 ">
                    <div class="login_wrap">
                      <div class="padding_eight_all bg-white">
                            <div class="heading_s1">
                                <h3>Create A Seller Account</h3>
                            </div>
                            <form >
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" required="" class="form-control" name="name" placeholder="Enter Your First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="fom-group">
                                        <input type="text" required="" class="form-control" name="name" placeholder="Enter Your Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <div class="custom_select">
                                          <select class="form-control">
                                              <option value="">Choose Your City</option>
                                              <option value="AX">Abc</option>
                                              <option value="AF">Efg</option>
                                              <option value="AL">hig</option>
                                              <option value="DZ">Klm</option>
                                              <option value="AD">Nop</option>
                                              <option value="AO">qrs</option>
                                              <option value="AI">xyz</option>
                                          </select>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <input type="text" required="" class="form-control" name="shop" placeholder="Enter Your Shop Name">
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <label for="shop">Upload Your Shop Image</label>
                                      <input type="file" required="" class="form-control" name="shop">
                                  </div>
                                </div>
                              </div>
                              
                                
                                
                                <div class="form-group">
                                  <textarea name="details" class="form-control" placeholder="Enter Your Shop Details " id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Confirm Password">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                            <label class="form-check-label" for="exampleCheckbox2"><span>I agree to terms &amp; Policy.</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-fill-out btn-block" name="register">Register</button>
                                </div>
                            </form>
                            <div class="different_login">
                                <span> or</span>
                            </div>
                            <div class="form-note text-center">Already have an account? <a href="{{route('login')}}">Log in</a></div>
                      </div>
                    </div>
                </div>
            </div>
      </div>
  </div>
  <!-- END LOGIN SECTION -->
</div>
@endsection