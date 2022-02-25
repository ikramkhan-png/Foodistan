@extends('front.layout.sellerLayouts.layout')
@section('content')
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Orders I have To Deliver</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
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
                <div class="table-responsive wishlist_table">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th class="product-thumbnail">Product Images</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-add-to-cart">Action</th>
                                <th class="product-timmer">
                                    Timer
                                </th>
                                <th class="product-remove">
                                  <i style="color: red;" class="fa fa-trash"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td class="product-thumbnail"><a href="{{route('productView')}}"><img src="assets/images/product_img02.jpg" alt="product1"></a></td>
                                <td class="product-name" data-title="Product"><a href="{{route('productView')}}">TRS Kidney Beans - 500g</a></td>
                                <td class="product-price" data-title="Price">$45.00</td>
                                <td class="product-add-to-cart"><a href="#" class="btn btn-fill-out"><i class="icon-basket-loaded"></i>Dispatched</a></td>
                                <td class="product-timer">
                                  <div class="deal_timer">
                                    <div
                                        class="countdown_time countdown_style1"
                                        data-time="2021/09/28 13:22:15"
                                    ></div>
                                </div>
                                </td>
                                <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                            </tr>
                            <tr>
                            	<td class="product-thumbnail"><a href="{{route('productView')}}"><img style="height: 100px;" src="assets/images/recipe1.jpg" alt="product2"></a></td>
                                <td class="product-name" data-title="Product"><a href="{{route('productView')}}">Allo Channa Chaat Recipe</a></td>
                                <td class="product-price" data-title="Price">$55.00</td>
                                <td class="product-add-to-cart"><a href="#" class="btn btn-fill-out"><i class="icon-basket-loaded"></i>Dispatched</a></td>
                                <td class="product-timer">
                                  <div class="deal_timer">
                                    <div
                                        class="countdown_time countdown_style1"
                                        data-time="2021/09/28 13:22:15"
                                    ></div>
                                </div>
                                </td>
                                <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                            </tr>
                            <tr>
                            	<td class="product-thumbnail"><a href="{{route('productView')}}"><img src="assets/images/product_img03.jpg" alt="product3"></a></td>
                                <td class="product-name" data-title="Product"><a href="{{route('productView')}}">AAshirvaad Atta (select) - 5kg</a></td>
                                <td class="product-price" data-title="Price">$68.00</td>
                                <td class="product-add-to-cart"><a href="" class="btn btn-fill-out"><i class="icon-basket-loaded"></i>Dispatched</a></td>
                                <td class="product-timer">
                                  <div class="deal_timer">
                                    <div
                                        class="countdown_time countdown_style1"
                                        data-time="2021/09/28 13:22:15"
                                    ></div>
                                </div>
                                </td>
                                <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->


</div>
<!-- END MAIN CONTENT -->
@endsection