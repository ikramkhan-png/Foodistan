@extends('layouts.admin.layout')
 @section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Creat a user <small>Adda new user</small></h2>
            <div class="card-tools text-right">
                  <a
                      class="btn btn-sm btn-primary"
                      href="#"
                      >view all users</a
                  >
            </div>

            <div class="clearfix"></div>
        </div>
            <br />
            <form
                id="demo-form2"
                data-parsley-validate=""
                class="form-horizontal form-label-left"
                action="{{ route('register') }}"
                method="post"
                enctype="multipart/form-data"
            >
            @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Name
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Your Name!" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email!" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">password
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="*********************" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Confirm password
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <input type="submit" class="btn btn-success"  value="submit" id="">
                        <!-- <button type="submit" class="btn btn-fill-out btn-block" name="register">Register</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
