<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Heaven Generation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.css">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="css/custom-fonticons.css">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
   <link rel="shortcut icon" href="img/shortcuticon.png">
    <!-- Modernizr-->
    <script src="js/modernizr.custom.79639.js"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      
       <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <form action="#">
              <div class="form-group">
                <input type="search" name="search" id="search" placeholder="What are you looking for?">
                <button type="submit" class="submit"><i class="icon-search"></i></button>
              </div>
            </form>
          </div>
        </div>

<!-- ? -->
        <div class="container-fluid text-white m-0 ">  
          <!-- Navbar Header  -->
          <a href="index.html" class="navbar-brand "><img src="img/logo.png" alt="..." style="width: 180px; "></a>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars text-white"></i></button>

          <!-- Navbar Collapse -->
          <div id="navbarCollapse" class="collapse navbar-collapse mt-3 ">
            <ul class="navbar-nav mx-auto ">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
<li class="nav-item"><a href="#" class="nav-link">About us</a></li>
<li class="nav-item"><a href="#" class="nav-link">Gallery</a></li>
<li class="nav-item"><a href="category.html" class="nav-link">Course</a></li>
              


             
<!-- Nav Shop -->
<li class="nav-item dropdown "><a id="navbarDropdownMenuLink" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Shop<i class="fa fa-angle-down"></i></a>
    <ul aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
        <li><a href="category.html" class="dropdown-item">Products</a></li>
                <!--   <li><a href="#" class="dropdown-item">haha2</a></li> -->
                 
    </ul>
</li>



<!-- Contact -->

<li class="nav-item "><a href="contact.html" class="nav-link">Contact</a></li>
  </ul>

<!-- riht side login search shopping cart -->
<div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">

<!-- Search Button-->
              <div class="search"><i class="icon-search"></i></div>

<!-- User Not Logged - link to login page-->
              <div class="user"> <a id="userdetails" href="customer-login.html" class="user-link"><i class="icon-profile"></i></a></div>

<!-- Cart Dropdown-->
              <div class="cart dropdown show"><a id="cartdetails" href="https://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="icon-cart"></i>
                  <div class="cart-no">1</div></a><a href="cart.html" class="text-primary view-cart">View Cart</a>
                <div aria-labelledby="cartdetails" class="dropdown-menu">

