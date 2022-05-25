<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('partials/_head.php') ?>

</head>

<body>

    <!--preloader start-->
    <?php require('partials/_loader.php') ?>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--404 section start-->
        <section class="error-section ptb-120 bg-dark min-vh-100 w-100 d-flex flex-column justify-content-center"
            style="background: url('<?= $url_root ?>assets/img/page-header-bg.svg')no-repeat bottom right">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="error-page-content-wrap">
                            <h2 class="error-404 text-warning">404</h2>
                            <h1 class="display-5 fw-bold">Page Not Found</h1>
                            <p class="lead">You may have mis-typed the URL.
                                Or the page has been removed.
                                Actually, there is nothing to see here...
                                Click on the links below to do something, Thanks! </p>

                            <a href="<?= $url_root ?>" class="btn btn-primary mt-4">Go Back Home</a>
                            <a href="<?= $url_root ?>report" class="btn btn-primary mt-4">Write Us</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 mt-5 d-none d-md-block d-lg-block">
                        <div class="hero-img position-relative circle-shape-images">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element circle-shape-list">
                                <li class="layer" data-depth="0.03">
                                    <img src="<?= $url_root ?>assets/img/shape/circle-1.svg" alt="shape"
                                        class="circle-shape-item type-0 hero-1">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img src="<?= $url_root ?>assets/img/shape/circle-1.svg" alt="shape"
                                        class="circle-shape-item type-1 hero-1">
                                </li>
                                <li class="layer" data-depth="0.04">
                                    <img src="<?= $url_root ?>assets/img/shape/circle-1.svg" alt="shape"
                                        class="circle-shape-item type-2 hero-1">
                                </li>
                                <li class="layer" data-depth="0.04">
                                    <img src="<?= $url_root ?>assets/img/shape/circle-1.svg" alt="shape"
                                        class="circle-shape-item type-3 hero-1">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="<?= $url_root ?>assets/img/shape/circle-1.svg" alt="shape"
                                        class="circle-shape-item type-4 hero-1">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="<?= $url_root ?>assets/img/shape/circle-1.svg" alt="shape"
                                        class="circle-shape-item type-5 hero-1">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <img src="<?= $url_root ?>assets/img/error/404.png" alt="hero img"
                                class="img-fluid position-relative z-5">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--404 section end-->

    </div>


    <!--build:js-->
    <?php require('partials/_script.php') ?>
    <!--endbuild-->
</body>

</html>