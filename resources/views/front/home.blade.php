@extends('front.layout.layout')
@section('content')


        <!-- Home Popup Section -->
        <!-- <div
            class="modal fade subscribe_popup"
            id=""onload-popup
            tabindex="-1"
            role="dialog"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-lg modal-dialog-centered"
                role="document"
            >
                <div class="modal-content">
                    <div class="modal-body">
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true"
                                ><i class="ion-ios-close-empty"></i
                            ></span>
                        </button>
                        <div class="row no-gutters">
                            <div class="col-sm-5">
                                <div
                                    class="background_bg h-100"
                                    data-img-src="assets/images/popup_img.jpg"
                                ></div>
                            </div>
                            <div class="col-sm-7">
                                <div class="popup_content">
                                    <div class="popup-text">
                                        <div class="heading_s4">
                                            <h4>
                                                Subscribe and Get 25% Discount!
                                            </h4>
                                        </div>
                                        <p>
                                            Subscribe to the newsletter to
                                            receive updates about new products.
                                        </p>
                                    </div>
                                    <form method="post">
                                        <div class="form-group">
                                            <input
                                                name="email"
                                                required
                                                type="email"
                                                class="form-control rounded-0"
                                                placeholder="Enter Your Email"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <button
                                                class="btn btn-fill-line btn-block text-uppercase rounded-0"
                                                title="Subscribe"
                                                type="submit"
                                            >
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                name="checkbox"
                                                id="exampleCheckbox3"
                                                value=""
                                            />
                                            <label
                                                class="form-check-label"
                                                for="exampleCheckbox3"
                                                ><span
                                                    >Don't show this popup
                                                    again!</span
                                                ></label
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Screen Load Popup Section -->

        

        <!-- START SECTION BANNER -->
        <div
            class=" slide_medium shop_banner_slider staggered-animation-wrap"
        >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            id="carouselExampleControls"
                            class="carousel slide light_arrow"
                            data-ride="carousel"
                        >
                            <div class="carousel-inner">
                                
                                <div 
                                    class="carousel-item active background_bg"
                                >
                                    <img src="assets/images/banner4.png" class="d-block w-100" alt="...">
                                </div>
                                <div
                                    class="carousel-item background_bg"
                                >
                                    <img src="assets/images/banner5.png" class="d-block w-100" alt="...">
                                </div>
                                <div
                                    class="carousel-item background_bg"
                                >
                                    <img src="assets/images/banner6.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <ol class="carousel-indicators indicators_style1">
                                <li
                                    data-target="#carouselExampleControls"
                                    data-slide-to="0"
                                    class="active"
                                ></li>
                                <li
                                    data-target="#carouselExampleControls"
                                    data-slide-to="1"
                                ></li>
                                <li
                                    data-target="#carouselExampleControls"
                                    data-slide-to="2"
                                ></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION BANNER -->

        <!-- END MAIN CONTENT -->
        <div class="main_content">
            <!-- START SECTION SHOP FOR GROCERY -->
            <div class="section small_pb">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12">
                            <div class="heading_tab_header">
                                <div class="heading_s2">
                                    <h2>EXCLUSIVE GROCERY PRODUCTS</h2>
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
                                                id="arrival-tab"
                                                data-toggle="tab"
                                                href="#arrival"
                                                role="tab"
                                                aria-controls="arrival"
                                                aria-selected="true"
                                                >New Arrival</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="sellers-tab"
                                                data-toggle="tab"
                                                href="#sellers"
                                                role="tab"
                                                aria-controls="sellers"
                                                aria-selected="false"
                                                >Best Sellers</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="featured-tab"
                                                data-toggle="tab"
                                                href="#featured"
                                                role="tab"
                                                aria-controls="featured"
                                                aria-selected="false"
                                                >Featured</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="special-tab"
                                                data-toggle="tab"
                                                href="#special"
                                                role="tab"
                                                aria-controls="special"
                                                aria-selected="false"
                                                >Special Offer
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab_slider">
                                <div
                                    class="tab-pane fade show active"
                                    id="arrival"
                                    role="tabpanel"
                                    aria-labelledby="arrival-tab"
                                >
                                    <div
                                        class="product_slider carousel_slider owl-carousel owl-theme nav_style1"
                                        data-loop="true"
                                        data-dots="false"
                                        data-nav="true"
                                        data-margin="20"
                                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'
                                    >
                                        @foreach($new_products as $product)
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a
                                                        href="{{route('productView')}}"
                                                    >
                                                        <img
                                                            src="{{asset('uploads/products/'.$product->image)}}"
                                                            alt="product_img1"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="{{route('productView')}}"
                                                            >{{$product->name}}</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >${{$product->price}}</span
                                                        >
                                                        <del>$55.25</del>
                                                        <div class="on_sale">
                                                            <span>35% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap ">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate pull-right"
                                                                style="
                                                                    width: 80%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(21)</span
                                                        >
                                                    </div>
                                                    <div class="text-right" style="font-size: 30px;">
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-facebook"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-twitter"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-instagram"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-heart"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="sellers"
                                    role="tabpanel"
                                    aria-labelledby="sellers-tab"
                                >
                                    <div
                                        class="product_slider carousel_slider owl-carousel owl-theme nav_style1"
                                        data-loop="true"
                                        data-dots="false"
                                        data-nav="true"
                                        data-margin="20"
                                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'
                                    >
                                        @foreach($products as $product)
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a
                                                        href="#"
                                                    >
                                                        <img
                                                            src="{{asset('uploads/products/'.$product->image)}}"
                                                            alt="product_img5"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >{{$product->name}}</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >{{$product->price}}</span
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-facebook"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-twitter"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-instagram"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-heart"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="featured"
                                    role="tabpanel"
                                    aria-labelledby="featured-tab"
                                >
                                    <div
                                        class="product_slider carousel_slider owl-carousel owl-theme nav_style1"
                                        data-loop="true"
                                        data-dots="false"
                                        data-nav="true"
                                        data-margin="20"
                                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'
                                    >
                                        @foreach($new_products as $product)
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a
                                                        href="{{route('productView')}}"
                                                    >
                                                        <img
                                                            src="{{asset('uploads/products/'.$product->image)}}"
                                                            alt="product_img1"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="{{route('productView')}}"
                                                            >{{$product->name}}</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >${{$product->price}}</span
                                                        >
                                                        <del>$55.25</del>
                                                        <div class="on_sale">
                                                            <span>35% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap ">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate pull-right"
                                                                style="
                                                                    width: 80%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(21)</span
                                                        >
                                                    </div>
                                                    <div class="text-right" style="font-size: 30px;">
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-facebook"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-twitter"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-instagram"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-heart"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="special"
                                    role="tabpanel"
                                    aria-labelledby="special-tab"
                                >
                                    <div
                                        class="product_slider carousel_slider owl-carousel owl-theme nav_style1"
                                        data-loop="true"
                                        data-dots="false"
                                        data-nav="true"
                                        data-margin="20"
                                        data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'
                                    >
                                        @foreach($products as $product)
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a
                                                        href="#"
                                                    >
                                                        <img
                                                            src="{{asset('uploads/products/'.$product->image)}}"
                                                            alt="product_img5"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >{{$product->name}}</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >{{$product->price}}</span
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-facebook"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-twitter"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-social-instagram"></i>
                                                            </a>
                                                        </span>
                                                        <span>
                                                            <a href="#">
                                                                <i class="ion-heart"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="section small_pb">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="heading_tab_header">
                                                    <div class="heading_s2">
                                                        <h2>GROCERY</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      <div class="row">
                                          @foreach($products as $product)
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                          
                                          <div class="item">
                                              <div class="product">
                                                  <div class="product_img">
                                                      <a
                                                          href="{{route('productView')}}"
                                                      >
                                                          <img
                                                              src="{{asset('uploads/products/'.$product->image)}}"
                                                              alt="product_img8"
                                                          />
                                                      </a>
                                                  </div>
                                                  <div class="product_info">
                                                      <h6 class="product_title">
                                                          <a
                                                              href="{{route('productView')}}"
                                                              >{{$product->name}}</a
                                                          >
                                                      </h6>
                                                      <div class="product_price">
                                                          <span class="price"
                                                              >{{$product->price}}</span
                                                          >
                                                          <del>$89.00</del>
                                                          <div class="on_sale">
                                                              <span>20% Off</span>
                                                          </div>
                                                      </div>
                                                      <div class="rating_wrap">
                                                          <div class="rating">
                                                              <div
                                                                  class="product_rate"
                                                                  style="
                                                                      width: 70%;
                                                                  "
                                                              ></div>
                                                          </div>
                                                          <span class="rating_num"
                                                              >(22)</span
                                                          >
                                                      </div>
                                                      <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                        @endforeach

                                      </div>
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION SHOP FOR GROCERY -->

            <!-- START SECTION BANNER -->
            <div class="section pb_20 small_pt">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_banner">
                                <img
                                    src="assets/images/shop_banner_img01.jpg"
                                    alt="shop_banner_img1"
                                    style="height: 300px;"
                                />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_banner">
                                <img
                                    src="assets/images/shop_banner_img02.jpg"
                                    alt="shop_banner_img2"
                                    style="height: 300px;"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION BANNER -->

            <!-- START SECTION SHOP FOR GROCERY -->
            <div class="section small_pb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading_tab_header">
                                <div class="heading_s2">
                                    <h2>EXCLUSIVE RECIPES</h2>
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
                                                id="arrival-tab2"
                                                data-toggle="tab"
                                                href="#arrival2"
                                                role="tab"
                                                aria-controls="arrival2"
                                                aria-selected="true"
                                                >New Arrival</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="sellers-tab2"
                                                data-toggle="tab"
                                                href="#sellers2"
                                                role="tab"
                                                aria-controls="sellers2"
                                                aria-selected="false"
                                                >Best Sellers</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="featured-tab2"
                                                data-toggle="tab"
                                                href="#featured2"
                                                role="tab"
                                                aria-controls="featured2"
                                                aria-selected="false"
                                                >Featured</a
                                            >
                                        </li>
                                        <li class="nav-item">
                                            <a
                                                class="nav-link"
                                                id="special-tab2"
                                                data-toggle="tab"
                                                href="#special2"
                                                role="tab"
                                                aria-controls="special2"
                                                aria-selected="false"
                                                >Special Offer
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab_slider">
                                <div
                                    class="tab-pane fade show active"
                                    id="arrival2"
                                    role="tabpanel"
                                    aria-labelledby="arrival-tab2"
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <span class="pr_flash"
                                                    >New</span
                                                >
                                                <div class="product_img">
                                                    <a
                                                        href="#"
                                                    >
                                                        <img
                                                            src="assets/images/recipe3.jpg"
                                                            alt="product_img3"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >KADHI PAKORA RECIPE</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$68.00</span
                                                        >
                                                        <del>$99.00</del>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a
                                                        href="shop-product-detail.html"
                                                    >
                                                        <img
                                                            src="assets/images/recipe4.jpg"
                                                            alt="product_img4"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="shop-product-detail.html"
                                                            >SINGAPOREAN RICE |EASY AND DELICIOUS</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$69.00</span
                                                        >
                                                        <del>$89.00</del>
                                                        <div class="on_sale">
                                                            <span>20% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate"
                                                                style="
                                                                    width: 70%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(22)</span
                                                        >
                                                    </div>
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                            src="assets/images/recipe8.jpg"
                                                            alt="product_img8"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >GREEN CHUTNEY RECIPE, CILANTRO / MINT CHUTNEY</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$69.00</span
                                                        >
                                                        <del>$89.00</del>
                                                        <div class="on_sale">
                                                            <span>20% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate"
                                                                style="
                                                                    width: 70%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(22)</span
                                                        >
                                                    </div>
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="sellers2"
                                    role="tabpanel2"
                                    aria-labelledby="sellers-tab2"
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="featured2"
                                    role="tabpanel"
                                    aria-labelledby="featured-tab2"
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <span class="pr_flash"
                                                    >New</span
                                                >
                                                <div class="product_img">
                                                    <a
                                                        href="#"
                                                    >
                                                        <img
                                                            src="assets/images/recipe3.jpg"
                                                            alt="product_img3"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >KADHI PAKORA RECIPE</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$68.00</span
                                                        >
                                                        <del>$99.00</del>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product">
                                                <div class="product_img">
                                                    <a
                                                        href="shop-product-detail.html"
                                                    >
                                                        <img
                                                            src="assets/images/recipe4.jpg"
                                                            alt="product_img4"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="shop-product-detail.html"
                                                            >SINGAPOREAN RICE |EASY AND DELICIOUS</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$69.00</span
                                                        >
                                                        <del>$89.00</del>
                                                        <div class="on_sale">
                                                            <span>20% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate"
                                                                style="
                                                                    width: 70%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(22)</span
                                                        >
                                                    </div>
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                            src="assets/images/recipe8.jpg"
                                                            alt="product_img8"
                                                            style="width: 540px; height: 280px;"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="product_info">
                                                    <h6 class="product_title">
                                                        <a
                                                            href="#"
                                                            >GREEN CHUTNEY RECIPE, CILANTRO / MINT CHUTNEY</a
                                                        >
                                                    </h6>
                                                    <div class="product_price">
                                                        <span class="price"
                                                            >$69.00</span
                                                        >
                                                        <del>$89.00</del>
                                                        <div class="on_sale">
                                                            <span>20% Off</span>
                                                        </div>
                                                    </div>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div
                                                                class="product_rate"
                                                                style="
                                                                    width: 70%;
                                                                "
                                                            ></div>
                                                        </div>
                                                        <span class="rating_num"
                                                            >(22)</span
                                                        >
                                                    </div>
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="special2"
                                    role="tabpanel"
                                    aria-labelledby="special-tab2"
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section small_pb">
                                      <div class="container">
                                        <div class="row">
                                        <div class="col-12">
                                          <div class="heading_tab_header">
                                        <div class="heading_s2">
                                            <h2>RECIPES</h2>
                                        </div>
                                      </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                          
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                          
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">  
                                        
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">  
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
                                                    <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">  
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
                                                      <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">  
                                          <div class="item">
                                              <div class="product">
                                                  <div class="product_img">
                                                      <a
                                                          href="#"
                                                      >
                                                          <img
                                                              src="assets/images/recipe8.jpg"
                                                              alt="product_img8"
                                                              style="width: 540px; height: 280px;"
                                                          />
                                                      </a>
                                                  </div>
                                                  <div class="product_info">
                                                      <h6 class="product_title">
                                                          <a
                                                              href="#"
                                                              >GREEN CHUTNEY RECIPE, CILANTRO / MINT CHUTNEY</a
                                                          >
                                                      </h6>
                                                      <div class="product_price">
                                                          <span class="price"
                                                              >$69.00</span
                                                          >
                                                          <del>$89.00</del>
                                                          <div class="on_sale">
                                                              <span>20% Off</span>
                                                          </div>
                                                      </div>
                                                      <div class="rating_wrap">
                                                          <div class="rating">
                                                              <div
                                                                  class="product_rate"
                                                                  style="
                                                                      width: 70%;
                                                                  "
                                                              ></div>
                                                          </div>
                                                          <span class="rating_num"
                                                              >(22)</span
                                                          >
                                                      </div>
                                                      <div class="text-right" style="font-size: 30px;">
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-social-instagram"></i>
                                                        </a>
                                                    </span>
                                                    <span>
                                                        <a href="#">
                                                            <i class="ion-heart"></i>
                                                        </a>
                                                    </span>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>

                                      </div>
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION SHOP FOR GROCERY -->

            <!-- START SECTION SHOP grocery -->
            <div class="section small_pt small_pb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_tab_header">
                                <div class="heading_s2">
                                    <h2>Deal On Grocery</h2>
                                </div>
                                <div class="deal_timer">
                                    <div
                                        class="countdown_time countdown_style1"
                                        data-time="2021/09/28 13:22:15"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
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
                                                href="shop-product-detail.html"
                                            >
                                                <img
                                                    src="assets/images/product_img1.png"
                                                    alt="product_img1"
                                                    style="width: 540px; height: 280px;"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >TRS Yellow Split Peas - 2kg</a
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
                                            <div class="text-right" style="font-size: 30px;">
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-instagram"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-heart"></i>
                                                    </a>
                                                </span>
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
                                                    src="assets/images/product_img02.jpg"
                                                    alt="product_img2"
                                                    style="width: 540px; height: 280px;"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >TRS Red Kidney Beans - 500g</a
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
                                            <div class="text-right" style="font-size: 30px;">
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-instagram"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-heart"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <span class="pr_flash"
                                            >New</span
                                        >
                                        <div class="product_img">
                                            <a
                                                href="#"
                                            >
                                                <img
                                                    src="assets/images/product_image3.jpeg"
                                                    alt="product_img3"
                                                    style="width: 540px; height: 280px;"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Aashirvaad Atta (Select) - 5kg</a
                                                >
                                            </h6>
                                            <div class="product_price">
                                                <span class="price"
                                                    >$68.00</span
                                                >
                                                <del>$99.00</del>
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
                                            <div class="text-right" style="font-size: 30px;">
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-instagram"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-heart"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product_img">
                                            <a
                                                href="shop-product-detail.html"
                                            >
                                                <img
                                                    src="assets/images/product_img04.jpg"
                                                    alt="product_img4"
                                                    style="width: 540px; height: 280px;"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="shop-product-detail.html"
                                                    >Daawat Basmati Original Rice (Blue) - 5kg</a
                                                >
                                            </h6>
                                            <div class="product_price">
                                                <span class="price"
                                                    >$69.00</span
                                                >
                                                <del>$89.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div
                                                        class="product_rate"
                                                        style="
                                                            width: 70%;
                                                        "
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(22)</span
                                                >
                                            </div>
                                            <div class="text-right" style="font-size: 30px;">
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-instagram"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-heart"></i>
                                                    </a>
                                                </span>
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
                                                    src="assets/images/product_img05.jpg"
                                                    alt="product_img5"
                                                    style="width: 540px; height: 280px;"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Khanum Veg Ghee - 1kg</a
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
                                            <div class="text-right" style="font-size: 30px;">
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-instagram"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-heart"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION SHOP -->

            <!-- START SECTION SHOP grocery -->
            <div class="section small_pt small_pb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_tab_header">
                                <div class="heading_s2">
                                    <h2>Deal On Recipies</h2>
                                </div>
                                <div class="deal_timer">
                                    <div
                                        class="countdown_time countdown_style1"
                                        data-time="2021/09/28 13:22:15"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
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
                                                href="shop-product-detail.html"
                                            >
                                                <img
                                                    src="assets/images/recipe4.jpg"
                                                    alt="product_img4"
                                                    style="width: 540px; height: 280px;"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="shop-product-detail.html"
                                                    >SINGAPOREAN RICE |EASY AND DELICIOUS</a
                                                >
                                            </h6>
                                            <div class="product_price">
                                                <span class="price"
                                                    >$69.00</span
                                                >
                                                <del>$89.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div
                                                        class="product_rate"
                                                        style="
                                                            width: 70%;
                                                        "
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(22)</span
                                                >
                                            </div>
                                            <div class="text-right" style="font-size: 30px;">
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-instagram"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-heart"></i>
                                                    </a>
                                                </span>
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
                                            <div class="text-right" style="font-size: 30px;">
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-instagram"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-heart"></i>
                                                    </a>
                                                </span>
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
                                            <div class="text-right" style="font-size: 30px;">
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-instagram"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-heart"></i>
                                                    </a>
                                                </span>
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
                                            <div class="text-right" style="font-size: 30px;">
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-instagram"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-heart"></i>
                                                    </a>
                                                </span>
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
                                                    src="assets/images/recipe8.jpg"
                                                    alt="product_img8"
                                                    style="width: 540px; height: 280px;"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >GREEN CHUTNEY RECIPE, CILANTRO / MINT CHUTNEY</a
                                                >
                                            </h6>
                                            <div class="product_price">
                                                <span class="price"
                                                    >$69.00</span
                                                >
                                                <del>$89.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div
                                                        class="product_rate"
                                                        style="
                                                            width: 70%;
                                                        "
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(22)</span
                                                >
                                            </div>
                                            <div class="text-right" style="font-size: 30px;">
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-facebook"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-twitter"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-social-instagram"></i>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="#">
                                                        <i class="ion-heart"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION SHOP -->

            <!-- START SECTION BANNER -->
            <div class="section pb_20 small_pt">
                <div class="container-fluid px-2">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="sale_banner">
                                <a class="hover_effect1" href="#">
                                    <img
                                        src="assets/images/shop_banner_img01.jpg"
                                        alt="shop_banner_img3"
                                        style="height: 200px;"
                                    />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sale_banner">
                                <a class="hover_effect1" href="#">
                                    <img
                                        src="assets/images/shop_banner_img02.jpg"
                                        alt="shop_banner_img4"
                                        style="height: 200px;"
                                    />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sale_banner">
                                <a class="hover_effect1" href="#">
                                    <img
                                        src="assets/images/banner5.png"
                                        alt="shop_banner_img5"
                                        style="height: 200px;"
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION BANNER -->

            <!-- START SECTION SHOP -->
            <div class="section small_pt pb_20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_tab_header">
                                <div class="heading_s2">
                                    <h2>Featured Products</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div
                                class="product_slider product_list carousel_slider owl-carousel owl-theme nav_style3"
                                data-loop="true"
                                data-dots="false"
                                data-nav="true"
                                data-margin="20"
                                data-responsive='{"0":{"items": "1"}, "767":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "3"}}'
                            >
                                <div class="item">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img02.jpg"
                                                    alt="product_img1"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >TRS Red Kidney Beans -5Kg/a
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
                                                        style="width: 80%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(21)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img03.jpg"
                                                    alt="product_img6"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Aashirvaad Atta (Select) -5Kg</a
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
                                                        style="width: 68%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(15)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img04.jpg"
                                                    alt="product_img12"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Dawat Basmati Origonal Chawal</a
                                                >
                                            </h6>
                                            <div class="product_price">
                                                <span class="price"
                                                    >$69.00</span
                                                >
                                                <del>$89.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div
                                                        class="product_rate"
                                                        style="width: 70%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(22)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img05.jpg"
                                                    alt="product_img2"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Khanum Veg Ghee - 1Kg</a
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
                                                        style="width: 68%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(15)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img06.jpg"
                                                    alt="product_img7"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >National Corn Flour -300g</a
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
                                                        style="width: 87%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(25)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img07.jpg"
                                                    alt="product_img10"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Everest Tikhalal Chilli Powder</a
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
                                                        style="width: 68%"
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
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img03.jpg"
                                                    alt="product_img3"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Aashirvaad Atta (Select) -5Kg</a
                                                >
                                            </h6>
                                            <div class="product_price">
                                                <span class="price"
                                                    >$68.00</span
                                                >
                                                <del>$99.00</del>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div
                                                        class="product_rate"
                                                        style="width: 87%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(25)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img04.jpg"
                                                    alt="product_img8"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Dawat Basmati Origonal(Chawal) -5Kg</a
                                                >
                                            </h6>
                                            <div class="product_price">
                                                <span class="price"
                                                    >$69.00</span
                                                >
                                                <del>$89.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div
                                                        class="product_rate"
                                                        style="width: 70%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(22)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img02.jpg"
                                                    alt="product_img13"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >TRS Red Kidney Beans -5Kg</a
                                                >
                                            </h6>
                                            <div class="product_price">
                                                <span class="price"
                                                    >$65.00</span
                                                >
                                                <del>$80.00</del>
                                                <div class="on_sale">
                                                    <span>30% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div
                                                        class="product_rate"
                                                        style="width: 80%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(28)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img02.jpg"
                                                    alt="product_img1"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >TRS Red Kidney Beans -5Kg/a
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
                                                        style="width: 80%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(21)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img03.jpg"
                                                    alt="product_img6"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Aashirvaad Atta (Select) -5Kg</a
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
                                                        style="width: 68%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(15)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img04.jpg"
                                                    alt="product_img12"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Dawat Basmati Origonal Chawal</a
                                                >
                                            </h6>
                                            <div class="product_price">
                                                <span class="price"
                                                    >$69.00</span
                                                >
                                                <del>$89.00</del>
                                                <div class="on_sale">
                                                    <span>20% Off</span>
                                                </div>
                                            </div>
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div
                                                        class="product_rate"
                                                        style="width: 70%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(22)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img05.jpg"
                                                    alt="product_img2"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Khanum Veg Ghee - 1Kg</a
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
                                                        style="width: 68%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(15)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img06.jpg"
                                                    alt="product_img7"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >National Corn Flour -300g</a
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
                                                        style="width: 87%"
                                                    ></div>
                                                </div>
                                                <span class="rating_num"
                                                    >(25)</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#">
                                                <img
                                                    src="assets/images/product_img07.jpg"
                                                    alt="product_img10"
                                                />
                                            </a>
                                        </div>
                                        <div class="product_info">
                                            <h6 class="product_title">
                                                <a
                                                    href="#"
                                                    >Everest Tikhalal Chilli Powder</a
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
                                                        style="width: 68%"
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
            <!-- END SECTION SHOP -->

            <!-- START SECTION CLIENT LOGO -->
            <div class="section small_pt">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_tab_header">
                                <div class="heading_s2">
                                    <h2>Our Brands</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="client_logo carousel_slider owl-carousel owl-theme nav_style3"
                                data-dots="false"
                                data-nav="true"
                                data-margin="30"
                                data-loop="true"
                                data-autoplay="true"
                                data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'
                            >
                                <div class="item">
                                    <div class="cl_logo">
                                        <img
                                            src="assets/images/cl_logo1.png"
                                            alt="cl_logo"
                                        />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cl_logo">
                                        <img
                                            src="assets/images/cl_logo2.png"
                                            alt="cl_logo"
                                        />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cl_logo">
                                        <img
                                            src="assets/images/cl_logo3.png"
                                            alt="cl_logo"
                                        />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cl_logo">
                                        <img
                                            src="assets/images/cl_logo4.png"
                                            alt="cl_logo"
                                        />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cl_logo">
                                        <img
                                            src="assets/images/cl_logo5.png"
                                            alt="cl_logo"
                                        />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="cl_logo">
                                        <img
                                            src="assets/images/cl_logo6.png"
                                            alt="cl_logo"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SECTION CLIENT LOGO -->

        </div>
        <!-- END MAIN CONTENT -->
@endsection