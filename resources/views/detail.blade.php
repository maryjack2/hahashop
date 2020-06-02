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
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
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
          <div class="col-lg-9 order-2 order-lg-1 ">
            <h1>Happy Bag</h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2 ">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="category.html">Shop</a></li>
              <li class="breadcrumb-item active">Happy Bag</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="product-details">
      <div class="container">
        <div class="row">
          <div class="product-images col-lg-6">
            <div class="ribbon-info text-uppercase">Limited</div>
            <div data-slider-id="1" class="owl-carousel items-slider owl-drag">
              <div class="item"><img src="img/P6.jpg" alt="shirt"></div>
              <div class="item"><img src="img/P6.jpg" alt="shirt"></div>
              <div class="item"><img src="img/P6.jpg" alt="shirt"></div>
              <div class="item"><img src="img/P6.jpg" alt="shirt"></div>
            </div>
           <!--  small pic -->
            <div data-slider-id="1" class="owl-thumbs">
              <button class="owl-thumb-item">
                <img src="img/P6.jpg" alt="shirt"></button>

              <button class="owl-thumb-item active">
                <img src="img/P6.jpg" alt="shirt"></button>

              <button class="owl-thumb-item">
                <img src="img/P6.jpg" alt="shirt"></button>

              <button class="owl-thumb-item">
                <img src="img/P6.jpg" alt="shirt"></button>
            </div>
          </div>
          <div class="details col-lg-6">
            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
              <ul class="price list-inline no-margin">
                <li class="list-inline-item current">$65.00</li>
                <li class="list-inline-item original">$90.00</li>
              </ul>
              <div class="review d-flex align-items-center">
                <ul class="rate list-inline">
                  <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                </ul><span class="text-muted">5 reviews</span>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
              <div class="quantity d-flex align-items-center">
                <div class="dec-btn">-</div>
                <input type="text" value="1" class="quantity-no">
                <div class="inc-btn">+</div>
              </div>
              <select id="product-size" class="bs-select">
                <option value="small">Small</option>
                <option value="meduim">Medium</option>
                <option value="large">Large</option>
                <option value="x-large">X-Large</option>
              </select>
            </div>
            <ul class="CTAs list-inline">
              <li class="list-inline-item"><a href="#" class="btn btn-template wide"> <i class="icon-cart"></i>Add to Cart</a></li>
              <li class="list-inline-item"><a href="#" class="btn btn-template-outlined wide"> <i class="fa fa-heart-o"></i>Add to wishlist</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="product-description no-padding">
      <div class="container">
        <ul role="tablist" class="nav nav-tabs flex-column flex-sm-row">
          <li class="nav-item"><a data-toggle="tab" href="#description" role="tab" class="nav-link active">Description</a></li>
          <li class="nav-item"><a data-toggle="tab" href="#additional-information" role="tab" class="nav-link">Additional Information</a></li>
          <li class="nav-item"><a data-toggle="tab" href="#reviews" role="tab" class="nav-link">Reviews</a></li>
        </ul>
        <div class="tab-content">
          <div id="description" role="tabpanel" class="tab-pane active">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div id="additional-information" role="tabpanel" class="tab-pane">
            <table class="table">
              <tbody>
                <tr>
                  <th class="border-0">Material:</th>
                  <td class="border-0">Cotton</td>
                </tr>
                <tr>
                  <th>Styles:</th>
                  <td>Casual</td>
                </tr>
                <tr>
                  <th>Properties:</th>
                  <td>Short Sleeve</td>
                </tr>
                <tr>
                  <th>Brand:</th>
                  <td>Calvin Klein</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="reviews" role="tabpanel" class="tab-pane">
            <div class="row">
              <div class="col-xl-9">
                <div class="row review">
                  <div class="col-3 text-center"><img src="img/P6.jpg" alt="Han Solo" class="review-image"><span class="text-uppercase text-muted text-small">Dec 2018</span></div>
                  <div class="col-9 review-text">
                    <h6>Han Solo</h6>
                    <div class="mb-2"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i>
                    </div>
                    <p class="text-muted text-small">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections</p>
                  </div>
                </div>
                <div class="row review">
                  <div class="col-3 text-center"><img src="img/P6.jpg" alt="Luke Skywalker" class="review-image"><span class="text-uppercase text-muted text-small">Dec 2018</span></div>
                  <div class="col-9 review-text">
                    <h6>Luke Skywalker</h6>
                    <div class="mb-2"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star-o text-primary"></i>
                    </div>
                    <p class="text-muted text-small">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.</p>
                  </div>
                </div>
                <div class="row review">
                  <div class="col-3 text-center"><img src="img/P6.jpg.jpg" alt="Princess Leia" class="review-image"><span class="text-uppercase text-muted text-small">Dec 2018</span></div>
                  <div class="col-9 review-text">
                    <h6>Princess Leia</h6>
                    <div class="mb-2"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star-o text-primary"></i><i class="fa fa-star-o text-primary"></i>
                    </div>
                    <p class="text-muted text-small">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.</p>
                  </div>
                </div>
                <div class="row review">
                  <div class="col-3 text-center"><img src="img/person-4.jpg" alt="Jabba Hut" class="review-image"><span class="text-uppercase text-muted text-small">Dec 2018</span></div>
                  <div class="col-9 review-text">
                    <h6>Jabba Hut</h6>
                    <div class="mb-2"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i>
                    </div>
                    <p class="text-muted text-small">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="share-product gray-bg d-flex align-items-center justify-content-center flex-column flex-md-row"><strong class="text-uppercase">Share this on</strong>
          <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
          </ul>
        </div>
      </div>
    </section>

    <section class="related-products">
      <div class="container">
        <header class="text-center">
          <h2><small>Similar Items</small>You may also like</h2>
        </header>
        <div class="row">
          <!-- item-->
          <div class="item col-lg-3">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="img/P6.jpg" alt="..." class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="#">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Gray</h3></a><span class="price">$40.00</span></div>
            </div>
          </div>
          <!-- item-->
          <div class="item col-lg-3">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="img/P2.jpg" alt="..." class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="#">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Black</h3></a><span class="price">$40.00</span></div>
            </div>
          </div>
          <!-- item-->
          <div class="item col-lg-3">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="img/P1.jpg" alt="..." class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="#">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Blue</h3></a><span class="price">$40.00</span></div>
            </div>
          </div>
          <!-- item-->
          <div class="item col-lg-3">
            <div class="product is-gray">
              <div class="image d-flex align-items-center justify-content-center"><img src="img/p3.jpg" alt="..." class="img-fluid">
                <div class="hover-overlay d-flex align-items-center justify-content-center">
                  <div class="CTA d-flex align-items-center justify-content-center"><a href="#" class="add-to-cart"><i class="fa fa-shopping-cart"></i></a><a href="detail.html" class="visit-product active"><i class="icon-search"></i>View</a><a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a></div>
                </div>
              </div>
              <div class="title"><a href="#">
                  <h3 class="h6 text-uppercase no-margin-bottom">Elegant Lake</h3></a><span class="price">$40.00</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Overview Popup    -->
    <div id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade overview">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="icon-close"></i></span></button>
          <div class="modal-body"> 
            <div class="ribbon-primary text-uppercase">Sale</div>
            <div class="row d-flex align-items-center">
              <div class="image col-lg-5"><img src="img/shirt.png" alt="..." class="img-fluid d-block"></div>
              <div class="details col-lg-7">
                <h2>Lose Oversized Shirt</h2>
                <ul class="price list-inline">
                  <li class="list-inline-item current">$65.00</li>
                  <li class="list-inline-item original">$90.00</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                <div class="d-flex align-items-center">
                  <div class="quantity d-flex align-items-center">
                    <div class="dec-btn">-</div>
                    <input type="text" value="1" class="quantity-no">
                    <div class="inc-btn">+</div>
                  </div>
                  <select id="size" class="bs-select">
                    <option value="small">Small</option>
                    <option value="meduim">Medium</option>
                    <option value="large">Large</option>
                    <option value="x-large">X-Large</option>
                  </select>
                </div>
                <ul class="CTAs list-inline">
                  <li class="list-inline-item"><a href="#" class="btn btn-template wide"> <i class="fa fa-shopping-cart"></i>Add to Cart</a></li>
                  <li class="list-inline-item"><a href="#" class="visit-product active btn btn-template-outlined wide"> <i class="icon-heart"></i>Add to wishlist</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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