@extends('front.layout.layout')
@section('content')
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Shopping Cart</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Grocery</a></li>
                    <li class="breadcrumb-item active">Shopping Cart</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive shop_cart_table">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th class="product-thumbnail">Product Image</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">
                                  <i style="color: red;" class="fa fa-trash"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td class="product-thumbnail"><a href="{{route('productView')}}"><img src="assets/images/product_img02.jpg" alt="product1"></a></td>
                                <td class="product-name" data-title="Product"><a href="{{route('productView')}}">RTS Kidney Beans - 500g</a></td>
                                <td class="product-price" data-title="Price">$45.00</td>
                                <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="2" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                              </div></td>
                              	<td class="product-subtotal" data-title="Total">$90.00</td>
                                <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                            </tr>
                            <tr>
                            	<td class="product-thumbnail"><a href="{{route('productView')}}"><img src="assets/images/product_img03.jpg" alt="product2"></a></td>
                                <td class="product-name" data-title="Product"><a href="{{route('productView')}}">Aashirvaad Atta (Select) - 5Kg</a></td>
                                <td class="product-price" data-title="Price">$55.00</td>
                                <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                              </div></td>
                              	<td class="product-subtotal" data-title="Total">$55.00</td>
                                <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                            </tr>
                            <tr>
                            	<td class="product-thumbnail"><a href="{{route('productView')}}"><img src="assets/images/product_img04.jpg" alt="product3"></a></td>
                                <td class="product-name" data-title="Product"><a href="{{route('productView')}}">Dawat Basmati Origonal Rice - 5Kg</a></td>
                                <td class="product-price" data-title="Price">$68.00</td>
                                <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="3" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                              </div></td>
                              	<td class="product-subtotal" data-title="Total">$204.00</td>
                                <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            	<div class="medium_divider"></div>
            	<div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
            	<div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
            	<div class="heading_s1 mb-3">
            		<h6>Calculate Shipping</h6>
                </div>
                <form class="field_form shipping_calculator">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <div class="custom_select">
                                <select class="form-control">
                                    <option value="">Choose a option...</option>
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
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <textarea required="required" placeholder="Your House Address..." class="form-control" name="Address" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <button class="btn btn-fill-line" type="submit">Update Totals</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
            	<div class="border p-3 p-md-4">
                    <div class="heading_s1 mb-3">
                        <h6>Cart Totals</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="cart_total_label">Cart Subtotal</td>
                                    <td class="cart_total_amount">$349.00</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">Shipping</td>
                                    <td class="cart_total_amount">Free Shipping</td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">Total</td>
                                    <td class="cart_total_amount"><strong>$349.00</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                      <a href="{{route('checkOut')}}" class="btn btn-fill-out">Proceed To CheckOut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
@endsection