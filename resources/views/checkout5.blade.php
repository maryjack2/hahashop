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
<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
<li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
<li class="nav-item"><a href="Gallery.html" class="nav-link">Gallery</a></li>
<li class="nav-item"><a href="course.html" class="nav-link">Course</a></li>
              


             
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
    <section class="hero hero-page gray-bg padding-small mt-5">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Order confirmed</h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Order confirmed</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Checout Forms-->
    <section class="checkout">
      <div class="container">
        <div class="confirmation-icon"><i class="fa fa-check"></i></div>
        <h2>Thank you. Your order is confirmed.</h2>
        <p class="mb-5">Your order hasn't shipped yet but we will send you ane email when it does.</p>
        <p> <a href="customer-order.html" class="btn btn-template wide">View or manage your order</a></p>
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