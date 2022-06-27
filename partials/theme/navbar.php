
    <div class="top-bar-area bg-theme text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 basic-info text-left">
                    <ul>
                        <li>Total Items: <a href="#">319</a></li>
                        <li>Community Users: <strong>397877</strong></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 login-info text-right">
                    <a href="#"><i class="fas fa-user"></i> <?= $_SESSION['username'] ?></a>
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

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                                <i class="fa fa-shopping-cart"></i>
                                <span class="badge">3</span>
                            </a>
                            <ul class="dropdown-menu cart-list">
                                <li>
                                    <a href="#" class="photo"><img src="assets/img/100x100.png" class="cart-thumb" alt="" /></a>
                                    <h6>Examin - Education and LMS Theme</h6>
                                    <p>$49.00</p>
                                </li>
                                <li>
                                    <a href="#" class="photo"><img src="<?= $logo_png_right_black ?>" class="cart-thumb" alt="" /></a>
                                    <h6>Rescaf - Food & Restaurant Template</h6>
                                    <p>$17.00</p>
                                </li>
                                <li class="total">
                                    <span class="pull-right"><strong>Total</strong>: $66.00</span>
                                    <a href="#" class="btn btn-default btn-cart">Checkout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version One</a></li>
                                <li><a href="index-2.html">Home Version Two</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
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
                                                    <li><a href="#">Admin Template</a></li>
                                                    <li><a href="#">Wedding</a></li>
                                                    <li><a href="#">Education</a></li>
                                                    <li><a href="#">Hospital</a></li>
                                                    <li><a href="#">Charity</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">WordPress Theme</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Creative</a></li>
                                                    <li><a href="#">Real Estate</a></li>
                                                    <li><a href="#">Megazine</a></li>
                                                    <li><a href="#">Sports</a></li>
                                                    <li><a href="#">Entertainment</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Sketch PSD</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">Event</a></li>
                                                    <li><a href="#">Business</a></li>
                                                    <li><a href="#">Non Profit</a></li>
                                                    <li><a href="#">Education</a></li>
                                                    <li><a href="#">Hospital</a></li>
                                                    <li><a href="#">Blog</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Joomla Theme</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">eCommerce </a></li>
                                                    <li><a href="#">Elementor </a></li>
                                                    <li><a href="#">Creative </a></li>
                                                    <li><a href="#">Multipurpose </a></li>
                                                    <li><a href="#">Portfolio </a></li>
                                                    <li><a href="#">Retail </a></li>
                                                </ul>
                                            </div>
                                        </div><!-- end col-3 -->
                                    </div><!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">New</a>
                        </li>
                        <li>
                            <a href="#">Popular</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                <li><a href="blog-standard.html">Standard</a></li>
                                <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                                <li><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                                <li><a href="single.html">Single</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>