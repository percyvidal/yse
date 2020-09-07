<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}}</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('template/plugins/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('template/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/plugins/selectbox/select_option1.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('template/plugins/rs-plugin/css/settings.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('template/plugins/owl-carousel/owl.carousel.css')}}" media="screen">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

    <!-- CUSTOM CSS -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/css/default.css')}}" id="option_color">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{asset('template/img/favicon.png')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body class="body-wrapper">

    <div class="main-wrapper">

      <!-- HEADER -->
      <div class="header clearfix">

        <!-- TOPBAR -->
        <div class="topBar">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-5 hidden-xs">
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-7 col-xs-12">
                <ul class="list-inline pull-right top-right">
                  <li class="account-login"><span><a data-toggle="modal" href='.html'>Log in</a><small>or</small><a data-toggle="modal" href='#signup'>Create an account</a></span></li>
                  <li class="searchBox">
                    <a href="#"><i class="fa fa-search"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <span class="input-group">
                          <input type="text" class="form-control" placeholder="Search…" aria-describedby="basic-addon2">
                          <button type="submit" class="input-group-addon">Submit</button>
                        </span>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown cart-dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i>$0</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>Item(s) in your cart</li>
                      <li>
                        <a href="single-product.html">
                          <div class="media">
                            <img class="media-left media-object" src="{{asset('template/img/home/cart-items/cart-item-01.jpg')}}" alt="cart-Image">
                            <div class="media-body">
                              <h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="single-product.html">
                          <div class="media">
                            <img class="media-left media-object" src="{{asset('template/img/home/cart-items/cart-item-01.jpg')}}" alt="cart-Image">
                            <div class="media-body">
                              <h5 class="media-heading">INCIDIDUNT UT <br><span>2 X $199</span></h5>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class="btn-group" role="group" aria-label="...">
                          <button type="button" class="btn btn-default" onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='cart-page.html';" data-cf-modified-d741ec9552f318f851bfbfce-="">Shopping Cart</button>
                          <button type="button" class="btn btn-default" onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='checkout-step-1.html';" data-cf-modified-d741ec9552f318f851bfbfce-="">Checkout</button>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- NAVBAR -->
        <nav class="navbar navbar-main navbar-default" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img src="{{asset('template/img/logo.png')}}" alt="logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <li><a href="index.html">Home Default</a></li>
                    <li><a href="index-v2.html">Home Classic</a></li>
                    <li><a href="index-v3.html">Home Deals</a></li>
                    <li><a href="index-v4.html">Home Mega</a></li>
                  </ul>
                </li>
                <li class="dropdown megaDropMenu">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">Shop</b></a>
                  <ul class="dropdown-menu row">
                    <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li>Products Grid View</li>
                        <li><a href="product-grid-left-sidebar.html">Products Sidebar Left</a></li>
                        <li><a href="product-grid-right-sidebar.html">Products Sidebar Right</a></li>
                        <li><a href="product-grid-3-col-filter.html">Products 3 Columns V1</a></li>
                        <li><a href="product-grid-3-col.html">Products 3 Columns V2</a></li>
                        <li><a href="product-grid-4-col.html">Products 4 Columns</a></li>
                      </ul>
                    </li>
                    <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li>Products List View</li>
                        <li><a href="product-list-left-sidebar.html">Products Sidebar Left</a></li>
                        <li><a href="product-list-right-sidebar.html">Products Sidebar Right</a></li>
                        <li class="listHeading">Others</li>
                        <li><a href="single-product.html">Single Product</a></li>
                        <li><a href="cart-page.html">Cart Page</a></li>
                      </ul>
                    </li>
                    <li class="col-sm-3 col-xs-12">
                      <ul class="list-unstyled">
                        <li>Checkout</li>
                        <li><a href="checkout-step-1.html">Step 1 - Address</a></li>
                        <li><a href="checkout-step-2.html">Step 2 - Shipping</a></li>
                        <li><a href="checkout-step-3.html">Step 3 - Payment</a></li>
                        <li><a href="checkout-step-4.html">Step 4 - Payment</a></li>
                        <li><a href="checkout-complete.html">Order Complete</a></li>
                      </ul>
                    </li>
                    <li class="col-sm-3 col-xs-12">
                      <a href="#" class="menu-photo"><img src="img/menu-photo.jpg" alt="menu-img"></a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">pages</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="signup.html">Register</a></li>
                    <li><a href="signup-login.html">Register or Login</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="lost-password.html">Password Recovery</a></li>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="terms-and-conditions.html">Terms &amp; Conditions</a></li>
                    <li><a href="404.html">404 Not Found</a></li>

                    <li><a href="coming-soon.html">Coming Soon</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">blog</a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                    <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                    <li><a href="blog-fullwidth.html">Full Width</a></li>
                    <li><a href="blog-single-fullwidth.html">Single Post</a></li>
                    <li><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                    <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                  </ul>
                </li>
                <li class="dropdown active">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li class="active"><a href="account-dashboard.html">Dashboard</a></li>
                    <li><a href="account-profile.html">Profile</a></li>
                    <li><a href="account-all-orders.html">All Orders</a></li>
                    <li><a href="account-single-order.html">Single Order</a></li>
                    <li><a href="account-wishlist.html">Wishlist</a></li>
                    <li><a href="account-address.html">Address</a></li>
                  </ul>
                </li>
              <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Components</a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="accrodion-toggle.html">Accrodion-Toggle</a></li>
                    <li><a href="tab-dropdown.html">Tab-Dropdown</a></li>
                    <li><a href="alert-label-badges.html">Alert-Label-Badges</a></li>
                    <li><a href="progress-bar.html">Progress Bar</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="forms.html">Forms</a></li>
                    <li><a href="list-panel.html">Listgroups Panel</a></li>
                    <li><a href="tooltip-pagination.html">Tooltip Pagination</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="responsive-embed.html">Responsive Embed</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
      </div>

      <!-- BANNER -->
      <div class="bannercontainer bannerV1">
        <div class="fullscreenbanner-container">
          <div class="fullscreenbanner">
            <ul>
              <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
                <img src="{{asset('template/img/home/banner-slider/slider-bg.jpg')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                <div class="slider-caption slider-captionV1 container">

                  <div class="tp-caption rs-caption-1 sft start"
                    data-hoffset="0"
                    data-x="370"
                    data-y="54"
                    data-speed="800"
                    data-start="1500"
                    data-easing="Back.easeInOut"
                    data-endspeed="300" >
                    <img src="{{asset('template/img/home/banner-slider/shoe1.png')}}" alt="slider-image" style="width: 781px; height: 416px;">
                  </div>

                  <div class="tp-caption rs-caption-2 sft"
                    data-hoffset="0"
                    data-y="119"
                    data-speed="800"
                    data-start="2000"
                    data-easing="Back.easeInOut"
                    data-endspeed="300">
                    Canvas Sneaker
                  </div>

                  <div class="tp-caption rs-caption-3 sft"
                    data-hoffset="0"
                    data-y="185"
                    data-speed="1000"
                    data-start="3000"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    data-endeasing="Power1.easeIn"
                    data-captionhidden="off">
                    Exclusive to <br>
                    BigBag <br>
                    <small>Spring / Summer 2016</small>
                  </div>
                  <div class="tp-caption rs-caption-4 sft"
                    data-hoffset="0"
                    data-y="320"
                    data-speed="800"
                    data-start="3500"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    data-endeasing="Power1.easeIn"
                    data-captionhidden="off">
                    <span class="page-scroll"><a href="#" class="btn primary-btn">Buy Now<i class="glyphicon glyphicon-chevron-right"></i></a></span>
                  </div>
                </div>
              </li>
              <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
                <img src="{{asset('template/img/home/banner-slider/slider-bg.jpg')}}" alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                <div class="slider-caption slider-captionV1 container captionCenter">
                  <div class="tp-caption rs-caption-1 sft start text-center"
                    data-x="center"
                    data-y="228"
                    data-speed="800"
                    data-start="1500"
                    data-easing="Back.easeInOut"
                    data-endspeed="300">
                    <img src="{{asset('template/img/home/banner-slider/shoe2.png')}}" alt="slider-image">
                  </div>

                  <div class="tp-caption rs-caption-2 sft text-center"
                    data-x="center"
                    data-y="50"
                    data-speed="800"
                    data-start="2000"
                    data-easing="Back.easeInOut"
                    data-endspeed="300">
                    Exclusive to BigBag
                  </div>

                  <div class="tp-caption rs-caption-3 sft text-center"
                    data-x="center"
                    data-y="98"
                    data-speed="1000"
                    data-start="3000"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    data-endeasing="Power1.easeIn"
                    data-captionhidden="off">
                    Canvas Sneaker
                  </div>

                  <div class="tp-caption rs-caption-4 sft text-center"
                    data-x="center"
                    data-y="156"
                    data-speed="800"
                    data-start="3500"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    data-endeasing="Power1.easeIn"
                    data-captionhidden="off">
                    <span class="page-scroll"><a href="#" class="btn primary-btn">Buy Now<i class="glyphicon glyphicon-chevron-right"></i></a></span>
                  </div>
                </div>
              </li>
              <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">
                <img src="{{asset('template/img/home/banner-slider/slider-bg.jpg')}}" alt="slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                <div class="slider-caption slider-captionV1 container">
                  <div class="tp-caption rs-caption-1 sft start"
                    data-hoffset="0"
                    data-y="85"
                    data-speed="800"
                    data-start="1500"
                    data-easing="Back.easeInOut"
                    data-endspeed="300">
                    <img src="{{asset('template/img/home/banner-slider/shoe3.png')}}" alt="slider-image">
                  </div>

                  <div class="tp-caption rs-caption-2 sft "
                    data-hoffset="0"
                    data-y="119"
                    data-x="800"
                    data-speed="800"
                    data-start="2000"
                    data-easing="Back.easeInOut"
                    data-endspeed="300">
                    Canvas Sneaker
                  </div>

                  <div class="tp-caption rs-caption-3 sft"
                    data-hoffset="0"
                    data-y="185"
                    data-x="800"
                    data-speed="1000"
                    data-start="3000"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    data-endeasing="Power1.easeIn"
                    data-captionhidden="off">
                    Exclusive to <br>
                    BigBag <br>
                    <small>Spring / Summer 2016</small>
                  </div>

                  <div class="tp-caption rs-caption-4 sft"
                    data-hoffset="0"
                    data-y="320"
                    data-x="800"
                    data-speed="800"
                    data-start="3500"
                    data-easing="Power4.easeOut"
                    data-endspeed="300"
                    data-endeasing="Power1.easeIn"
                    data-captionhidden="off">
                    <span class="page-scroll"><a href="#" class="btn primary-btn">Buy Now<i class="glyphicon glyphicon-chevron-right"></i></a></span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix">
        <div class="container">
          <div class="row featuredCollection margin-bottom">
            <div class="col-xs-12">
              <div class="page-header">
                <h4>Featured Collection</h4>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="thumbnail" onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='single-product.html';" data-cf-modified-d741ec9552f318f851bfbfce-="">
                <div class="imageWrapper">
                  <img src="{{asset('template/img/home/featured-collection/featured-collection-01.jpg')}}" alt="feature-collection-image">
                  <div class="masking"><a href="product-grid-left-sidebar.html" class="btn viewBtn">View Prodocts</a></div>
                </div>
                <div class="caption">
                  <h4>Shoes</h4>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="thumbnail" onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='single-product.html';" data-cf-modified-d741ec9552f318f851bfbfce-="">
                <div class="imageWrapper">
                  <img src="{{asset('template/img/home/featured-collection/featured-collection-02.jpg')}}" alt="feature-collection-image">
                  <div class="masking"><a href="product-grid-left-sidebar.html" class="btn viewBtn">View Prodocts</a></div>
                </div>
                <div class="caption">
                  <h4>Bags</h4>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="thumbnail" onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='single-product.html';" data-cf-modified-d741ec9552f318f851bfbfce-="">
                <div class="imageWrapper">
                  <img src="{{asset('template/img/home/featured-collection/featured-collection-03.jpg')}}" alt="feature-collection-image">
                  <div class="masking"><a href="product-grid-left-sidebar.html" class="btn viewBtn">View Prodocts</a></div>
                </div>
                <div class="caption">
                  <h4>Glasses</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row featuredProducts margin-bottom">
            <div class="col-xs-12">
              <div class="page-header">
                <h4>Featured Products</h4>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="owl-carousel featuredProductsSlider">
                <div class="slide">
                  <div class="productImage clearfix">
                    <img src="{{asset('template/img/home/featured-product/product-01.jpg')}}" alt="featured-product-img">
                    <div class="productMasking">
                      <ul class="list-inline btn-group" role="group">
                        <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="productCaption clearfix">
                    <a href="single-product.html">
                      <h5>Mauris efficitur</h5>
                    </a>
                    <h3>$199</h3>
                  </div>
                </div>
                <div class="slide">
                  <div class="productImage">
                    <img src="{{asset('template/img/home/featured-product/product-02.jpg')}}" alt="featured-product-img">
                    <div class="productMasking">
                      <ul class="list-inline btn-group" role="group">
                        <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="productCaption">
                    <a href="single-product.html">
                      <h5>Nulla facilisi</h5>
                    </a>
                    <h3>$149</h3>
                  </div>
                </div>
                <div class="slide">
                  <div class="productImage">
                    <img src="{{asset('template/img/home/featured-product/product-03.jpg')}}" alt="featured-product-img">
                    <div class="productMasking">
                      <ul class="list-inline btn-group" role="group">
                        <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="productCaption">
                    <a href="single-product.html">
                      <h5>Praesent dui felis</h5>
                    </a>
                    <h3>$79</h3>
                  </div>
                </div>
                <div class="slide">
                  <div class="productImage">
                    <img src="{{asset('template/img/home/featured-product/product-04.jpg')}}" alt="featured-product-img">
                    <div class="productMasking">
                      <ul class="list-inline btn-group" role="group">
                        <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="productCaption">
                    <a href="single-product.html">
                      <h5>Cras eu faucibus</h5>
                    </a>
                    <h3>$109</h3>
                  </div>
                </div>
                <div class="slide">
                  <div class="productImage">
                    <img src="{{asset('template/img/home/featured-product/product-05.jpg')}}" alt="featured-product-img">
                    <div class="productMasking">
                      <ul class="list-inline btn-group" role="group">
                        <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="productCaption">
                    <a href="single-product.html">
                      <h5>Mauris lobortis augue</h5>
                    </a>
                    <h3>$199</h3>
                  </div>
                </div>
                <div class="slide">
                  <div class="productImage">
                    <img src="{{asset('template/img/home/featured-product/product-06.jpg')}}" alt="featured-product-img">
                    <div class="productMasking">
                      <ul class="list-inline btn-group" role="group">
                        <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="productCaption">
                    <a href="single-product.html">
                      <h5>Suspendisse suscipit</h5>
                    </a>
                   <h3>$149</h3>
                  </div>
                </div>
                <div class="slide">
                  <div class="productImage">
                    <img src="{{asset('template/img/home/featured-product/product-07.jpg')}}" alt="featured-product-img">
                    <div class="productMasking">
                      <ul class="list-inline btn-group" role="group">
                        <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="productCaption">
                    <a href="single-product.html">
                      <h5>Praesent a augue</h5>
                    </a>
                    <h3>$79</h3>
                  </div>
                </div>
                <div class="slide">
                  <div class="productImage">
                    <img src="{{asset('template/img/home/featured-product/product-09.jpg')}}" alt="featured-product-img">
                    <div class="productMasking">
                      <ul class="list-inline btn-group" role="group">
                        <li><a data-toggle="modal" href=".html" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                        <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a data-toggle="modal" href="-2.html" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="productCaption">
                    <a href="single-product.html">
                      <h5>Cras vel augue</h5>
                    </a>
                    <h3>$109</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row latestArticles">
            <div class="col-xs-12">
              <div class="page-header">
                <h4>Latest Articles</h4>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="thumbnail">
                <h5><a href="blog-single-right-sidebar.html">Donec egestas tortor quis mattis</a></h5>
                <span class="meta">July 16, 2016 by <a href="#">Abdus</a></span>
                <a href="blog-single-right-sidebar.html"><img src="img/home/articles/articles-01.jpg" alt="article-image"></a>
                <div class="caption">
                  <p>Nulla facilisi. Mauris efficitur, massa et iaculis accumsan, mauris velit ultrices purus, quis condimentum nibh dolor ut tortor.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="thumbnail">
                <h5><a href="blog-single-right-sidebar.html">Pellentesque risus quis tellus</a></h5>
                <span class="meta">July 16, 2016 by <a href="#">Abdus</a></span>
                <a href="blog-single-right-sidebar.html"><img src="img/home/articles/articles-02.jpg" alt="article-image"></a>
                <div class="caption">
                  <p>Praesent dui felis, gravida a auctor at, facilisis commodo ipsum. Cras eu faucibus justo. Nullam varius cursus nisi.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="thumbnail">
                <h5><a href="blog-single-right-sidebar.html">Mauris lobortis augue ex</a></h5>
                <span class="meta">July 16, 2016 by <a href="#">Abdus</a></span>
                <a href="blog-single-right-sidebar.html"><img src="img/home/articles/articles-03.jpg" alt="article-image"></a>
                <div class="caption">
                  <p>Etiam aliquam turpis quis blandit finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="thumbnail">
                <h5><a href="blog-single-right-sidebar.html">Suspendisse vestibulum dignissim</a></h5>
                <span class="meta">July 16, 2016 by <a href="#">Abdus</a></span>
                <a href="blog-single-right-sidebar.html"><img src="img/home/articles/articles-04.jpg" alt="article-image"></a>
                <div class="caption">
                  <p>Suspendisse tristique interdum est, at hendrerit nunc laoreet et. Nulla vel arcu ac turpis pulvinar tincidunt eu eu nisi.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- LIGHT SECTION -->
      <section class="lightSection clearfix">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="owl-carousel partnersLogoSlider">
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="{{asset('template/img/home/partners/partner-01.png')}}" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="{{asset('template/img/home/partners/partner-02.png')}}" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="{{asset('template/img/home/partners/partner-03.png')}}" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="{{asset('template/img/home/partners/partner-04.png')}}" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="{{asset('template/img/home/partners/partner-05.png')}}" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="{{asset('template/img/home/partners/partner-01.png')}}" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="{{asset('template/img/home/partners/partner-02.png')}}" alt="partner-img">
                  </div>
                </div>
                <div class="slide">
                  <div class="partnersLogo clearfix">
                    <img src="{{asset('template/img/home/partners/partner-03.png')}}" alt="partner-img">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FOOTER -->
      <div class="footer clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Accessories</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Body care </a></li>
                  <li><a href="#">Chambray </a></li>
                  <li><a href="#">Floral </a></li>
                  <li><a href="#">Rejuvination </a></li>
                  <li><a href="#">Shaving </a></li>
                  <li><a href="#">Toilette </a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>BRANDS</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Barbour </a></li>
                  <li><a href="#">Brioni </a></li>
                  <li><a href="#">Oliver Spencer</a></li>
                  <li><a href="#">Belstaff</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Accessories</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Body care </a></li>
                  <li><a href="#">Chambray </a></li>
                  <li><a href="#">Floral </a></li>
                  <li><a href="#">Rejuvination </a></li>
                  <li><a href="#">Shaving </a></li>
                  <li><a href="#">Toilette </a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerLink">
                <h5>Get in Touch</h5>
                <ul class="list-unstyled">
                  <li>Call us at (555)-555-5555</li>
                  <li><a href="mailto:support@iamabdus.com">support@iamabdus.com</a></li>
                </ul>
                <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="newsletter clearfix">
                <h4>Newsletter</h4>
                <h3>Sign up now</h3>
                <p>Enter your email address and get notified about new products. We hate spam!</p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="your email address" aria-describedby="basic-addon2">
                  <a href="#" class="input-group-addon" id="basic-addon2">go <i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- COPY RIGHT -->
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 col-xs-12">
              <p>&copy; 2016 Copyright Bigbag Store Bootstrap Template by <a target="_blank" href="http://www.iamabdus.com/">Abdus</a>.</p>
            </div>
            <div class="col-sm-5 col-xs-12">
              <ul class="list-inline">
                <li><img src="{{asset('template/img/home/footer/card1.png')}}"></li>
                <li><img src="{{asset('template/img/home/footer/card2.png')}}"></li>
                <li><img src="{{asset('template/img/home/footer/card3.png')}}"></li>
                <li><img src="{{asset('template/img/home/footer/card4.png')}}"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- LOGIN MODAL -->
    <div class="modal fade login-modal" id="login" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">log in</h3>
          </div>
          <div class="modal-body">
            <form action="#" method="POST" role="form">
              <div class="form-group">
                <label for="">Enter Email</label>
                <input type="email" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
              <button type="submit" class="btn btn-primary btn-block">log in</button>
              <button type="button" class="btn btn-link btn-block">Forgot Password?</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- SIGN UP MODAL -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Create an account</h3>
          </div>
          <div class="modal-body">
            <form action="#" method="POST" role="form">
              <div class="form-group">
                <label for="">Enter Email</label>
                <input type="email" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" id="">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- PORDUCT QUICK VIEW MODAL -->
    <div class="modal fade quick-view" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="{{asset('template/img/products/quick-view/quick-view-01.jpg')}}" alt="Image">
              </div>
              <div class="media-body">
                <h2>Old Skool Navy</h2>
                <h3>$149</h3>
                <p>Classic sneaker from Vans. Cotton canvas and suede upper. Textile lining with heel stabilizer and ankle support. Contrasting laces. Sits on a classic waffle rubber sole.</p>
                <span class="quick-drop">
                  <select name="guiest_id3" id="guiest_id3" class="select-drop">
                    <option value="0">Size</option>
                    <option value="1">Size 1</option>
                    <option value="2">Size 2</option>
                    <option value="3">Size 3</option>
                  </select>
                </span>
                <span class="quick-drop resizeWidth">
                  <select name="guiest_id4" id="guiest_id4" class="select-drop">
                    <option value="0">Qty</option>
                    <option value="1">Qty 1</option>
                    <option value="2">Qty 2</option>
                    <option value="3">Qty 3</option>
                  </select>
                </span>
                <div class="btn-area">
                  <a href="#" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{asset('template/external/jquery.min.js')}}" type="d741ec9552f318f851bfbfce-text/javascript"></script>
    <script src="{{asset('template/plugins/jquery-ui/jquery-ui.js')}}" type="d741ec9552f318f851bfbfce-text/javascript"></script>
    <script src="{{asset('template/plugins/bootstrap/js/bootstrap.min.js')}}" type="d741ec9552f318f851bfbfce-text/javascript"></script>
    <script src="{{asset('template/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}" type="d741ec9552f318f851bfbfce-text/javascript"></script>
    <script src="{{asset('template/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}" type="d741ec9552f318f851bfbfce-text/javascript"></script>
    <script src="{{asset('template/plugins/owl-carousel/owl.carousel.js')}}" type="d741ec9552f318f851bfbfce-text/javascript"></script>
    <script src="{{asset('template/plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}" type="d741ec9552f318f851bfbfce-text/javascript"></script>
    <script src="{{asset('template/plugins/countdown/jquery.syotimer.js')}}" type="d741ec9552f318f851bfbfce-text/javascript"></script>
    <script src="{{asset('template/js/custom.js')}}" type="d741ec9552f318f851bfbfce-text/javascript"></script>

  <link href="{{asset('template/options/optionswitch.css')}}" rel="stylesheet">
<script src="{{asset('template/options/optionswitcher.js')}}" type="d741ec9552f318f851bfbfce-text/javascript"></script>
<script src="{{asset('template/external/rocket-loader.min.js')}}" data-cf-settings="d741ec9552f318f851bfbfce-|49" defer=""></script></body>


</html>
