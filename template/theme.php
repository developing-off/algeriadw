<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from themepure.net/template/markit/markit/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jun 2022 09:59:11 GMT -->
<head>
   <?php require('partials/theme/_head.php') ?>
</head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      
      <!-- Add your site or application content here -->  

      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="object" id="object_one"></div>
               <div class="object" id="object_two" style="left:20px;"></div>
               <div class="object" id="object_three" style="left:40px;"></div>
               <div class="object" id="object_four" style="left:60px;"></div>
               <div class="object" id="object_five" style="left:80px;"></div>
            </div>
         </div>  
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->

      <!-- header area start -->
      <header>
         <?php require('partials/theme/navbar.php') ?>
      </header>
      <!-- header area end -->


      <!-- cart mini area start -->
      <div class="cartmini__area">
         <div class="cartmini__wrapper">
            <div class="cartmini__title">
               <h4>Shopping cart</h4>
            </div>
            <div class="cartmini__close">
               <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="cartmini__widget">
               <div class="cartmini__inner">
                  <ul>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="product-details.html">
                           <img src="https://algeriadw.ga/assets/themes/img/product/sm/cart-5.jpg" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="product-details.html">Findup - Directory & Listing</a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1"/>
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span>2 <i class="fal fa-times"></i></span>
                              <span class="product__sm-price">$24.00</span>
                           </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="product-details.html">
                           <img src="https://algeriadw.ga/assets/themes/img/product/sm/cart-2.jpg" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="product-details.html">TechBuzz - Businesses Agency</a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1"/>
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span>1 <i class="fal fa-times"></i></span>
                              <span class="product__sm-price">$17.00</span>
                           </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="product-details.html">
                           <img src="https://algeriadw.ga/assets/themes/img/product/sm/cart-3.jpg" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="product-details.html">Zibber - Agency Template</a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1"/>
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span>5 <i class="fal fa-times"></i></span>
                              <span class="product__sm-price">$72.00</span>
                           </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                  </ul>
               </div>
               <div class="cartmini__checkout">
                  <div class="cartmini__checkout-title mb-30">
                     <h4>Subtotal:</h4>
                     <span>$113.00</span>
                  </div>
                  <div class="cartmini__checkout-btn">
                     <a href="#" class="m-btn m-btn-border mb-10 w-100"> <span></span> view cart</a>
                     <a href="#" class="m-btn m-btn-3 w-100"> <span></span> checkout</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- cart mini area end -->


      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index.html">
                  <img src="https://algeriadw.ga/assets/themes/img/logo/logo-white.png" alt="logo">
                  </a>
               </div>
               <div class="mobile-menu"></div>
               <div class="sidebar__action mt-330">
                  <div class="sidebar__login mt-15">
                     <a href="#"><i class="far fa-unlock"></i> Log In</a>
                  </div>
                  <div class="sidebar__cart mt-20">
                     <a href="javascript:void(0);" class="cart-toggle-btn">
                        <i class="far fa-shopping-cart"></i>
                        <span>2</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->


      <main>

         <!-- hero area start -->
         <section class="hero__area hero__height grey-bg-3 d-flex align-items-center">
            <div class="hero__shape">
               <img class="circle" src="https://algeriadw.ga/assets/themes/img/icon/hero/hero-circle.png" alt="circle">
               <img class="circle-2" src="https://algeriadw.ga/assets/themes/img/icon/hero/hero-circle-2.png" alt="circle">
               <img class="square" src="https://algeriadw.ga/assets/themes/img/icon/hero/hero-square.png" alt="circle">
               <img class="square-2" src="https://algeriadw.ga/assets/themes/img/icon/hero/hero-square-2.png" alt="circle">
               <img class="dot" src="https://algeriadw.ga/assets/themes/img/icon/hero/hero-dot.png" alt="circle">
               <img class="triangle" src="https://algeriadw.ga/assets/themes/img/icon/hero/hero-triangle.png" alt="circle">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                     <div class="hero__content">
                        <h2 class="hero__title">
                           <span>The world’s largest</span>
                           WordPress Themes
                           Collection.
                        </h2>
                        <p>The bee's knees pardon you plastered it's all gone to pot cheeky bugger wind up down.</p>
                        <div class="hero__search">
                           <form action="#">
                              <div class="hero__search-inner d-xl-flex">
                                 <div class="hero__search-input">
                                    <span><i class="far fa-search"></i></span>
                                    <input type="text" placeholder="Search for templates">
                                 </div>
                                 <button type="submit" class="m-btn ml-20"> <span></span> search</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="hero__thumb-wrapper scene ml-70">
                        <div class="hero__thumb one d-none d-lg-block">
                           <img class="layer" data-depth="0.2" src="https://algeriadw.ga/assets/themes/img/hero/hero-1.jpg" alt="">
                        </div>
                        <div class="hero__thumb two">
                           <img class="layer" data-depth="0.3" src="https://algeriadw.ga/assets/themes/img/hero/hero-2.jpg" alt="">
                        </div>
                        <div class="hero__thumb three">
                           <img class="layer" data-depth="0.4" src="https://algeriadw.ga/assets/themes/img/hero/hero-3.jpg" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- hero area end -->

         <!-- category area start -->
         <section class="category__area pt-105 pb-135">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="section__title-wrapper text-center mb-60">
                        <h2 class="section__title">Browse <br> Popular Categories</h2>
                        <p>Find over 7000 website templates and themes.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
                     <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp" data-wow-delay=".3s" >
                        <div class="category__icon mb-25">
                           <a href="#"><img src="https://algeriadw.ga/assets/themes/img/icon/catagory/cat-1.png" alt=""></a>
                        </div>
                        <div class="category__content">
                           <h3 class="category__title">
                              <a href="product.html">WordPress Themes</a>
                           </h3>
                           <a href="product.html" class="link-btn">
                           <i class="far fa-long-arrow-right"></i>
                           Learn More
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
                     <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="category__icon mb-25">
                           <a href="#"><img src="https://algeriadw.ga/assets/themes/img/icon/catagory/cat-2.png" alt=""></a>
                        </div>
                        <div class="category__content">
                           <h3 class="category__title">
                              <a href="product.html">Site Templates</a>
                           </h3>
                           <a href="product.html" class="link-btn">
                           <i class="far fa-long-arrow-right"></i>
                           Learn More
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
                     <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="category__icon mb-25">
                           <a href="#"><img src="https://algeriadw.ga/assets/themes/img/icon/catagory/cat-3.png" alt=""></a>
                        </div>
                        <div class="category__content">
                           <h3 class="category__title">
                              <a href="product.html">UI Templates</a>
                           </h3>
                           <a href="product.html" class="link-btn">
                           <i class="far fa-long-arrow-right"></i>
                           Learn More
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-xl-3 col-md-6 col-sm-6">
                     <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp" data-wow-delay=".9s">
                        <div class="category__icon mb-25">
                           <a href="#"><img src="https://algeriadw.ga/assets/themes/img/icon/catagory/cat-4.png" alt=""></a>
                        </div>
                        <div class="category__content">
                           <h3 class="category__title">
                              <a href="product.html">Digital Marketing</a>
                           </h3>
                           <a href="product.html" class="link-btn">
                           <i class="far fa-long-arrow-right"></i>
                           Learn More
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="category__more mt-30 text-center">
                        <a href="product.html" class="m-btn m-btn-2"> <span></span> View all categories</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- category area end -->

         <!-- trending area start -->
         <section class="trending__area pt-110 pb-110 grey-bg">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-xxl-6 col-xl-6 col-lg col-md-8">
                     <div class="section__title-wrapper mb-50">
                        <h2 class="section__title">Trending <br> Landmark Themes</h2>
                        <p>Jeffrey pardon me jolly good.</p>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg col-md-4">
                     <div class="trending__more d-flex justify-content-md-end  mb-50">
                        <a href="product.html" class="m-btn m-btn-border"><span></span>Explore Cloneables</a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="trending__item d-sm-flex white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="trending__thumb mr-25">
                           <div class="trending__thumb-inner fix">
                              <a href="product-details.html">
                                 <img src="https://algeriadw.ga/assets/themes/img/trending/tren-1.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="trending__content">
                           <h3 class="trending__title"><a href="product-details.html">Zibber WP Theme</a></h3>
                           <p>Knees up arse blimey say happy days.</p>
                           <div class="trending__meta d-flex justify-content-between">
                              <div class="trending__tag">
                                 <a href="#">Business</a>
                              </div>
                              <div class="trending__price">
                                 <span>$39</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="trending__item d-sm-flex white-bg mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="trending__thumb mr-25">
                           <div class="trending__thumb-inner fix">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/trending/tren-2.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="trending__content">
                           <h3 class="trending__title"><a href="product-details.html">React App Landing</a></h3>
                           <p>Knees up arse blimey say happy days.</p>
                           <div class="trending__meta d-flex justify-content-between">
                              <div class="trending__tag">
                                 <a href="#">Technology</a>
                              </div>
                              <div class="trending__price">
                                 <span class="old-price">$29</span>
                                 <span>$25</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="trending__item d-sm-flex white-bg mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="trending__thumb mr-25">
                           <div class="trending__thumb-inner fix">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/trending/tren-3.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="trending__content">
                           <h3 class="trending__title"><a href="product-details.html">Digital Marketing</a></h3>
                           <p>Knees up arse blimey say happy days.</p>
                           <div class="trending__meta d-flex justify-content-between">
                              <div class="trending__tag">
                                 <a href="#">marketing</a>
                              </div>
                              <div class="trending__price">
                                 <span>$16</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="trending__item d-sm-flex white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="trending__thumb mr-25">
                           <div class="trending__thumb-inner fix">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/trending/tren-4.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="trending__content">
                           <h3 class="trending__title"><a href="product-details.html">Ad Manager Admin</a></h3>
                           <p>Knees up arse blimey say happy days.</p>
                           <div class="trending__meta d-flex justify-content-between">
                              <div class="trending__tag">
                                 <a href="#">software</a>
                              </div>
                              <div class="trending__price">
                                 <span>$29</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="trending__item d-sm-flex white-bg mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="trending__thumb mr-25">
                           <div class="trending__thumb-inner fix">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/trending/tren-5.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="trending__content">
                           <h3 class="trending__title"><a href="product-details.html">UI Template</a></h3>
                           <p>Knees up arse blimey say happy days.</p>
                           <div class="trending__meta d-flex justify-content-between">
                              <div class="trending__tag">
                                 <a href="#">UI kit</a>
                              </div>
                              <div class="trending__price">
                                 <span>$44</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="trending__item d-sm-flex white-bg mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="trending__thumb mr-25">
                           <div class="trending__thumb-inner fix">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/trending/tren-6.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="trending__content">
                           <h3 class="trending__title"><a href="product-details.html">Email Template</a></h3>
                           <p>Knees up arse blimey say happy days.</p>
                           <div class="trending__meta d-flex justify-content-between">
                              <div class="trending__tag">
                                 <a href="#">manager</a>
                              </div>
                              <div class="trending__price">
                                 <span>$14</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="trending__item d-sm-flex white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="trending__thumb mr-25">
                           <div class="trending__thumb-inner fix">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/trending/tren-7.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="trending__content">
                           <h3 class="trending__title"><a href="product-details.html">Multipurpose Store</a></h3>
                           <p>Knees up arse blimey say happy days.</p>
                           <div class="trending__meta d-flex justify-content-between">
                              <div class="trending__tag">
                                 <a href="#">marketing</a>
                              </div>
                              <div class="trending__price">
                                 <span>$55</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="trending__item d-sm-flex white-bg mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="trending__thumb mr-25">
                           <div class="trending__thumb-inner fix">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/trending/tren-8.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="trending__content">
                           <h3 class="trending__title"><a href="product-details.html">Responsive Agency</a></h3>
                           <p>Knees up arse blimey say happy days.</p>
                           <div class="trending__meta d-flex justify-content-between">
                              <div class="trending__tag">
                                 <a href="#">agency</a>
                              </div>
                              <div class="trending__price">
                                 <span>$22</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                     <div class="trending__item d-sm-flex white-bg mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="trending__thumb mr-25">
                           <div class="trending__thumb-inner fix">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/trending/tren-9.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="trending__content">
                           <h3 class="trending__title"><a href="product-details.html">Admin Dashboard</a></h3>
                           <p>Knees up arse blimey say happy days.</p>
                           <div class="trending__meta d-flex justify-content-between">
                              <div class="trending__tag">
                                 <a href="#">application</a>
                              </div>
                              <div class="trending__price">
                                 <span>$49</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- trending area end -->

         <!-- subscribe area start -->
         <section class="subscribe__area p-relative pt-100 pb-110" data-background="https://algeriadw.ga/assets/themes/img/bg/subscribe-bg.jpg">
            <div class="subscribe__icon">
               <img class="ps" src="https://algeriadw.ga/assets/themes/img/icon/subscribe/ps.png" alt="">
               <img class="wp" src="https://algeriadw.ga/assets/themes/img/icon/subscribe/wp.png" alt="">
               <img class="html" src="https://algeriadw.ga/assets/themes/img/icon/subscribe/html.png" alt="">
               <img class="f" src="https://algeriadw.ga/assets/themes/img/icon/subscribe/f.png" alt="">
               <img class="man" src="https://algeriadw.ga/assets/themes/img/icon/subscribe/man.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="subscribe__content text-center wow fadeInUp" data-wow-delay=".5s">
                        <h3 class="subscribe__title">Have a project? <br> Create your website now.</h3>
                        <p>Try our any product for FREE!</p>
                        <div class="subscribe__form wow fadeInUp" data-wow-delay=".7s">
                           <form action="#">
                              <input type="email" placeholder="Email Address">
                              <button type="submit" class="m-btn m-btn-black"><span></span> subscribe </button>
                           </form>
                           <p>Join 20,000+ other creators in our Markit community.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- subscribe area end -->

         <!-- product area start -->
         <section class="product__area pt-105 pb-110 grey-bg-2">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="section__title-wrapper text-center mb-60">
                        <h2 class="section__title">Latest <br>  Premium Products</h2>
                        <p>From multipurpose themes to niche templates</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/product/product-1.jpg" alt="">
                              </a>
                           </div>
                           <div class="product__thumb-btn transition-3">
                              <a href="#" class="m-btn m-btn-6 mb-15">
                                 Buy Now
                              </a>
                              <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392" target="_blank" class="m-btn m-btn-7">
                                 Preview Project
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">Business</a>
                              </div>
                              <div class="product__price">
                                 <span>$49</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">Zibber - Business Consulting...</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/product/product-2.jpg" alt="">
                              </a>
                           </div>
                           <div class="product__thumb-btn transition-3">
                              <a href="#" class="m-btn m-btn-6 mb-15">
                                 Buy Now
                              </a>
                              <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392" target="_blank" class="m-btn m-btn-7">
                                 Preview Project
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="product-details.html">corporate</a>
                              </div>
                              <div class="product__price">
                                 <span>$23</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">Pixen - Printing Services Company..</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/product/product-3.jpg" alt="">
                              </a>
                           </div>
                           <div class="product__thumb-btn transition-3">
                              <a href="#" class="m-btn m-btn-6 mb-15">
                                 Buy Now
                              </a>
                              <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392" target="_blank" class="m-btn m-btn-7">
                                 Preview Project
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">listing</a>
                              </div>
                              <div class="product__price">
                                 <span>$12</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">Findup - Directory & Listing PSD...</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".9s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/product/product-4.jpg" alt="">
                              </a>
                           </div>
                           <div class="product__thumb-btn transition-3">
                              <a href="#" class="m-btn m-btn-6 mb-15">
                                 Buy Now
                              </a>
                              <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392" target="_blank" class="m-btn m-btn-7">
                                 Preview Project
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">e-commerce</a>
                              </div>
                              <div class="product__price">
                                 <span>$59</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">Agota - Clean Minimal eCommerce.</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/product/product-5.jpg" alt="">
                              </a>
                           </div>
                           <div class="product__thumb-btn transition-3">
                              <a href="#" class="m-btn m-btn-6 mb-15">
                                 Buy Now
                              </a>
                              <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392" target="_blank" class="m-btn m-btn-7">
                                 Preview Project
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">Business</a>
                              </div>
                              <div class="product__price">
                                 <span>$49</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">BngTech - IT Solutions WordPress...</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                              <img src="https://algeriadw.ga/assets/themes/img/product/product-6.jpg" alt="">
                              </a>
                           </div>
                           <div class="product__thumb-btn transition-3">
                              <a href="#" class="m-btn m-btn-6 mb-15">
                                 Buy Now
                              </a>
                              <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392" target="_blank" class="m-btn m-btn-7">
                                 Preview Project
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">Construction</a>
                              </div>
                              <div class="product__price">
                                 <span>$49</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">BildPress - Construction WordPres.</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="product__more text-center mt-30">
                        <a href="product.html" class="m-btn m-btn-2"> <span></span> Explore Premium</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- product area end -->

         <!-- cta area start -->
         <section class="cta__area pt-100 pb-60">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                     <div class="section__title-wrapper text-center mb-45">
                        <h2 class="section__title wow fadeInUp" data-wow-delay=".3s">Grow Your Revenue <span>Today</span></h2>
                        <p class="wow fadeInUp" data-wow-delay=".5s">Thousands of Markit Brands have made the swich.Text marketing with the customer in mind!</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3">
                     <div class="cta__content text-center wow fadeInUp" data-wow-delay=".7s">
                        <a href="pricing.html" class="m-btn m-btn-border-2 cta__btn active"> <span></span> Start 14 Day Free Trial</a>
                        <a href="pricing.html" class="m-btn m-btn-border-2 cta__btn"> <span></span> Claim Free Demo</a>
                        <p>Start Sending Texts - No Credit Card Necessary</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- cta area end -->

         <!-- brand area start -->
         <div class="brand__area pb-15">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="brand__slider owl-carousel wow fadeInUp" data-wow-delay=".5s">
                        <div class="brand__thumb">
                           <img src="https://algeriadw.ga/assets/themes/img/brand/brand-1.png" alt="">
                        </div>
                        <div class="brand__thumb">
                           <img src="https://algeriadw.ga/assets/themes/img/brand/brand-2.png" alt="">
                        </div>
                        <div class="brand__thumb">
                           <img src="https://algeriadw.ga/assets/themes/img/brand/brand-3.png" alt="">
                        </div>
                        <div class="brand__thumb">
                           <img src="https://algeriadw.ga/assets/themes/img/brand/brand-4.png" alt="">
                        </div>
                        <div class="brand__thumb">
                           <img src="https://algeriadw.ga/assets/themes/img/brand/brand-5.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- brand area end -->

         <!-- testimonial area start -->
         <div class="testimonial__area pt-50 pb-115 fix">
            <div class="container">
               <div class="testimonial__inner p-relative pb-110">
                  <div class="testimonial__bg p-absolute">
                     <img src="https://algeriadw.ga/assets/themes/img/bg/testimonial-bg.png" alt="">
                  </div>
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="testimonial__slider owl-carousel wow fadeInUp" data-wow-delay=".5s">
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                    <img src="https://algeriadw.ga/assets/themes/img/testimonial/testi-1.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                    <h5>Justin Case</h5>
                                    <span>@justin</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle lavatory excuse my French up the duff cup of char bender fantastic arse.!</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                    <img src="https://algeriadw.ga/assets/themes/img/testimonial/testi-2.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                    <h5>Gunther Beard</h5>
                                    <span>@beard</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                    <img src="https://algeriadw.ga/assets/themes/img/testimonial/testi-3.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                    <h5>Joss Sticks</h5>
                                    <span>@sticks</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle lavatory excuse my French up the duff cup of char bender fantastic  arse.!</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                    <img src="https://algeriadw.ga/assets/themes/img/testimonial/testi-4.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                    <h5>Samuel Serif</h5>
                                    <span>@justin</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                    <img src="https://algeriadw.ga/assets/themes/img/testimonial/testi-2.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                    <h5>Shahnewaz Sakil</h5>
                                    <span>@Shahnewaz</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                    <img src="https://algeriadw.ga/assets/themes/img/testimonial/testi-3.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                    <h5>Joss Sticks</h5>
                                    <span>@sticks</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle lavatory excuse my French up the duff cup of char bender fantastic  arse.!</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                    <img src="https://algeriadw.ga/assets/themes/img/testimonial/testi-2.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                    <h5>Gunther Beard</h5>
                                    <span>@beard</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                    <img src="https://algeriadw.ga/assets/themes/img/testimonial/testi-4.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                    <h5>Samuel Serif</h5>
                                    <span>@justin</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                    <img src="https://algeriadw.ga/assets/themes/img/testimonial/testi-1.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                    <h5>Samuel Serif</h5>
                                    <span>@justin</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- testimonial area end -->

         <!-- banner area start -->
         <section class="banner__area pb-90">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-md-6">
                     <div class="banner__item mb-30 wow fadeInUp" data-wow-delay=".3s" data-background="https://algeriadw.ga/assets/themes/img/banner/banner-1.jpg">
                        <h3 class="banner__title">Designers who changed the web with Markit</h3>
                        <p>He lost his bottle that zonked spend a penny young delinquent bugger.</p>
                        <a href="about.html" class="m-btn m-btn-white banner__more"> <span></span> Learn More</a>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-md-6">
                     <div class="banner__item mb-30 wow fadeInUp" data-wow-delay=".7s" data-background="assets/img/banner/banner-2.jpg">
                        <h3 class="banner__title">Professional Websites are made by Markit</h3>
                        <p>He lost his bottle that zonked spend a penny young delinquent bugger.</p>
                        <a href="about.html" class="m-btn m-btn-white banner__more"> <span></span> Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- banner area end -->
      </main>

      <!-- footer area start -->
      <footer>
         <?php require('partials/theme/footer.php') ?>
      </footer>
      <!-- footer area end -->

      <!-- JS here -->
      <?php require('partials/theme/_script.php') ?>
   </body>

<!-- Mirrored from themepure.net/template/markit/markit/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jun 2022 10:00:02 GMT -->
</html>

