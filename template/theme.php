<?php require('partials/theme/_category.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('partials/theme/_head.php') ?>
</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top -->
    <?php  require('partials/theme/navbar.php') ?>
    <!-- End Header -->

    <!-- Start Search Header 
    ============================================= -->
    <div class="search-header bg-fixed text-center text-light"
        style="background-image: url(https://algeriadw.ga/assets/themes/img/banner/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="hero-box">
                        <h2><?= $total_themes ?> Premium Bootstrap Templates & Website Themes</h2>
                        <ul>
                            <li>Themes</li>
                            <li>Templates </li>
                            <li>PSD</li>
                        </ul>
                    </div>
                    <div class="search-box">
                        <form action="#">
                            <input type="text" placeholder="Search" class="form-control" name="search">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Header -->

    <!-- Start Features Product
    ============================================= -->
    <div class="featured-product-area bg-gray default-padding">
        <?php require('include/theme/features.php') ?>
    </div>
    <!-- End Features Product -->

    <!-- Start New Product 
    ============================================= -->
    <div class="front-page-product-area product default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading inc-btn">
                        <h4>Newly Added</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-box">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <?php foreach ($category as $catg) {
                            ?>
                            <li <?php if($catg['id'] == 1){ echo 'class="active"'; }  ?>>
                                <a data-toggle="tab" href="#tab<?= $catg['id'] ?>"
                                    <?php if($catg['id'] == 1){ echo 'aria-expanded="true"'; }else{ echo 'aria-expanded="false"'; }  ?>>
                                    <span><?= $catg['name_category'] ?></span>
                                </a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Tab Content -->
                            <?php require('include/theme/new_added.php') ?>
                            <!-- End Single Tab Content -->
                        </div>
                        <!-- End Tab Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End New Product -->

    <!-- Start Trend Product 
    ============================================= -->
    <div class="trend-product-area product shadow-less bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading inc-btn">
                        <h4>Top Rated</h4>
                    </div>
                </div>
                <div class="trend-items">
                    <!-- Single Item -->
                    <?php require('include/theme/trend_item.php') ?>
                </div>
                <div class="col-md-12 more-btn text-center">
                    <a class="btn btn-theme effect circle btn-md" href="#">Viwe All <i class="fas fa-spinner"></i></a>
                </div>
                <!-- End More Button Item -->
            </div>
        </div>
    </div>
    </div>
    <!-- End New Product -->

    <!-- Start Why Chose Us
    ============================================= -->
    <div class="why-us-area default-padding bg-dark text-light">
    <?php require('include/theme/why_us.php') ?>
    </div>
    <!-- End Why Chose Us -->

    <!-- Start Top Category
    ============================================= -->
    <div class="top-cats-area product default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading inc-btn">
                        <h4>Top Category</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="top-cat-items">
                            <!-- Single Item -->
                            <?php require('include/theme/top_category.php') ?>
                            <!-- End Single Item -->    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><
    <!-- End Top Category -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark">
        <?php require('partials/theme/footer.php') ?>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <?php require('partials/theme/_script.php'); ?>

</body>

</html>