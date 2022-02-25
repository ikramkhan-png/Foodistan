@extends('front.layout.layout')
@section('content')

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Special Offer</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Grocery</a></li>
                    <li class="breadcrumb-item active">Special Offer</li>
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
          <video width="400" controls>
            <source src="assets/videos/recipevideo1.mp4" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
          </video>
        </div>
    </div>
		<div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
              <div class="product-image">
                    <div class="product_img_box">
                        <img  id="product_img" src='assets/images/specialOffer1.jpg' data-zoom-image="assets/images/specialOffer1.jpg" alt="product_img1" />
                        <a href="#" class="product_img_zoom" title="Zoom">
                            <span class="linearicons-zoom-in"></span>
                        </a>
                    </div>
                    <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                        <div class="item">
                            <a href="#" class="product_gallery_item active" data-image="assets/images/coke1.jpg" data-zoom-image="assets/images/specialOffer1.jpg">
                                <img src="assets/images/coke1.jpg" alt="product_small_img1" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="product_gallery_item" data-image="assets/images/specialOffer1.jpg" data-zoom-image="assets/images/specialOffer1.jpg">
                                <img src="assets/images/specialOffer1.jpg" alt="product_small_img2" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="product_gallery_item" data-image="assets/images/specialOffer1.jpg" data-zoom-image="assets/images/specialOffer1.jpg">
                                <img src="assets/images/specialOffer1.jpg" alt="product_small_img3" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="product_gallery_item" data-image="assets/images/specialOffer1.jpg" data-zoom-image="assets/images/specialOffer1.jpg">
                                <img src="assets/images/specialOffer1.jpg" alt="product_small_img4" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    <div class="product_description">
                        <h4 class="product_title"><a href="#">2 Minutes SIMPLE MAYO SANDWICHES </a></h4>
                        <div class="product_price">
                            <span class="price">$45.00</span>
                            <del>$55.25</del>
                            <div class="on_sale">
                                <span>35% Off</span>
                            </div>
                        </div>
                        <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="rating_num">(21)</span>
                            </div>
                        <div class="pr_desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                        </div>
                        <div class="product_sort_info">
                            <ul>

                                <li><i class="linearicons-sync"></i> 02 Days Return Policy</li>
                                <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                            </ul>
                        </div>
                    </div>
                    <hr />
                    <div class="cart_extra">
                        <div class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                        <div class="cart_btn">
                            <a href="{{route('cart')}}" class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i> Add to cart</a>
                            
                            <a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
                        </div>
                    </div>
                    <hr />
                    <ul class="product-meta">
                        <li>SKU: <a href="#">BE45VGRT</a></li>
                        <li>Category: <a href="#">DAL, LENTILS & BEANS</a></li>
                        <li>Tags: <a href="#" rel="tag">Beans</a>, <a href="#" rel="tag">Lobia</a> </li>
                    </ul>
                    
                    <div class="product_share">
                        <span>Share This Product:</span>
                        <ul class="social_icons">
                            <li><a href="https://www.facebook.com/"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="https://www.googleplus.com/"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="https://www.youtube.com/"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
        <div class="row">
        	<div class="col-12">
            	<div class="large_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="tab-style3">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                      	</li>
                      	<li class="nav-item">
                        	<a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Additional info</a>
                      	</li>
                      	<li class="nav-item">
                        	<a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Reviews (2)</a>
                      	</li>
                    </ul>
                	<div class="tab-content shop_info_tab">
                      	<div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                        	<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Vivamus bibendum magna Lorem ipsum dolor sit amet, consectetur adipiscing elit.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                      	</div>
                      	<div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                        	<table class="table table-bordered">
                            	<tr>
                                	<td>Weight</td>
                                	<td>500g</td>
                            	</tr>
                                <tr>
                                    <td>quality</td>
                                    <td>Best Qulaity</td>
                                </tr>
                                <tr>
                                    <td>Colour</td>
                                    <td>Red</td>
                                </tr>
                        	</table>
                      	</div>
                      	<div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                        	<div class="comments">
                            	<h5 class="product_tab_title">2 Review For <span>TRS Kidney Beans - 500g</span></h5>
                                <ul class="list_none comment_list mt-4">
                                    <li>
                                        <div class="comment_img">
                                            <img src="assets/images/user01.jpg" alt="user1"/>
                                        </div>
                                        <div class="comment_block">
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                            </div>
                                            <p class="customer_meta">
                                                <span class="review_author">Alea Brooks</span>
                                                <span class="comment-date">March 5, 2018</span>
                                            </p>
                                            <div class="description">
                                                <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment_img">
                                            <img src="assets/images/user02.png" alt="user2"/>
                                        </div>
                                        <div class="comment_block">
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <p class="customer_meta">
                                                <span class="review_author">Grace Wong</span>
                                                <span class="comment-date">June 17, 2018</span>
                                            </p>
                                            <div class="description">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                        	</div>
                            <div class="review_form field_form">
                                <h5>Add a review</h5>
                                <form class="row mt-3">
                                    <div class="form-group col-12">
                                        <div class="star_rating">
                                            <span data-value="1"><i class="far fa-star"></i></span>
                                            <span data-value="2"><i class="far fa-star"></i></span> 
                                            <span data-value="3"><i class="far fa-star"></i></span>
                                            <span data-value="4"><i class="far fa-star"></i></span>
                                            <span data-value="5"><i class="far fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
                                     </div>
                                    <div class="form-group col-md-6">
                                        <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
                                    </div>
                                   
                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Submit Review</button>
                                    </div>
                                </form>
                            </div>
                      	</div>
                	</div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="small_divider"></div>
            	<div class="divider"></div>
                <div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="heading_s1">
                	<h3>Releted Products</h3>
                </div>
            	<div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                	<div class="item">
                      <div class="product">
                          <div class="product_img">
                              <a
                                  href="{{route('productView')}}"
                              >
                                  <img
                                      src="assets/images/specialOffer2.jpg"
                                      alt="product_img1"
                                      style="width: 540px; height: 280px;"
                                  />
                              </a>
                          </div>
                          <div class="product_info">
                              <h6 class="product_title">
                                  <a
                                      href="{{route('productView')}}"
                                      >Zinger Burger | Finger Chips  </a
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
                                  href="{{route('productView')}}"
                              >
                                  <img
                                      src="assets/images/specialOffer3.jpg"
                                      alt="product_img2"
                                      style="width: 540px; height: 280px;"
                                  />
                              </a>
                          </div>
                          <div class="product_info">
                              <h6 class="product_title">
                                  <a
                                      href="{{route('productView')}}"
                                      >Beaf Burger | Salad | Finger Frize</a
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
                                  href="{{route('productView')}}"
                              >
                                  <img
                                      src="assets/images/specialOffer4.jpg"
                                      alt="product_img1"
                                      style="width: 540px; height: 280px;"
                                  />
                              </a>
                          </div>
                          <div class="product_info">
                              <h6 class="product_title">
                                  <a
                                      href="{{route('productView')}}"
                                      >Pizza With Extra Cheese</a
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
                                  href="{{route('productView')}}"
                              >
                                  <img
                                      src="assets/images/specialOffer5.jpg"
                                      alt="product_img2"
                                      style="width: 540px; height: 280px;"
                                  />
                              </a>
                          </div>
                          <div class="product_info">
                              <h6 class="product_title">
                                  <a
                                      href="{{route('productView')}}"
                                      >Chinees Spicy Chowmens</a
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
                                  href="{{route('productView')}}"
                              >
                                  <img
                                      src="assets/images/specialOffer6.jpg"
                                      alt="product_img1"
                                      style="width: 540px; height: 280px;"
                                  />
                              </a>
                          </div>
                          <div class="product_info">
                              <h6 class="product_title">
                                  <a
                                      href="{{route('productView')}}"
                                      >Double Bread Shwarma</a
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
                                  href="{{route('productView')}}"
                              >
                                  <img
                                      src="assets/images/specialOffer1.jpg"
                                      alt="product_img2"
                                      style="width: 540px; height: 280px;"
                                  />
                              </a>
                          </div>
                          <div class="product_info">
                              <h6 class="product_title">
                                  <a
                                      href="{{route('productView')}}"
                                      >Turkish Sandwiches</a
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
<!-- END SECTION SHOP -->
@endsection