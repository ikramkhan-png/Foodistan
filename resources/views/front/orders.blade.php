@extends('front.layout.layout')
@section('content')
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>My Orders</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Orders</li>
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
                                <th class="product-price">Delivery Status</th>
                                <th class="product-quantity">Address </th>
                                <th class="product-subtotal">Payment Method</th>
                                <th class="payment-status">Payment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td class="product-thumbnail"><a href="{{route('productView')}}"><img src="assets/images/product_img02.jpg" alt="product1"></a></td>
                                <td class="product-name" data-title="Product"><a href="{{route('productView')}}">RTS Kidney Beans - 500g</a></td>
                                <td class="product-price" data-title="status">
                                  <span class="badge badge-success p-2">Dispached</span>
                                </td>
                                <td class="product-quantity" data-title="address">YZ Block ABC Street Captial
                                </td>
                              	<td class="product-subtotal" data-title="payment-method">
                                   <p>Cash on Delivery</p>
                                </td>
                                <td class="product-remove" data-title="payment-status">
                                  <span class="badge badge-warning p-2">Pending</span>
                                </td>
                            </tr>
                            <tr>
                            	<td class="product-thumbnail"><a href="{{route('productView')}}"><img src="assets/images/product_img03.jpg" alt="product2"></a></td>
                                <td class="product-name" data-title="Product"><a href="{{route('productView')}}">Aashirvaad Atta (Select) - 5Kg</a></td>
                                <td class="product-price" data-title="status">
                                  <span class="badge badge-warning p-2">Pending</span>
                                </td>
                                <td class="product-quantity" data-title="address">XYZ Block ABC Street Captial
                                </td>
                              	<td class="product-subtotal" data-title="payment-method">
                                   <p>PayPal</p>
                                </td>
                                <td class="product-remove" data-title="payment-status">
                                  <span class="badge badge-success p-2">Paid</span>
                                </td>
                            </tr>
                            <tr>
                            	<td class="product-thumbnail"><a href="{{route('productView')}}"><img src="assets/images/product_img04.jpg" alt="product3"></a></td>
                                <td class="product-name" data-title="Product"><a href="{{route('productView')}}">Dawat Basmati Origonal Rice - 5Kg</a></td>
                                <td class="product-price" data-title="status">
                                  <span class="badge badge-warning p-2">Pending</span>
                                </td>
                                <td class="product-quantity" data-title="address">YZ Block ABC Street Captial
                                </td>
                              	<td class="product-subtotal" data-title="payment-method">
                                   <p>Online Banking</p>
                                </td>
                                <td class="product-remove" data-title="payment-status">
                                  <span class="badge badge-warning p-2">Pending</span>
                                </td>
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
        	<div class="col-12">
            	<div class="heading_s1 mb-3">
            		<h6>Have Any Querry ?</h6>
                </div>
                <form class="field_form shipping_calculator">
                    
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <textarea required="required" placeholder="Need Help Regarding!" class="form-control" name="Address" rows="4"></textarea>
                        </div>
                    </div>
                        <div class="text-right">
                          <a href="#" class="btn btn-fill-out">Submit</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
@endsection