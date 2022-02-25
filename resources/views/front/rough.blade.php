@extends('front.layout.layout')
@section('content')
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Checkout</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Grocery</a></li>
                    <li class="breadcrumb-item active">checkout</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->
  <!-- START SECTION SHOP FOR GROCERY -->
            <div class="section small_pb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab_slider">
                                <div
                                    class="tab-pane fade show active"
                                    id="step1"
                                    role="tabpanel"
                                    aria-labelledby="step1-tab"
                                >
                                    <div
                                        class="col-12"
                                        data-loop="true"
                                        data-dots="false"
                                        data-nav="true"
                                        data-margin="20"
                                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'
                                    >
                                        <div class="col-lg-6 col-md-6 col-sm-8 col-sx-10  " style="margin: auto;">
                                          <div class="heading_s1">
                                            <h4>Billing Details</h4>
                                          </div>
                                          <form >
                                            <div class="form-group">
                                                <input type="text" required class="form-control" name="fname" placeholder="First name *">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required class="form-control" name="lname" placeholder="Last name *">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="cname" placeholder="Company Name">
                                            </div>
                                            <div class="form-group">
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
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="billing_address" required="" placeholder="Address *">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="billing_address2" required="" placeholder="Address line2">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="city" placeholder="City / Town *">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="state" placeholder="State / County *">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="zipcode" placeholder="Postcode / ZIP *">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="phone" placeholder="Phone *">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="email" placeholder="Email address *">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="step2"
                                    role="tabpanel2"
                                    aria-labelledby="step2-tab"
                                >
                                    <div
                                        class="product_slider carousel_slider owl-carousel owl-theme nav_style1"
                                        data-loop="true"
                                        data-dots="false"
                                        data-nav="true"
                                        data-margin="20"
                                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'
                                    >
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-8 col-sx-10  " style="margin: auto;">
                                          <div class="heading_s1">
                                            <h4>Ship to a different address</h4>
                                          </div>
                                            <div class="form-group">
                                                <input type="text" required class="form-control" name="fname" placeholder="First name *">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required class="form-control" name="lname" placeholder="Last name *">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="cname" placeholder="Company Name">
                                            </div>
                                            <div class="form-group">
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
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="billing_address" required="" placeholder="Address *">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="billing_address2" required="" placeholder="Address line2">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="city" placeholder="City / Town *">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="state" placeholder="State / County *">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="zipcode" placeholder="Postcode / ZIP *">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="phone" placeholder="Phone *">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" required type="text" name="email" placeholder="Email address *">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control btn btn-danger"  required type="submit" name="submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div
                                    class="tab-pane fade"
                                    id="step3"
                                    role="tabpanel3"
                                    aria-labelledby="step3-tab"
                                >
                                    <div
                                        class="product_slider carousel_slider owl-carousel owl-theme nav_style1"
                                        data-loop="true"
                                        data-dots="false"
                                        data-nav="true"
                                        data-margin="20"
                                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'
                                    >
                                    </div>
                                        <div class="col-lg-6 col-md-6 col-sm-8 col-sx-10  " style="margin: auto;">
                                           
                                            <div style="min-height:700px;">
                                                <div class="heading_s1">
                                                <h4>Your Orders</h4>
                                                </div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Blue Dress For Woman <span class="product-qty">x 2</span></td>
                                                            <td>$90.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lether Gray Tuxedo <span class="product-qty">x 1</span></td>
                                                            <td>$55.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>woman full sliv dress <span class="product-qty">x 3</span></td>
                                                            <td>$204.00</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>SubTotal</th>
                                                            <td class="product-subtotal">$349.00</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Shipping</th>
                                                            <td>Free Shipping</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total</th>
                                                            <td class="product-subtotal">$349.00</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                     </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="step4"
                                    role="tabpanel4"
                                    aria-labelledby="step4-tab"
                                >
                                    <div
                                        class="product_slider carousel_slider owl-carousel owl-theme nav_style1"
                                        data-loop="true"
                                        data-dots="false"
                                        data-nav="true"
                                        data-margin="20"
                                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'
                                    >
                                    </div>
                                        <div class="col-lg-6 col-md-6 col-sm-8 col-sx-10  " style="margin: auto;">
                                           
                                            <div style="min-height:700px;">
                                                <div class="payment_method">
                                                    <div class="heading_s1">
                                                        <h4>Payment</h4>
                                                    </div>
                                                    <div class="payment_option">
                                                        <div class="custome-radio">
                                                            <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" value="option3" checked="">
                                                            <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer</label>
                                                            <p data-method="option3" class="payment-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. </p>
                                                        </div>
                                                        <div class="custome-radio">
                                                            <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="option4">
                                                            <label class="form-check-label" for="exampleRadios4">Check Payment</label>
                                                            <p data-method="option4" class="payment-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                        </div>
                                                        <div class="custome-radio">
                                                            <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5">
                                                            <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                                            <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <a href="#" class="btn btn-fill-out btn-block">Place Order</a>
                                                    </div>
                                                </div>
                                            </div>
                                     </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="step4"
                                    role="tabpanel"
                                    aria-labelledby="step4-tab"
                                >
                                    <div
                                        class="product_slider carousel_slider owl-carousel owl-theme nav_style1"
                                        data-loop="true"
                                        data-dots="false"
                                        data-nav="true"
                                        data-margin="20"
                                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'
                                    >
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a
                                                        href="#"
                                                    >
                                                        <img
                                                            src="assets/images/recipe5.jpg"
                                                            alt="product_img5"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >OM ALI, THE EGYPTIAN BREAD PUDDING DESSERT</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$45.00</span
                                                        >
                                                        <del>$55.25</del>
                                                        <div class="on_sale">
                                                            <span>35% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate"
                                                                style="
                                                                    width: 80%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(21)</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <span class="pr_flash bg-danger"
                                                    >Hot</span
                                                >
                                                <div class="product_img">
                                                    <a
                                                        href=""
                                                    >
                                                        <img
                                                            src="assets/images/recipe6.jpg"
                                                            alt="product_img6"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >EGGLESS STRAWBERRY MOUSSE WITH JELLY</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$55.00</span
                                                        >
                                                        <del>$95.00</del>
                                                        <div class="on_sale">
                                                            <span>25% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate"
                                                                style="
                                                                    width: 68%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(15)</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <span
                                                    class="pr_flash bg-success"
                                                    >Sale</span
                                                >
                                                <div class="product_img">
                                                    <a
                                                        href="#"
                                                    >
                                                        <img
                                                            src="assets/images/recipe7.jpg"
                                                            alt="product_img7"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >DULCE DE LECHE MOUSSE RECIPE</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$68.00</span
                                                        >
                                                        <del>$99.00</del>
                                                        <div class="on_sale">
                                                            <span>20% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate"
                                                                style="
                                                                    width: 87%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(25)</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a
                                                        href="#"
                                                    >
                                                        <img
                                                            src="assets/images/recipe1.jpg"
                                                            alt="product_img1"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >ALOO CHANA CHAAT RECIPE | EASY AND QUICK</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$45.00</span
                                                        >
                                                        <del>$55.25</del>
                                                        <div class="on_sale">
                                                            <span>35% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate"
                                                                style="
                                                                    width: 80%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(21)</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a
                                                        href="#"
                                                    >
                                                        <img
                                                            src="assets/images/recipe2.jpg"
                                                            alt="product_img2"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >VEG FRIED RICE, INDO-CHINESE STYLE</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$55.00</span
                                                        >
                                                        <del>$95.00</del>
                                                        <div class="on_sale">
                                                            <span>25% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate"
                                                                style="
                                                                    width: 68%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(15)</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a
                                                        href="#"
                                                    >
                                                        <img
                                                            src="assets/images/recipe1.jpg"
                                                            alt="product_img1"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >ALOO CHANA CHAAT RECIPE | EASY AND QUICK</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$45.00</span
                                                        >
                                                        <del>$55.25</del>
                                                        <div class="on_sale">
                                                            <span>35% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate"
                                                                style="
                                                                    width: 80%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(21)</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a
                                                        href="#"
                                                    >
                                                        <img
                                                            src="assets/images/recipe2.jpg"
                                                            alt="product_img2"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >VEG FRIED RICE, INDO-CHINESE STYLE</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$55.00</span
                                                        >
                                                        <del>$95.00</del>
                                                        <div class="on_sale">
                                                            <span>25% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate"
                                                                style="
                                                                    width: 68%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(15)</span
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="heading_tab_header">
                                <div class="heading_s2">
                                    <p>Complete All Five Steps Carefully</p>
                                </div>
                                <div class="tab-style2">
                                    <button
                                        class="navbar-toggler"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#tabmenubar"
                                        aria-expanded="false"
                                    >
                                        <span class="ion-android-menu"></span>
                                    </button>
                                    <ul
                                        class="nav nav-tabs justify-content-center justify-content-md-end"
                                        id="tabmenubar"
                                        role="tablist"
                                    >
                                        <li class="nav-item">
                                            <a
                                                class="nav-link active"
                                                id="step1-tab"
                                                data-toggle="tab"
                                                href="#step1"
                                                role="tab"
                                                aria-controls="step1"
                                                aria-selected="true"
                                                >Next</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="step2-tab"
                                                data-toggle="tab"
                                                href="#step2"
                                                role="tab"
                                                aria-controls="step2"
                                                aria-selected="false"
                                                >Next</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="step3-tab"
                                                data-toggle="tab"
                                                href="#step3"
                                                role="tab"
                                                aria-controls="step3"
                                                aria-selected="false"
                                                >Next</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="step4-tab"
                                                data-toggle="tab"
                                                href="#step4"
                                                role="tab"
                                                aria-controls="step4"
                                                aria-selected="false"
                                                >Next
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="step5-tab"
                                                data-toggle="tab"
                                                href="#step5"
                                                role="tab"
                                                aria-controls="step5"
                                                aria-selected="false"
                                                >Finish 
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION SHOP FOR GROCERY -->

@endsection