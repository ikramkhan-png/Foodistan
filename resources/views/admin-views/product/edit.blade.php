@extends('layouts.admin.layout') @section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Create Product <small>different form elements</small></h2>
            <div class="card-tools text-right">
                        <a
                            class="btn btn-sm btn-primary"
                            href="{{ route('product.list') }}"
                            >view All Products</a
                        >
            </div>

            <div class="clearfix"></div>
        </div>
            <br />
            <form
                id="demo-form2"
                data-parsley-validate=""
                class="form-horizontal form-label-left"
                action="{{route('product.update' , $product->id)}}"
                method="post"
                enctype="multipart/form-data"
            >
            @csrf
                <div class="form-group">
                    <label
                        class="control-label col-md-3 col-sm-3 col-xs-12"
                        for="first-name"
                        >Category Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="category_id"  class="form-control">
                            <option value="" >{{$product->category->name}}</option>
                            @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
              
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Name
                          <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="{{$product->name}}" name="name" class="form-control col-md-7 col-xs-12" required="" id="">
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description
                          <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="description"value="" class="form-control col-md-7 col-xs-12" id="" cols="30" rows="5" required="">{{$product->description}}</textarea>
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Price
                          <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" value="{{$product->price}}" name="price" class="form-control col-md-7 col-xs-12" required="" id="">
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Items
                          <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" value="{{$product->total_items}}" name="total_items" class="form-control col-md-7 col-xs-12" required="" id="">
                        </div>
                </div>
                <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Product image
                          <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image" id="" class="form-control col-md-7 col-xs-12">
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12"></div>
                        <div  class="col-md-6 col-sm-6 col-xs-12 ">
                          <img style="height: 80px; width: 80px;margin-left: 20px;" src="{{asset('uploads/'.$product->image)}}" alt="img">
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
