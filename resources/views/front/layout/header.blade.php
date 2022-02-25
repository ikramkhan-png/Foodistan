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
                                                href="{{route('home')}}"
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
                                        <li class="dropdown dropdown-mega-menu">
                                            <a
                                                class="dropdown-toggle nav-link"
                                                href="{{route('groceries')}}"
                                                data-toggle="dropdown"
                                                >Grocery</a
                                            >
                                            <div class="dropdown-menu">
                                                <ul class="mega-menu d-lg-flex">
                                                    <li
                                                        class="mega-menu-col col-lg-3"
                                                    >
                                                        <ul>
                                                            <li
                                                                class="dropdown-header"
                                                            >
                                                                Dal, Lentils & Beans
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Channa Dal</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Kabuli Chana</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Kala Channa</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Kala Channa</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Masoor Dal</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Mong Dal</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Rajma(kidney Beans)</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Toor Dal</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Urad Dal/Whole</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="mega-menu-col col-lg-3"
                                                    >
                                                        <ul>
                                                            <li
                                                                class="dropdown-header"
                                                            >
                                                                Atta & Other Flours
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Besan (Gram Flour)</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Pearl Milet </a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Ragi </a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Sooji & Rava</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Wheat Flours (Atta)</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Rice Flours</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Other Flours</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="mega-menu-col col-lg-3"
                                                    >
                                                        <ul>
                                                            <li
                                                                class="dropdown-header"
                                                            >
                                                               Rice & Other Grains
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Basmati</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Brown Rice</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Poha (Flattened Rice)</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Sona Masuri</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Brown Rice</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Puffed Rice</a
                                                                >
                                                            </li><li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Sela Rice</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="mega-menu-col col-lg-3"
                                                    >
                                                        <ul>
                                                            <li
                                                                class="dropdown-header"
                                                            >
                                                                Spices & Masalas
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >powdered Spices </a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Whole Spices</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Seeds & Herbs</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="mega-menu-col col-lg-3"
                                                    >
                                                        <ul>
                                                            <li
                                                                class="dropdown-header"
                                                            >
                                                                Oils, Ghee & Vanaspati
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Ghee</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Canola</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Coconut</a
                                                                >
                                                            </li>
                                                            <li>
                                                                <a
                                                                    class="dropdown-item nav-link nav_item"
                                                                    href="#"
                                                                    >Mastard</a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown">
                                            <a
                                                class="dropdown-toggle nav-link"
                                                href="#"
                                                data-toggle="dropdown"
                                                >Pakistani Recipes</a
                                            >
                                            <div 
                                                class="dropdown-menu "
                                            >
                                                <ul>
                                                    <li>
                                                        <a
                                                            class="dropdown-item menu-link dropdown-toggler"
                                                            href="#"
                                                            >VEGETRAIN</a
                                                        >
                                                        <div
                                                            class="dropdown-menu"
                                                        >
                                                            <ul>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Aloo Chana Chaat recipe | Easy and Quick</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Bhindi Recipe Pakistani| Okra Masala</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Kadhi Pakora Recipe</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Steamed Chicken Roast, Punjabi Style</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Veg Fried Rice, Indo-Chinese style</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#e"
                                                                        >Fried Eggplant Fries recipe, so easy!</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Hummus recipe without Tahini</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Aloo Gobi Matar (Indian Cauliflower Curry)</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Masoor Dal recipe | Easy Peasy delicious</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item menu-link dropdown-toggler"
                                                            href="#"
                                                            >RICE RECIPES</a
                                                        >
                                                        <div
                                                            class="dropdown-menu"
                                                        >
                                                            <ul>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Veg Fried Rice, Indo-Chinese style</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="blog-masonry-four-columns.html"
                                                                        >4
                                                                        columns</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Singaporean Rice |Easy and Delicious</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Daal Chawal Palidu, Lentil & Lamb Rice</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item menu-link dropdown-toggler"
                                                            href="#"
                                                            >CASSEROLE</a
                                                        >
                                                        <div
                                                            class="dropdown-menu"
                                                        >
                                                            <ul>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href=""
                                                                        >Om Ali, The Egyptian Bread Pudding Dessert</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Eggless Strawberry Mousse with Jelly</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Shepherd's Pie Recipe | Video Tutorial</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Bread Lasagna Pie Recipe</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Mincemeat pie recipe (Lagan ki Seekh) recipe</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item menu-link dropdown-toggler"
                                                            href="#"
                                                            >BOHRA</a
                                                        >
                                                        <div
                                                            class="dropdown-menu"
                                                        >
                                                            <ul>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Boondi Raita recipe, Next Level Delicious</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Aloo Keema Patties / Cutlets, Stuffed Potato balls</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <a
                                                            class="dropdown-item menu-link dropdown-toggler"
                                                            href="#"
                                                            >DESSERT RECIPES</a
                                                        >
                                                        <div
                                                            class="dropdown-menu"
                                                        >
                                                            <ul>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Dulce De Leche Mousse Recipe</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Homemade Salted Caramel Sauce Recipe</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="dropdown-item menu-link dropdown-toggler"
                                                            href="#"
                                                            >SALADS AND CHUTNEYS</a
                                                        >
                                                        <div
                                                            class="dropdown-menu"
                                                        >
                                                            <ul>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Boondi Raita recipe, Next Level Delicious</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="dropdown-item nav-link nav_item"
                                                                        href="#"
                                                                        >Green Chutney Recipe, Cilantro / Mint Chutney</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
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
                                <ul
                                    class="navbar-nav attr-nav align-items-center"
                                >
                                    <li>
                                        <a
                                            class="nav-link nav_item"
                                            href="{{route('orders')}}"
                                            >My Orders</a
                                        >
                                    </li>
                                    <li>
                                        <a href="{{route('wishlist')}}" class="nav-link"
                                            ><i class="linearicons-heart"></i
                                            ><span class="wishlist_count"
                                                >3</span
                                            ></a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="nav-link cart_trigger"
                                            href="{{route('cart')}}"
                                            ><i class="linearicons-cart"></i
                                            ><span class="cart_count"
                                                >2</span
                                            ></a
                                        >
                                    </li>
                                    
                                    <li class="nav-item dropdown user-menu">
                                      <a
                                          href="#"
                                          class="nav-link dropdown-toggle"
                                          data-toggle="dropdown"
                                      >
                                          <img
                                              src="assets/images/user01.jpg"
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
                                                  src="assets/images/user01.jpg"
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
                                                <a href="{{route('sellerHome')}}">Login as a Seller!</a>
                                              </div>
                                          </li>
                                          <!-- Menu Footer-->
                                          <li class="user-footer mt-5 m-2">  
                                            <div class="text-right">
                                                <a
                                                style="padding: 5px;"
                                                href="#"
                                                class="btn btn-danger  float-right"
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