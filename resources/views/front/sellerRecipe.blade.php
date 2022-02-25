@extends('front.layout.sellerLayouts.layout')
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

           
            <!-- START SECTION SHOP FOR SPECIAL OFFER ON RECIPES -->
            <div class="section small_pb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section small_pb">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-12">
                                        <div class="heading_tab_header">
                                          <div class="heading_s2">
                                              <h2>SPECIAL OFFERS ON RECIPE PRODUCTS</h2>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                                            <div class="item">
                                                <div class="card sellerFullCard">
                                                    <div class="card-header">
                                                        <div class=" d-flex justify-content-between ">
                                                            <h5 class="text-left">Items</h5>
                                                            <h5 class="text-right">Quantity</h5>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light card-body">
                                                        
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                                            <div class="text-right">3</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                                            <div class="text-right">5</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">National Corn Flour - 300g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Neal Bansari Paan 250g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class=" d-flex justify-content-between ">
                                                            <p>Total Items</p>
                                                            <p class="text-right">10</p>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div>
                                                                <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                                    View Order
                                                                </button>
                                                            </div>
                                                            <div >
                                                                <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Item Name</th>
                                                                        <th scope="col">Quantity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Aashirvaad Atta (select) -5kg</td>
                                                                        <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>TRS Red Kideny Beans - 500g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>TRS Yellow Split Peas -2kg</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Khanam Veg Ghee - 1kg</td>
                                                                        <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>National Corn Flour - 300g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">6</th>
                                                                        <td>Neal Bansari Paan - 250g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">7</th>
                                                                        <td>Everest Tikhalal Powder chilli - 250g</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h4>total</h4>
                                                                    <h4>7 Items</h4>
                                                                </div>
                                                            </div>
                                                            <div class=" d-flex justify-content-between m-5 ">
                                                                <div>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class="text-right" >
                                                                    <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                                            <div class="item">
                                                <div class="card sellerFullCard">
                                                    <div class="card-header">
                                                        <div class=" d-flex justify-content-between ">
                                                            <h5 class="text-left">Items</h5>
                                                            <h5 class="text-right">Quantity</h5>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light card-body">
                                                        
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                                            <div class="text-right">3</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                                            <div class="text-right">5</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">National Corn Flour - 300g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Neal Bansari Paan 250g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class=" d-flex justify-content-between ">
                                                            <p>Total Items</p>
                                                            <p class="text-right">10</p>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div>
                                                                <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                                    View Order
                                                                </button>
                                                            </div>
                                                            <div >
                                                                <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Item Name</th>
                                                                        <th scope="col">Quantity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Aashirvaad Atta (select) -5kg</td>
                                                                        <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>TRS Red Kideny Beans - 500g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>TRS Yellow Split Peas -2kg</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Khanam Veg Ghee - 1kg</td>
                                                                        <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>National Corn Flour - 300g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">6</th>
                                                                        <td>Neal Bansari Paan - 250g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">7</th>
                                                                        <td>Everest Tikhalal Powder chilli - 250g</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h4>total</h4>
                                                                    <h4>7 Items</h4>
                                                                </div>
                                                            </div>
                                                            <div class=" d-flex justify-content-between m-5 ">
                                                                <div>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class="text-right" >
                                                                    <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                                            <div class="item">
                                                <div class="card sellerFullCard">
                                                    <div class="card-header">
                                                        <div class=" d-flex justify-content-between ">
                                                            <h5 class="text-left">Items</h5>
                                                            <h5 class="text-right">Quantity</h5>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light card-body">
                                                        
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                                            <div class="text-right">3</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                                            <div class="text-right">5</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">National Corn Flour - 300g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Neal Bansari Paan 250g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class=" d-flex justify-content-between ">
                                                            <p>Total Items</p>
                                                            <p class="text-right">10</p>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div>
                                                                <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                                    View Order
                                                                </button>
                                                            </div>
                                                            <div >
                                                                <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Item Name</th>
                                                                        <th scope="col">Quantity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Aashirvaad Atta (select) -5kg</td>
                                                                        <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>TRS Red Kideny Beans - 500g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>TRS Yellow Split Peas -2kg</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Khanam Veg Ghee - 1kg</td>
                                                                        <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>National Corn Flour - 300g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">6</th>
                                                                        <td>Neal Bansari Paan - 250g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">7</th>
                                                                        <td>Everest Tikhalal Powder chilli - 250g</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h4>total</h4>
                                                                    <h4>7 Items</h4>
                                                                </div>
                                                            </div>
                                                            <div class=" d-flex justify-content-between m-5 ">
                                                                <div>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class="text-right" >
                                                                    <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                                            <div class="item">
                                                <div class="card sellerFullCard">
                                                    <div class="card-header">
                                                        <div class=" d-flex justify-content-between ">
                                                            <h5 class="text-left">Items</h5>
                                                            <h5 class="text-right">Quantity</h5>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light card-body">
                                                        
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                                            <div class="text-right">3</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                                            <div class="text-right">5</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">National Corn Flour - 300g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Neal Bansari Paan 250g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class=" d-flex justify-content-between ">
                                                            <p>Total Items</p>
                                                            <p class="text-right">10</p>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div>
                                                                <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                                    View Order
                                                                </button>
                                                            </div>
                                                            <div >
                                                                <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Item Name</th>
                                                                        <th scope="col">Quantity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Aashirvaad Atta (select) -5kg</td>
                                                                        <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>TRS Red Kideny Beans - 500g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>TRS Yellow Split Peas -2kg</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Khanam Veg Ghee - 1kg</td>
                                                                        <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>National Corn Flour - 300g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">6</th>
                                                                        <td>Neal Bansari Paan - 250g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">7</th>
                                                                        <td>Everest Tikhalal Powder chilli - 250g</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h4>total</h4>
                                                                    <h4>7 Items</h4>
                                                                </div>
                                                            </div>
                                                            <div class=" d-flex justify-content-between m-5 ">
                                                                <div>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class="text-right" >
                                                                    <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                                            <div class="item">
                                                <div class="card sellerFullCard">
                                                    <div class="card-header">
                                                        <div class=" d-flex justify-content-between ">
                                                            <h5 class="text-left">Items</h5>
                                                            <h5 class="text-right">Quantity</h5>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light card-body">
                                                        
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                                            <div class="text-right">3</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                                            <div class="text-right">5</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">National Corn Flour - 300g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Neal Bansari Paan 250g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class=" d-flex justify-content-between ">
                                                            <p>Total Items</p>
                                                            <p class="text-right">10</p>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div>
                                                                <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                                    View Order
                                                                </button>
                                                            </div>
                                                            <div >
                                                                <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Item Name</th>
                                                                        <th scope="col">Quantity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Aashirvaad Atta (select) -5kg</td>
                                                                        <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>TRS Red Kideny Beans - 500g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>TRS Yellow Split Peas -2kg</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Khanam Veg Ghee - 1kg</td>
                                                                        <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>National Corn Flour - 300g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">6</th>
                                                                        <td>Neal Bansari Paan - 250g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">7</th>
                                                                        <td>Everest Tikhalal Powder chilli - 250g</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h4>total</h4>
                                                                    <h4>7 Items</h4>
                                                                </div>
                                                            </div>
                                                            <div class=" d-flex justify-content-between m-5 ">
                                                                <div>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class="text-right" >
                                                                    <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                                            <div class="item">
                                                <div class="card sellerFullCard">
                                                    <div class="card-header">
                                                        <div class=" d-flex justify-content-between ">
                                                            <h5 class="text-left">Items</h5>
                                                            <h5 class="text-right">Quantity</h5>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light card-body">
                                                        
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                                            <div class="text-right">3</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                                            <div class="text-right">5</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">National Corn Flour - 300g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Neal Bansari Paan 250g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class=" d-flex justify-content-between ">
                                                            <p>Total Items</p>
                                                            <p class="text-right">10</p>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div>
                                                                <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                                    View Order
                                                                </button>
                                                            </div>
                                                            <div >
                                                                <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Item Name</th>
                                                                        <th scope="col">Quantity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Aashirvaad Atta (select) -5kg</td>
                                                                        <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>TRS Red Kideny Beans - 500g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>TRS Yellow Split Peas -2kg</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Khanam Veg Ghee - 1kg</td>
                                                                        <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>National Corn Flour - 300g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">6</th>
                                                                        <td>Neal Bansari Paan - 250g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">7</th>
                                                                        <td>Everest Tikhalal Powder chilli - 250g</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h4>total</h4>
                                                                    <h4>7 Items</h4>
                                                                </div>
                                                            </div>
                                                            <div class=" d-flex justify-content-between m-5 ">
                                                                <div>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class="text-right" >
                                                                    <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                                            <div class="item">
                                                <div class="card sellerFullCard">
                                                    <div class="card-header">
                                                        <div class=" d-flex justify-content-between ">
                                                            <h5 class="text-left">Items</h5>
                                                            <h5 class="text-right">Quantity</h5>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light card-body">
                                                        
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                                            <div class="text-right">3</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                                            <div class="text-right">5</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">National Corn Flour - 300g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Neal Bansari Paan 250g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class=" d-flex justify-content-between ">
                                                            <p>Total Items</p>
                                                            <p class="text-right">10</p>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div>
                                                                <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                                    View Order
                                                                </button>
                                                            </div>
                                                            <div >
                                                                <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Item Name</th>
                                                                        <th scope="col">Quantity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Aashirvaad Atta (select) -5kg</td>
                                                                        <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>TRS Red Kideny Beans - 500g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>TRS Yellow Split Peas -2kg</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Khanam Veg Ghee - 1kg</td>
                                                                        <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>National Corn Flour - 300g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">6</th>
                                                                        <td>Neal Bansari Paan - 250g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">7</th>
                                                                        <td>Everest Tikhalal Powder chilli - 250g</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h4>total</h4>
                                                                    <h4>7 Items</h4>
                                                                </div>
                                                            </div>
                                                            <div class=" d-flex justify-content-between m-5 ">
                                                                <div>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class="text-right" >
                                                                    <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                                            <div class="item">
                                                <div class="card sellerFullCard">
                                                    <div class="card-header">
                                                        <div class=" d-flex justify-content-between ">
                                                            <h5 class="text-left">Items</h5>
                                                            <h5 class="text-right">Quantity</h5>
                                                        </div>
                                                    </div>
                                                    <div class="bg-light card-body">
                                                        
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                                            <div class="text-right">3</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                                            <div class="text-right">5</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">National Corn Flour - 300g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Neal Bansari Paan 250g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                                            <div class="text-right">2</div>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                                            <div class="text-right">1</div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class=" d-flex justify-content-between ">
                                                            <p>Total Items</p>
                                                            <p class="text-right">10</p>
                                                        </div>
                                                        <div class=" d-flex justify-content-between ">
                                                            <div>
                                                                <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                                    View Order
                                                                </button>
                                                            </div>
                                                            <div >
                                                                <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                                                </div>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Item Name</th>
                                                                        <th scope="col">Quantity</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Aashirvaad Atta (select) -5kg</td>
                                                                        <td>2</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>TRS Red Kideny Beans - 500g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>TRS Yellow Split Peas -2kg</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">4</th>
                                                                        <td>Khanam Veg Ghee - 1kg</td>
                                                                        <td>5</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">5</th>
                                                                        <td>National Corn Flour - 300g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">6</th>
                                                                        <td>Neal Bansari Paan - 250g</td>
                                                                        <td>1</td>
                                                                        </tr>
                                                                        <tr>
                                                                        <th scope="row">7</th>
                                                                        <td>Everest Tikhalal Powder chilli - 250g</td>
                                                                        <td>3</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                <div class=" d-flex justify-content-between ">
                                                                    <h4>total</h4>
                                                                    <h4>7 Items</h4>
                                                                </div>
                                                            </div>
                                                            <div class=" d-flex justify-content-between m-5 ">
                                                                <div>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                                <div class="text-right" >
                                                                    <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
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
            </div>
            <!-- END SECTION SHOP FOR SPECIAL OFFER ON RECIPES -->
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
                                        src="assets/images/shop_banner_img01.jpg"
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

            <!-- START SECTION SHOP FOR RECIPE -->
            <div class="section small_pb">
              <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_tab_header">
                            <div class="heading_s2">
                                <h2>RECIPES PRODUCTS</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                        <div class="item">
                            <div class="card sellerFullCard">
                                <div class="card-header">
                                    <div class=" d-flex justify-content-between ">
                                        <h5 class="text-left">Items</h5>
                                        <h5 class="text-right">Quantity</h5>
                                    </div>
                                </div>
                                <div class="bg-light card-body">
                                    
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                        <div class="text-right">3</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                        <div class="text-right">5</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">National Corn Flour - 300g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Neal Bansari Paan 250g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class=" d-flex justify-content-between ">
                                        <p>Total Items</p>
                                        <p class="text-right">10</p>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div>
                                            <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                View Order
                                            </button>
                                        </div>
                                        <div >
                                            <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class=" d-flex justify-content-between ">
                                                <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Item Name</th>
                                                    <th scope="col">Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">1</th>
                                                    <td>Aashirvaad Atta (select) -5kg</td>
                                                    <td>2</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">2</th>
                                                    <td>TRS Red Kideny Beans - 500g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">3</th>
                                                    <td>TRS Yellow Split Peas -2kg</td>
                                                    <td>3</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">4</th>
                                                    <td>Khanam Veg Ghee - 1kg</td>
                                                    <td>5</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">5</th>
                                                    <td>National Corn Flour - 300g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">6</th>
                                                    <td>Neal Bansari Paan - 250g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">7</th>
                                                    <td>Everest Tikhalal Powder chilli - 250g</td>
                                                    <td>3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <div class=" d-flex justify-content-between ">
                                                <h4>total</h4>
                                                <h4>7 Items</h4>
                                            </div>
                                        </div>
                                        <div class=" d-flex justify-content-between m-5 ">
                                            <div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            <div class="text-right" >
                                                <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                        <div class="item">
                            <div class="card sellerFullCard">
                                <div class="card-header">
                                    <div class=" d-flex justify-content-between ">
                                        <h5 class="text-left">Items</h5>
                                        <h5 class="text-right">Quantity</h5>
                                    </div>
                                </div>
                                <div class="bg-light card-body">
                                    
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                        <div class="text-right">3</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                        <div class="text-right">5</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">National Corn Flour - 300g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Neal Bansari Paan 250g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class=" d-flex justify-content-between ">
                                        <p>Total Items</p>
                                        <p class="text-right">10</p>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div>
                                            <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                View Order
                                            </button>
                                        </div>
                                        <div >
                                            <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class=" d-flex justify-content-between ">
                                                <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Item Name</th>
                                                    <th scope="col">Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">1</th>
                                                    <td>Aashirvaad Atta (select) -5kg</td>
                                                    <td>2</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">2</th>
                                                    <td>TRS Red Kideny Beans - 500g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">3</th>
                                                    <td>TRS Yellow Split Peas -2kg</td>
                                                    <td>3</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">4</th>
                                                    <td>Khanam Veg Ghee - 1kg</td>
                                                    <td>5</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">5</th>
                                                    <td>National Corn Flour - 300g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">6</th>
                                                    <td>Neal Bansari Paan - 250g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">7</th>
                                                    <td>Everest Tikhalal Powder chilli - 250g</td>
                                                    <td>3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <div class=" d-flex justify-content-between ">
                                                <h4>total</h4>
                                                <h4>7 Items</h4>
                                            </div>
                                        </div>
                                        <div class=" d-flex justify-content-between m-5 ">
                                            <div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            <div class="text-right" >
                                                <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                        <div class="item">
                            <div class="card sellerFullCard">
                                <div class="card-header">
                                    <div class=" d-flex justify-content-between ">
                                        <h5 class="text-left">Items</h5>
                                        <h5 class="text-right">Quantity</h5>
                                    </div>
                                </div>
                                <div class="bg-light card-body">
                                    
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                        <div class="text-right">3</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                        <div class="text-right">5</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">National Corn Flour - 300g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Neal Bansari Paan 250g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class=" d-flex justify-content-between ">
                                        <p>Total Items</p>
                                        <p class="text-right">10</p>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div>
                                            <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                View Order
                                            </button>
                                        </div>
                                        <div >
                                            <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class=" d-flex justify-content-between ">
                                                <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Item Name</th>
                                                    <th scope="col">Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">1</th>
                                                    <td>Aashirvaad Atta (select) -5kg</td>
                                                    <td>2</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">2</th>
                                                    <td>TRS Red Kideny Beans - 500g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">3</th>
                                                    <td>TRS Yellow Split Peas -2kg</td>
                                                    <td>3</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">4</th>
                                                    <td>Khanam Veg Ghee - 1kg</td>
                                                    <td>5</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">5</th>
                                                    <td>National Corn Flour - 300g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">6</th>
                                                    <td>Neal Bansari Paan - 250g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">7</th>
                                                    <td>Everest Tikhalal Powder chilli - 250g</td>
                                                    <td>3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <div class=" d-flex justify-content-between ">
                                                <h4>total</h4>
                                                <h4>7 Items</h4>
                                            </div>
                                        </div>
                                        <div class=" d-flex justify-content-between m-5 ">
                                            <div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            <div class="text-right" >
                                                <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                        <div class="item">
                            <div class="card sellerFullCard">
                                <div class="card-header">
                                    <div class=" d-flex justify-content-between ">
                                        <h5 class="text-left">Items</h5>
                                        <h5 class="text-right">Quantity</h5>
                                    </div>
                                </div>
                                <div class="bg-light card-body">
                                    
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                        <div class="text-right">3</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                        <div class="text-right">5</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">National Corn Flour - 300g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Neal Bansari Paan 250g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class=" d-flex justify-content-between ">
                                        <p>Total Items</p>
                                        <p class="text-right">10</p>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div>
                                            <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                View Order
                                            </button>
                                        </div>
                                        <div >
                                            <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class=" d-flex justify-content-between ">
                                                <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Item Name</th>
                                                    <th scope="col">Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">1</th>
                                                    <td>Aashirvaad Atta (select) -5kg</td>
                                                    <td>2</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">2</th>
                                                    <td>TRS Red Kideny Beans - 500g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">3</th>
                                                    <td>TRS Yellow Split Peas -2kg</td>
                                                    <td>3</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">4</th>
                                                    <td>Khanam Veg Ghee - 1kg</td>
                                                    <td>5</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">5</th>
                                                    <td>National Corn Flour - 300g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">6</th>
                                                    <td>Neal Bansari Paan - 250g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">7</th>
                                                    <td>Everest Tikhalal Powder chilli - 250g</td>
                                                    <td>3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <div class=" d-flex justify-content-between ">
                                                <h4>total</h4>
                                                <h4>7 Items</h4>
                                            </div>
                                        </div>
                                        <div class=" d-flex justify-content-between m-5 ">
                                            <div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            <div class="text-right" >
                                                <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                        <div class="item">
                            <div class="card sellerFullCard">
                                <div class="card-header">
                                    <div class=" d-flex justify-content-between ">
                                        <h5 class="text-left">Items</h5>
                                        <h5 class="text-right">Quantity</h5>
                                    </div>
                                </div>
                                <div class="bg-light card-body">
                                    
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                        <div class="text-right">3</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                        <div class="text-right">5</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">National Corn Flour - 300g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Neal Bansari Paan 250g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class=" d-flex justify-content-between ">
                                        <p>Total Items</p>
                                        <p class="text-right">10</p>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div>
                                            <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                View Order
                                            </button>
                                        </div>
                                        <div >
                                            <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class=" d-flex justify-content-between ">
                                                <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Item Name</th>
                                                    <th scope="col">Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">1</th>
                                                    <td>Aashirvaad Atta (select) -5kg</td>
                                                    <td>2</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">2</th>
                                                    <td>TRS Red Kideny Beans - 500g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">3</th>
                                                    <td>TRS Yellow Split Peas -2kg</td>
                                                    <td>3</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">4</th>
                                                    <td>Khanam Veg Ghee - 1kg</td>
                                                    <td>5</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">5</th>
                                                    <td>National Corn Flour - 300g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">6</th>
                                                    <td>Neal Bansari Paan - 250g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">7</th>
                                                    <td>Everest Tikhalal Powder chilli - 250g</td>
                                                    <td>3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <div class=" d-flex justify-content-between ">
                                                <h4>total</h4>
                                                <h4>7 Items</h4>
                                            </div>
                                        </div>
                                        <div class=" d-flex justify-content-between m-5 ">
                                            <div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            <div class="text-right" >
                                                <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                        <div class="item">
                            <div class="card sellerFullCard">
                                <div class="card-header">
                                    <div class=" d-flex justify-content-between ">
                                        <h5 class="text-left">Items</h5>
                                        <h5 class="text-right">Quantity</h5>
                                    </div>
                                </div>
                                <div class="bg-light card-body">
                                    
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                        <div class="text-right">3</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                        <div class="text-right">5</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">National Corn Flour - 300g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Neal Bansari Paan 250g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class=" d-flex justify-content-between ">
                                        <p>Total Items</p>
                                        <p class="text-right">10</p>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div>
                                            <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                View Order
                                            </button>
                                        </div>
                                        <div >
                                            <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class=" d-flex justify-content-between ">
                                                <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Item Name</th>
                                                    <th scope="col">Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">1</th>
                                                    <td>Aashirvaad Atta (select) -5kg</td>
                                                    <td>2</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">2</th>
                                                    <td>TRS Red Kideny Beans - 500g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">3</th>
                                                    <td>TRS Yellow Split Peas -2kg</td>
                                                    <td>3</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">4</th>
                                                    <td>Khanam Veg Ghee - 1kg</td>
                                                    <td>5</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">5</th>
                                                    <td>National Corn Flour - 300g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">6</th>
                                                    <td>Neal Bansari Paan - 250g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">7</th>
                                                    <td>Everest Tikhalal Powder chilli - 250g</td>
                                                    <td>3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <div class=" d-flex justify-content-between ">
                                                <h4>total</h4>
                                                <h4>7 Items</h4>
                                            </div>
                                        </div>
                                        <div class=" d-flex justify-content-between m-5 ">
                                            <div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            <div class="text-right" >
                                                <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                        <div class="item">
                            <div class="card sellerFullCard">
                                <div class="card-header">
                                    <div class=" d-flex justify-content-between ">
                                        <h5 class="text-left">Items</h5>
                                        <h5 class="text-right">Quantity</h5>
                                    </div>
                                </div>
                                <div class="bg-light card-body">
                                    
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                        <div class="text-right">3</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                        <div class="text-right">5</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">National Corn Flour - 300g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Neal Bansari Paan 250g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class=" d-flex justify-content-between ">
                                        <p>Total Items</p>
                                        <p class="text-right">10</p>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div>
                                            <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                View Order
                                            </button>
                                        </div>
                                        <div >
                                            <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class=" d-flex justify-content-between ">
                                                <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Item Name</th>
                                                    <th scope="col">Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">1</th>
                                                    <td>Aashirvaad Atta (select) -5kg</td>
                                                    <td>2</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">2</th>
                                                    <td>TRS Red Kideny Beans - 500g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">3</th>
                                                    <td>TRS Yellow Split Peas -2kg</td>
                                                    <td>3</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">4</th>
                                                    <td>Khanam Veg Ghee - 1kg</td>
                                                    <td>5</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">5</th>
                                                    <td>National Corn Flour - 300g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">6</th>
                                                    <td>Neal Bansari Paan - 250g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">7</th>
                                                    <td>Everest Tikhalal Powder chilli - 250g</td>
                                                    <td>3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <div class=" d-flex justify-content-between ">
                                                <h4>total</h4>
                                                <h4>7 Items</h4>
                                            </div>
                                        </div>
                                        <div class=" d-flex justify-content-between m-5 ">
                                            <div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            <div class="text-right" >
                                                <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">  
                        <div class="item">
                            <div class="card sellerFullCard">
                                <div class="card-header">
                                    <div class=" d-flex justify-content-between ">
                                        <h5 class="text-left">Items</h5>
                                        <h5 class="text-right">Quantity</h5>
                                    </div>
                                </div>
                                <div class="bg-light card-body">
                                    
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Yellow Split Peas -2kg</div>
                                        <div class="text-right">3</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Khanum Veg Ghee - 1kg</div>
                                        <div class="text-right">5</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">National Corn Flour - 300g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Neal Bansari Paan 250g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Everest Tikhalal Chilli Powder</div>
                                        <div class="text-right">1</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">Aashirvaad Atta (Select) -5 kg</div>
                                        <div class="text-right">2</div>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div class="sellerCard">TRS Red Kideny Beans - 500g</div>
                                        <div class="text-right">1</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class=" d-flex justify-content-between ">
                                        <p>Total Items</p>
                                        <p class="text-right">10</p>
                                    </div>
                                    <div class=" d-flex justify-content-between ">
                                        <div>
                                            <button type="button" style="padding: 5px;" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                                View Order
                                            </button>
                                        </div>
                                        <div >
                                            <a href="{{route('sellerOrders')}}"  style="padding: 5px;" class="btn btn-primary">Accept</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class=" d-flex justify-content-between ">
                                                <h5 class="modal-title" id="exampleModalLabel">Order By (Customer Name) </h5>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Item Name</th>
                                                    <th scope="col">Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">1</th>
                                                    <td>Aashirvaad Atta (select) -5kg</td>
                                                    <td>2</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">2</th>
                                                    <td>TRS Red Kideny Beans - 500g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">3</th>
                                                    <td>TRS Yellow Split Peas -2kg</td>
                                                    <td>3</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">4</th>
                                                    <td>Khanam Veg Ghee - 1kg</td>
                                                    <td>5</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">5</th>
                                                    <td>National Corn Flour - 300g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">6</th>
                                                    <td>Neal Bansari Paan - 250g</td>
                                                    <td>1</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">7</th>
                                                    <td>Everest Tikhalal Powder chilli - 250g</td>
                                                    <td>3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <div class=" d-flex justify-content-between ">
                                                <h4>total</h4>
                                                <h4>7 Items</h4>
                                            </div>
                                        </div>
                                        <div class=" d-flex justify-content-between m-5 ">
                                            <div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            <div class="text-right" >
                                                <a href="{{route('sellerOrders')}}"   class="btn btn-primary">Accept Order</a>
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
            <!-- END SECTION SHOP FOR RECIPE -->


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