<nav class="navbar navbar-expand-xl navbar-dark sticky-header">
    <div class="container d-flex align-items-center justify-content-lg-between position-relative">
        <a href="index-2.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
            <img src="<?= $logo_png_right_white ?>" alt="logo" class="img-fluid logo-white" />
            <img src="<?= $logo_png_right_black ?>" alt="logo" class="img-fluid logo-color" />
        </a>

        <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
            <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                aria-controls="offcanvasWithBackdrop"></span>
        </a>
        <div class="clearfix"></div>
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?php $url_root ?>home" role="button">
                        Home
                    </a>

                </li>
                <li><a href="<?php $url_root ?>services" class="nav-link">Services</a></li>
                <li><a href="<?php $url_root ?>about-us" class="nav-link">About Us</a></li>
                <li><a href="pricing.html" class="nav-link">Pricing</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Company</a>
                    <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                        <div class="dropdown-grid rounded-custom width-full">
                            <div class="dropdown-grid-item">
                                <h6 class="drop-heading">Useful Links</h6>
                                <a href="about-us.html" class="dropdown-link px-0">
                                    <span class="me-2"><i class="far fa-fingerprint"></i></span>
                                    <div class="drop-title">About Us</div>
                                </a>
                                <a href="contact-us.html" class="dropdown-link px-0">
                                    <span class="me-2"><i class="far fa-address-book"></i></span>
                                    <div class="drop-title">Contact Us</div>
                                </a>
                                <a href="services.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-code-branch"></i></span>
                                    <div class="drop-title">Services</div>
                                </a>
                                <a href="service-single.html" class="dropdown-link px-0">
                                    <span class="me-2"><i class="far fa-server"></i></span>
                                    <div class="drop-title">Services Single</div>
                                </a>

                            </div>
                            <div class="dropdown-grid-item radius-right-side bg-light">
                                <h6 class="drop-heading">Utility Pages</h6>
                                <a href="style-guide.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-code-branch"></i></span>
                                    <div class="drop-title">Style Guide</div>
                                </a>
                                <a href="support.html" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-life-ring"></i></span>
                                    <div class="drop-title">Help Center</div>
                                </a>

                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
            <?php 
            if (isset($_SESSION['logged_in'])) {
                if ($_SESSION['logged_in']== true) {
            ?>
            <a href="#" class="btn btn-link text-decoration-none me-2 nav-link dropdown-toggle" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION['username']; ?></a>
            <div style="left: 93% !important;" class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                <div class="dropdown-grid rounded-custom ">
                    <div class="dropdown-grid-item">
                        <h6 class="drop-heading">Account</h6>
                        <a href="about-us.html" class="dropdown-link px-0">
                            <span class="me-2"><i class="far fa-user"></i></span>
                            <div class="drop-title">Dashboard</div>
                        </a>
                        <a href="about-us.html" class="dropdown-link px-0">
                            <span class="me-2"><i class="far fa-edit"></i></span>
                            <div class="drop-title">Edit</div>
                        </a>
                        <a href="about-us.html" class="dropdown-link px-0">
                            <span class="me-2"><i class="far fa-shopping-basket"></i></span>
                            <div class="drop-title">Order</div>
                        </a>
                        <a href="about-us.html" class="dropdown-link px-0">
                            <span class="me-2"><i class="far fa-ticket-alt"></i></span>
                            <div class="drop-title">Ticket</div>
                        </a>
                        <a href="<?= $url_root ?>logout" class="dropdown-link px-0">
                            <span class="me-2"><i class="far fa-door-open"></i></span>
                            <div class="drop-title">Logout</div>
                        </a>
                    </div>
                </div>
            </div>

            <?php
                }
            }else{
            ?>

            <a href="<?php $url_root ?>login" class="btn btn-link text-decoration-none me-2">Sign In</a>
            <a href="<?php $url_root ?>register" class="btn btn-primary">Get Started</a>

            <?php
            }
            ?>
        </div>
        <!--offcanvas menu start-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
            <div class="offcanvas-header d-flex align-items-center mt-4">
                <a href="<?php $url_root ?>" class="d-flex align-items-center mb-md-0 text-decoration-none">
                    <img src="<?= $logo_png_right_black ?>" alt="logo" class="img-fluid ps-2" />
                </a>
                <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="far fa-close"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="<?php $url_root ?>" role="button" ">
                            Home
                        </a>
                    </li>
                    <li><a href=" <?php $url_root ?>services" class="nav-link">Services</a>
                    </li>
                    <li><a href="<?php $url_root ?>about-us" class="nav-link">About Us</a></li>
                    <li><a href="<?php $url_root ?>pricing" class="nav-link">Pricing</a></li>
                    <?php 
                    if (isset($_SESSION['logged_in'])) {
                        if ($_SESSION['logged_in']== true) {
                            ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><?= $_SESSION['username']; ?></a>
                        <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white" style="display: none;">
                            <div class="dropdown-grid rounded-custom width-full-3">
                                <div class="dropdown-grid-item">
                                    <h6 class="drop-heading">Account</h6>
                                    <a href="about-us.html" class="dropdown-link px-0">
                                        <span class="me-2"><i class="far fa-user"></i></span>
                                        <div class="drop-title">Dashboard</div>
                                    </a>
                                    <a href="about-us.html" class="dropdown-link px-0">
                                        <span class="me-2"><i class="far fa-edit"></i></span>
                                        <div class="drop-title">Edit</div>
                                    </a>
                                    <a href="about-us.html" class="dropdown-link px-0">
                                        <span class="me-2"><i class="far fa-shopping-basket"></i></span>
                                        <div class="drop-title">Order</div>
                                    </a>
                                    <a href="about-us.html" class="dropdown-link px-0">
                                        <span class="me-2"><i class="far fa-ticket-alt"></i></span>
                                        <div class="drop-title">Ticket</div>
                                    </a>
                                    <a href="<?= $url_root ?>logout" class="dropdown-link px-0">
                                        <span class="me-2"><i class="far fa-door-open"></i></span>
                                        <div class="drop-title">Logout</div>
                                    </a>

                                </div>

                            </div>
                        </div>
                    </li>
                    <?php
                        }
                    }
                ?>
                </ul>
                <div class="action-btns mt-4 ps-3">
                    <?php
                    if (!isset($_SESSION['logged_in'])) {
                   ?>
                    <a href="<?php $url_root ?>login" class="btn btn-outline-primary me-2">Sign In</a>
                    <a href="<?php $url_root ?>register" class="btn btn-primary">Get Started</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!--offcanvas menu end-->
    </div>
</nav>