<!-- cart item-->
                  <div class="dropdown-item cart-product">
                    <div class="d-flex align-items-center">
                      <div class="img"><img src="img/hoodie-man-1.png" alt="..." class="img-fluid"></div>
                      <div class="details d-flex justify-content-between">
                        <div class="text"> <a href="#"><strong>Heather Gray Hoodie</strong></a><small>Quantity: 1 </small><span class="price">$75.00 </span></div><a href="#" class="delete"><i class="fa fa-trash-o"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- total price-->
                  <div class="dropdown-item total-price d-flex justify-content-between"><span>Total</span><strong class="text-primary">$75.00</strong></div>
                  <!-- call to actions-->
                  <div class="dropdown-item CTA d-flex"><a href="cart.html" class="btn btn-template wide">View Cart</a><a href="checkout1.html" class="btn btn-template wide">Checkout</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Checkout</h1><p class="lead">You currently have 3 item(s) in your basket</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Checkout</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Checkout Forms-->
    <section class="checkout">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="checkout1.html" class="nav-link active">Address</a></li>
              <li class="nav-item"><a href="#" class="nav-link disabled">Delivery Method </a></li>
              <li class="nav-item"><a href="#" class="nav-link disabled">Payment Method </a></li>
              <li class="nav-item"><a href="#" class="nav-link disabled">Order Review</a></li>
            </ul>
            <div class="tab-content">
              <div id="address" class="active tab-block">
                <form action="#">
                  <!-- Invoice Address-->
                  <div class="block-header mb-5">
                    <h6>Invoice address                    </h6>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="firstname" class="form-label">First Name</label>
                      <input id="firstname" type="text" name="first-name" placeholder="Enter you first name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="lastname" class="form-label">Last Name</label>
                      <input id="lastname" type="text" name="last-name" placeholder="Enter your last name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email" class="form-label">Email Address</label>
                      <input id="email" type="email" name="email" placeholder="enter your email address" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="street" class="form-label">Street</label>
                      <input id="street" type="text" name="address" placeholder="Your street name" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="city" class="form-label">City</label>
                      <input id="city" type="text" name="city" placeholder="Your city" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="zip" class="form-label">ZIP</label>
                      <input id="zip" type="text" name="zip" placeholder="ZIP code" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="state" class="form-label">State</label>
                      <input id="state" type="text" name="state" placeholder="Your state" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="country" class="form-label">Country</label>
                      <input id="country" type="text" name="country" placeholder="Your country" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="phone-number" class="form-label">Phone Number</label>
                      <input id="phone-number" type="tel" name="phone-number" placeholder="Your phone number" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="company" class="form-label">Company</label>
                      <input id="company" type="text" name="company" placeholder="Your company name" class="form-control">
                    </div>
                    <div class="form-group col-12 mt-3 ml-3">
                      <input id="another-address" type="checkbox" class="checkbox-template">
                      <label for="another-address" data-toggle="collapse" data-target="#shippingAddress" aria-expanded="false" aria-controls="shippingAddress">Use different shipping address</label>
                    </div>
                  </div>
                  <!-- /Invoice Address-->
                  <!-- Shippping Address-->
                  <div id="shippingAddress" aria-expanded="false" class="collapse">
                    <div class="block-header mb-5 mt-3">
                      <h6>Shipping address</h6>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="shipping_firstname" class="form-label">First Name</label>
                        <input id="shipping_firstname" type="text" name="shipping_first-name" placeholder="Enter you first name" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="shipping_lastname" class="form-label">Last Name</label>
                        <input id="lshipping_astname" type="text" name="shipping_last-name" placeholder="Enter your last name" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="shipping_email" class="form-label">Email Address</label>
                        <input id="shipping_email" type="email" name="shipping_email" placeholder="enter your email address" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="shipping_street" class="form-label">Street</label>
                        <input id="shipping_street" type="text" name="shipping_address" placeholder="Your street name" class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="shipping_city" class="form-label">City</label>
                        <input id="shipping_city" type="text" name="shipping_city" placeholder="Your city" class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="shipping_zip" class="form-label">ZIP</label>
                        <input id="shipping_zip" type="text" name="shipping_zip" placeholder="ZIP code" class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="shipping_state" class="form-label">State</label>
                        <input id="shipping_state" type="text" name="shipping_state" placeholder="Your state" class="form-control">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="shipping_country" class="form-label">Country</label>
                        <input id="shipping_country" type="text" name="shipping_country" placeholder="Your country" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="shipping_phone-number" class="form-label">Phone Number</label>
                        <input id="shipping_phone-number" type="tel" name="shipping_phone-number" placeholder="Your phone number" class="form-control">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="shipping_company" class="form-label">Company</label>
                        <input id="shipping_company" type="text" name="shipping_company" placeholder="Your company name" class="form-control">
                      </div>
                    </div>
                  </div>
                  <!-- /Shipping Address-->
                  <div class="CTAs d-flex justify-content-between flex-column flex-lg-row"><a href="cart.html" class="btn btn-template-outlined wide prev"> <i class="fa fa-angle-left"></i>Back to basket</a><a href="checkout2.html" class="btn btn-template wide next">Choose delivery method<i class="fa fa-angle-right"></i></a></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="block-body order-summary">
              <h6 class="text-uppercase">Order Summary</h6>
              <p>Shipping and additional costs are calculated based on values you have entered</p>
              <ul class="order-menu list-unstyled">
                <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>$390.00</strong></li>
                <li class="d-flex justify-content-between"><span>Shipping and handling</span><strong>$10.00</strong></li>
                <li class="d-flex justify-content-between"><span>Tax</span><strong>$0.00</strong></li>
                <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">$400.00</strong></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
        <footer class="main-footer">
      
      <!-- Main Block -->
      <div class="main-block">
        <div class="container">
          <div class="row">
            <div class="info col-lg-4">
              <div class="logo"><img src="img/logo.png" alt="..."></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
              <ul class="social-menu list-inline">
                <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                
               
              </ul>
            </div>
            <div class="site-links col-lg-2 col-md-6">
              <h5 class="text-uppercase">CUSTOMER RERVICE</h5>
              <ul class="list-unstyled">
                <li> <a href="#">Contact us</a></li>
                <li> <a href="#">Ordering & Payment</a></li>
                <li> <a href="#">Shipping</a></li>
                <li> <a href="#">Returns</a></li>
                <li> <a href="#">FAQ</a></li>
              </ul>
            </div>
            <div class="site-links col-lg-2 col-md-6">
              <h5 class="text-uppercase">INFORMATION</h5>
              <ul class="list-unstyled">
                <li> <a href="#">Privacy Policy</a></li>
                <li> <a href="#">Terms & Conditions</a></li>
                
              </ul>
            </div>
            <div class="newsletter col-lg-4">
              <h5 class="text-uppercase">Daily Offers & Discounts</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
              <form action="#" id="newsletter-form">
                <div class="form-group">
                  <input type="email" name="subscribermail" placeholder="Your Email Address">
                  <button type="submit"> <i class="fa fa-paper-plane"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="text col-md-6 ">
              <p>&copy; 2020 </p>
            </div>
           
          </div>
        </div>
      </div>
     <div class="top-bar ">
        
          <div class="row d-flex align-items-center mb-0">
           
            <div class="col-lg-12 d-flex justify-content-center">
              <!-- Language Dropdown-->
              <div class="dropdown show"><a id="langsDropdown" href="https://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><img src="img/united-kingdom.svg" alt="english">English</a>
                <div aria-labelledby="langsDropdown" class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><img src="img/germany.svg" alt="german">Chinese</a></div>
              </div>
              <!-- Currency Dropdown-->
              <div class="dropdown show"><a id="currencyDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">USD</a>
                <div aria-labelledby="currencyDropdown" class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">GBP</a><a href="#" class="dropdown-item"> TWD</a></div>
              </div>
            </div>
          </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/jquery-countdown/jquery.countdown.min.js"></script>
    <script src="vendor/masonry-layout/masonry.pkgd.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <!-- masonry -->
    <script>
      $(function(){
          var $grid = $('.masonry-wrapper').masonry({
              itemSelector: '.item',
              columnWidth: '.item',
              percentPosition: true,
              transitionDuration: 0,
          });
      
          $grid.imagesLoaded().progress( function() {
              $grid.masonry();
          });
      })
      
      
    </script>
    <!-- Main Template File-->
    <script src="js/front.js"></script>
  </body>
</html>