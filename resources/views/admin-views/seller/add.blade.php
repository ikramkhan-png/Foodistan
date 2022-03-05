@extends('layouts.admin.layout')
 @section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Creat Seller <small>Adda new Partner</small></h2>
            <div class="card-tools text-right">
                  <a
                      class="btn btn-sm btn-primary"
                      href="#"
                      >view all Sellers</a
                  >
            </div>

            <div class="clearfix"></div>
        </div>
            <br />
            <form
                id="demo-form2"
                data-parsley-validate=""
                class="form-horizontal form-label-left"
                action="#"
                method="post"
                enctype="multipart/form-data"
            >
            @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">User ID
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="number" name="user_id" class="form-control col-md-7 col-xs-12" required="" id="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Name
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                     <select name="name"   class="form-control">
                        <option value="" >Select a User name</option>
                        @foreach($users as $user)
                            <option >{{$user->name}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="email" placeholder="Enter Your Email Address!" name="email" class="form-control col-md-7 col-xs-12" required="" id="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Profile Picture
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="file"  name="profile" class="form-control col-md-7 col-xs-12" required="" id="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Shop Name
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" placeholder="Enter Your Shop Name!" name="shop_name" class="form-control col-md-7 col-xs-12" required="" id="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Description
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea placeholder="Write Details About Your Bussiness!" name="description" class="form-control col-md-7 col-xs-12" id="" cols="30" rows="5" required=""></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Address
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea placeholder="Write Your Shop Address!" name="address" class="form-control col-md-7 col-xs-12" id="" cols="30" rows="5" required=""></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Shop Documents
                      <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="file"  name="documents" class="form-control col-md-7 col-xs-12" required="" id="">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <input type="submit" class="btn btn-success"  value="submit" id="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
