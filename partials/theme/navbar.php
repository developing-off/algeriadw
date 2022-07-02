<div class="top-bar-area bg-theme text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 basic-info text-left">
                <ul>
                    <li>Total Items: <a href="<?= $url_root ?>search-product"><?= $total_themes ?></a></li>
                    <li>Community Users: <strong>397877</strong></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 login-info text-right">
                <a href="<?= $url_root ?>profile"><i class="fas fa-user"></i> <?= $_SESSION['username'] ?></a>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header 
    ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-border bootsnav">

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="badge">3</span>
                        </a>
                        <ul class="dropdown-menu cart-list">
                            <li>
                                <a href="#" class="photo"><img src="assets/img/100x100.png" class="cart-thumb"
                                        alt="" /></a>
                                <h6>Examin - Education and LMS Theme</h6>
                                <p>$49.00</p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="<?= $logo_png_right_black ?>" class="cart-thumb"
                                        alt="" /></a>
                                <h6>Rescaf - Food & Restaurant Template</h6>
                                <p>$17.00</p>
                            </li>
                            <li class="total">
                                <span class="pull-right"><strong>Total</strong>: $66.00</span>
                                <a href="#" class="btn btn-default btn-cart">Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-heart"></i>
                            <span class="badge">0</span>
                        </a>
                        <ul class="dropdown-menu cart-list">
                            <li>
                                <a href="#" class="photo"><img src="assets/img/100x100.png" class="cart-thumb"
                                        alt="" /></a>
                                <h6>Examin - Education and LMS Theme</h6>
                                <p>$49.00</p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="<?= $logo_png_right_black ?>" class="cart-thumb"
                                        alt="" /></a>
                                <h6>Rescaf - Food & Restaurant Template</h6>
                                <p>$17.00</p>
                            </li>
                            <li class="total">
                                <span class="pull-right"><strong>Total</strong>: $66.00</span>
                                <a href="#" class="btn btn-default btn-cart">Checkout</a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="<?= $logo_png_right_black ?>" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">

                    <li> <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Home</a></li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu animated" style="display: none; opacity: 1;">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="author-profile.html">Author Profile</a></li>
                            <li><a href="search-product.html">Search Product</a></li>
                            <li><a href="product-single.html">Product Single</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="404.html">Error Page</a></li>
                        </ul>
                    </li>

                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">All Product</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Web Templates</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Corporate</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">WordPress Theme</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Creative</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Sketch PSD</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Event</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Joomla Theme</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">eCommerce </a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</header>