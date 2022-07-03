<!DOCTYPE html>
<html lang="en">
<?php require('partials/theme/_category.php'); #var_dump($themes,$_SESSION) 
?>

<head>
    <?php require('partials/theme/_head.php') ?>
</head>

<body>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
    <?php require('partials/theme/navbar.php') ?>

    <div class="author-profile-area shadow-less bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="author-info">
                    <div class="thumb col-md-2 col-md-offset-0 col-sm-3 col-sm-offset-3">
                        <img src="https://algeriadw.studio/assets/themes/img/team/1.jpg" alt="Thumb">
                    </div>
                    <div class="profile-info col-md-10 col-sm-12">
                        <div class="top-info">
                            <div class="bio">
                                <h4><?= $_SESSION['name_author'] ?></h4>
                                <p>
                                    Member since
                                    <?php $date_join = date_create($_SESSION['date_join']);
                                    echo date_format($date_join, "F. Y") ?>
                                </p>
                                <?php if ($_SESSION['id'] == $themes_author_check[0]['id_user']) {
                                } else {
                                ?>
                                    <a href="#">Follow</a>
                                <?php
                                } ?>

                            </div>
                            <div class="item-info">
                                <ul>
                                    <li>
                                        <h5><?= $total_themes_author ?></h5>
                                        <span>Total Items</span>
                                    </li>
                                    <li>
                                        <h5>0</h5>
                                        <span>Total Sales</span>
                                    </li>
                                    <li>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>(0)</span>
                                        </div>
                                        <span>Author Rating</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Start Author Content -->
                        <div class="author-content trend-product-area shadow-less">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                        <span>Portfolio</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        <span>Following <strong>0</strong></span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                        <span>Followers <strong>0</strong></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $url_root ?>themes/downloads-profile">
                                        <span><i class="fa-solid fa-download"></i> Download</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $url_root ?>themes/settings-profile">
                                        <span><i class="fa-solid fa-gear"></i> Settings</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Tab Nav -->
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">

                                <!-- Single Tab Content -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="author-portfolio trend-items">
                                        <div class="row">
                                            <!-- Single Item -->
                                            <?php foreach ($themes_by_author as $themeauthor) : ?>
                                                <div class="col-md-4 col-sm-6 single-item">
                                                    <div class="item">
                                                        <div class="thumb">
                                                            <a href="#"><img src="<?= $themeauthor['image_path'] ?>" alt="Thumb"></a>
                                                        </div>
                                                        <div class="info-box">
                                                            <div class="top-info">
                                                                <h4>
                                                                    <a href="#"><?= $themeauthor['title'] ?></a>
                                                                </h4>
                                                                <div class="author">

                                                                    <span><a href="#"><?= $themeauthor['tags'] ?></a> / <a href="#"><?= $themeauthor['technology'] ?></a></span>
                                                                </div>
                                                                <div class="item-type">
                                                                    <p><i class="fas fa-shopping-cart"></i> <?= $themeauthor['download_number'] ?> Sales</p>
                                                                    <div class="rating">
                                                                        <div class="four-out-of-five">
                                                                            <i class="far fa-star"></i>
                                                                            <i class="far fa-star"></i>
                                                                            <i class="far fa-star"></i>
                                                                            <i class="far fa-star"></i>
                                                                            <i class="far fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bottom-info">
                                                                <div class="item-preview">
                                                                    <a href="#">Preview</a>
                                                                </div>
                                                                <div class="price">
                                                                    <h4>DZ <?= $themeauthor['price'] ?></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab Content -->

                                <!-- Single Tab Content -->
                                <div id="tab2" class="tab-pane fade">
                                    <div class="followers row">
                                        <div class="item">
                                            <a href="#">
                                                <img src="https://algeriadw.studio/assets/themes/img/top-cat/1.jpg" alt="Thumb">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <!-- End Single Tab Content -->

                                <!-- Single Tab Content -->
                                <div id="tab3" class="tab-pane fade">
                                    <div class="following row">
                                        <div class="item">
                                            <a href="#">
                                                <img src="https://algeriadw.studio/assets/themes/img/top-cat/1.jpg" alt="Thumb">
                                            </a>
                                        </div>

                                    </div>

                                </div>
                                <!-- End Single Tab Content -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Authro Profile -->
    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark">
        <?php require('partials/theme/footer.php') ?>
    </footer>
    <!-- End Footer -->
    <?php require('partials/theme/_script.php'); ?>
</body>

</html>