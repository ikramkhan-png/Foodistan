<!-- START HEADER -->
        <header class="header_wrap">
            <div class="top-header d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="header_topbar_info">
                                <div class="header_offer">
                                    <span>Free Ground Shipping Over $250</span>
                                </div>
                                <div class="download_wrap">
                                    <span class="mr-3">Download App</span>
                                    <ul
                                        class="icon_list text-center text-lg-left"
                                    >
                                        <li>
                                            <a href="#"
                                                ><i class="fab fa-apple"></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i class="fab fa-android"></i
                                            ></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                ><i class="fab fa-windows"></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div
                                class="d-flex align-items-center justify-content-center justify-content-md-end"
                            >
                                <div class="lng_dropdown">
                                    <select
                                        name="countries"
                                        class="custome_select"
                                    >
                                        <option
                                            value="en"
                                            data-image="{{
                                                asset('/assets/images/eng.png')
                                            }}"
                                            data-title="English"
                                        >
                                            English
                                        </option>
                                        <option
                                            value="fn"
                                            data-image="{{
                                                asset('/assets/images/fn.png')
                                            }}"
                                            data-title="France"
                                        >
                                            France
                                        </option>
                                        <option
                                            value="us"
                                            data-image="{{
                                                asset('/assets/images/us.png')
                                            }}"
                                            data-title="United States"
                                        >
                                            United States
                                        </option>
                                    </select>
                                </div>
                                <div class="ml-3">
                                    <select
                                        name="countries"
                                        class="custome_select"
                                    >
                                        <option value="USD" data-title="USD">
                                            USD
                                        </option>
                                        <option value="EUR" data-title="EUR">
                                            EUR
                                        </option>
                                        <option value="GBR" data-title="GBR">
                                            GBR
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle-header dark_skin">
                <div class="container">
                    <div class="nav_block">
                        <a class="navbar-brand" href="#">
                            <img
                                class="logo_light"
                                src="{{
                                    asset('/assets/images/logo_light.png')
                                }}"
                                alt="logo"
                                
                            />
                            <img
                                class="logo_dark"
                                src="{{
                                    asset('/assets/images/logo_dark (2).png')
                                }}"
                                alt="logo"
                                style="height: 100px; width: 200px;"
                            />
                        </a>
                        <div class="contact_phone order-md-last">
                            <i class="linearicons-phone-wave"></i>
                            <span>123-456-7689</span>
                        </div>
                        <div class="product_search_form">
                            <form>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="custom_select">
                                            <select class="first_null">
                                                <option value="">
                                                    All Category
                                                </option>
                                                <option value="Dresses">
                                                    Grocery
                                                </option>
                                                <option value="Shirt-Tops">
                                                    Frozen Foods
                                                </option>
                                                <option value="T-Shirt">
                                                    Beavrages
                                                </option>
                                                <option value="Pents">
                                                    Dairy
                                                </option>
                                                <option value="Jeans">
                                                    Household
                                                </option><option value="Jeans">
                                                    Baby
                                                </option><option value="Jeans">
                                                    Health and Beauty
                                                </option><option value="Jeans">
                                                    Kitchen
                                                </option><option value="Fresh fruits">
                                                    Fresh fruits
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <input
                                        class="form-control"
                                        placeholder="Search Product..."
                                        required=""
                                        type="text"
                                    />
                                    <button type="submit" class="search_btn">
                                        <i class="linearicons-magnifier"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="bottom_header light_skin main_menu_uppercase bg_dark mb-4"
            >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-10 col-sm-8 col-12">
                            <nav class="navbar navbar-expand-lg">
                                <button
                                    class="navbar-toggler side_navbar_toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarSidetoggle"
                                    aria-expanded="false"
                                >
                                    <span class="ion-android-menu"></span>
                                </button>
                                <div
                                    class="collapse navbar-collapse mobile_side_menu"
                                    id="navbarSidetoggle"
                                >
                                    <ul class="navbar-nav">
                                       <li>
                                            <a
                                                class="nav-link nav_item active"
                                                href="{{route('sellerHome')}}"
                                                >Home</a
                                            >
                                        </li>
                                        <li class="dropdown">
                                            <a
                                                class="dropdown-toggle nav-link"
                                                href="#"
                                                data-toggle="dropdown"
                                                >Pages</a
                                            >
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li>
                                                        <a
                                                            class="dropdown-item nav-link nav_item"
                                                            href="{{route('groceries')}}"
                                                            >GROCERY</a
                                                        >
                                                    </li><li>
                                                        <a
                                                            class="dropdown-item nav-link nav_item"
                                                            href="{{route('recipes')}}"
                                                            >PAKISTANI RECIPES</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item nav-link nav_item"
                                                            href="{{route('specialOffer')}}"
                                                            >Special Offers</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item nav-link nav_item"
                                                            href="{{route('about')}}"
                                                            >About Us</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item nav-link nav_item"
                                                            href="{{route('contact')}}"
                                                            >Contact Us</a
                                                        >
                                                    </li>
                                                    
                                                    <li>
                                                        <a
                                                            class="dropdown-item nav-link nav_item"
                                                            href="login.html"
                                                            >Login</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item nav-link nav_item"
                                                            href="signup.html"
                                                            >Register</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item nav-link nav_item"
                                                            href="term-condition.html"
                                                            >Terms and
                                                            Conditions</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a
                                                class="nav-link nav_item"
                                                href="{{route('sellerGrocery')}}"
                                                >Grocery</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                class="nav-link nav_item"
                                                href="{{route('sellerRecipe')}}"
                                                >Pakikstani Recipe</a
                                            >
                                        </li>
                                            
                                        <li>
                                            <a
                                                class="nav-link nav_item"
                                                href="{{route('about')}}"
                                                >About Us</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                class="nav-link nav_item"
                                                href="{{route('contact')}}"
                                                >Contact Us</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item dropdown user-menu">
                                      <a
                                          href="#"
                                          class="nav-link dropdown-toggle"
                                          data-toggle="dropdown"
                                      >
                                          <img
                                              src="assets/images/user02.png"
                                              style="width: 30px; height: 30px; border-radius: 50%;"
                                              class="user-image img-circle elevation-2"
                                              alt=""
                                          />

                                          <span
                                              class="d-none d-md-inline"
                                              >User Name</span
                                          >
                                      </a>
                                      <ul
                                          class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                                          
                                      >
                                          <!-- User image -->
                                          <li class="user-header m-2">
                                            <div class="text-center">
                                              <img style="width: 70px; height: 70px; border-radius: 50%;"
                                                  src="assets/images/user02.png"
                                                  alt="User Image"
                                              />
                                              
                                            </div>
                                            <div>
                                              <p>
                                                  User Name
                                                  <small
                                                      >Member since
                                                      jan,2022</small
                                                  >
                                              </p>
                                                <a href="{{route('home')}}">Login as a Customer!</a>
                                              </div>
                                              <div>
                                                <a href="#"
                                                  >Profile</a
                                              >
                                              </div>
                                          </li>
                                          <!-- Menu Footer-->
                                          <li class="user-footer m-2 mt-5">
                                            <div class=" d-flex justify-content-between ">
                                                <div>
                                                  <a href="#" style="padding: 5px;" class="btn btn-info">Dashboard</a>
                                                </div>
                                                <div class="text-right">
                                                    <a
                                                    style="padding: 5px;"
                                                    href="#"
                                                    class="btn btn-success  float-right"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                      >
                                                          Sign out
                                                    </a>
                                                      <form
                                                          id="logout-form"
                                                          action=""
                                                          method="POST"
                                                          class="d-none"
                                                      >
                                                      </form>
                                                 </div>
                                            </div>
                                              
                                              
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                                <div class="pr_search_icon">
                                    <a
                                        href="javascript:void(0);"
                                        class="nav-link pr_search_trigger"
                                        ><i class="linearicons-magnifier"></i
                                    ></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER -->