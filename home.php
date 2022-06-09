<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('partials/_head.php') ?>

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKBKXZD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!--preloader start-->
    <?php require('partials/_loader.php') ?>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <!--header section start-->
        <!--header start-->
        <header class="main-header position-absolute w-100">
            <?php require('include/navbar.php') ?>
        </header>
        <!--header end-->
        <!--header section end-->


        <!--hero section start-->
        <section class="hero-section ptb-120 text-white bg-gradient"
            style="background: url('https://algeriadw.ga/assets/img/hero-dot-bg.png')no-repeat center right">
            <?php require('include/home_hero.php') ?>
        </section>
        <!--hero section end-->

        <!--feature promo section start-->
        <section class="feature-promo ptb-120 bg-light">
            <?php require('include/home_feature.php') ?>

        </section>
        <!--feature promo section end-->

        <!--feature left right content start-->
        <!--why choose us section start-->
        <section class="why-choose-us ptb-120">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-5 col-12">
                        <div class="why-choose-content">
                            <div class="icon-box rounded-custom bg-primary shadow-sm d-inline-block">
                                <i class="fal fa-shield-check fa-2x text-white"></i>
                            </div>
                            <h2>Advanced Analytics, Understand Business</h2>
                            <p>we try to understand your long term vision to attract more customers to your company with unique design and functionality .
                            </p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Thought leadership
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Personal branding
                                </li>
                                <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Modernized
                                    prospecting</li>
                                </li>
                            </ul>
                            <a href="<?= $url_root ?>about-us" class="read-more-link text-decoration-none">Know More About Us <i
                                    class="far fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="feature-img-holder mt-4 mt-lg-0 mt-xl-0">
                            <img src="https://algeriadw.ga/assets/img/screen/widget-11.png" class="img-fluid"
                                alt="feature-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--why choose us section end-->

        <!--image feature section start-->
        <section class="image-feature pt-60 pb-120">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 col-12 order-lg-1">
                        <div class="feature-img-content">
                            <div class="icon-box rounded-custom bg-dark shadow-sm d-inline-block">
                                <i class="fal fa-fingerprint fa-2x text-white"></i>
                            </div>
                            <h2>Match Everything to Brand and Style</h2>
                            <p>starting by analyzing your business to allow us to create a custom website for you and in return earn money from it and match the image of your brand for users.</p>
 

                            <a href="<?= $url_root ?>about-us" class="read-more-link text-decoration-none d-block mt-4">Know More
                                About Us <i class="far fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-0">
                        <div class="feature-img-holder mt-4 mt-lg-0 mt-xl-0">
                            <img src="https://algeriadw.ga/assets/img/screen/widget-12.png" class="img-fluid"
                                alt="feature-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--image feature section end-->
        <!--our work process start-->
        <section class="work-process ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h4 class="h5 text-primary">Process</h4>
                            <h2>We Follow Our Work Process</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 col-md-12 order-1 order-lg-0">
                        <div class="img-wrap">
                            <img src="https://algeriadw.ga/assets/img/screen/widget-13.jpg" alt="work process"
                                class="img-fluid rounded-custom">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                        <ul class="work-process-list list-unstyled">
                            <li class="d-flex align-items-start mb-4">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="far fa-folder-tree fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 1</span>
                                    <h3 class="h5 mb-2">Research and Content Planing</h3>
                                    <p>we all prepare disscusion to market the website and allow to organize well.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="far fa-layer-group fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 2</span>
                                    <h3 class="h5 mb-2">Product Prototyping</h3>
                                    <p>after the first step comes the prototype which allows to see what will give at the end.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="far fa-bezier-curve fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 3</span>
                                    <h3 class="h5 mb-2">Publishing and Execution</h3>
                                    <p>vien l'etape de publication et des teste et modification des truc que vous aimer changer.
                                    </p>
                                </div>
                            </li>
                            
                            <li class="d-flex align-items-start mb-4 mb-lg-0">
                                <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                    <i class="far fa-truck fa-2x"></i>
                                </div>
                                <div class="icon-content">
                                    <span class="text-primary h6">Step 4</span>
                                    <h3 class="h5 mb-2">Deliver the Final Product</h3>
                                    <p>the last step is to deliver the final product for your company.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--our work process end-->

        <!--pricing section start-->
       <?php require('include/home_price.php') ?>
        <!--pricing section end-->

        

        <!--footer section start-->
        <footer class="footer-section">
        <?php require('include/footer.php') ?>
        </footer>
        <!--footer section end-->
        <!--footer section end-->

    </div>


    <?php require('partials/_script.php') ?>
</body>

</html>