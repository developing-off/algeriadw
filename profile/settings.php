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
                        <img src="<?= $_SESSION['img-profile'] ?>" alt="Thumb">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-single-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="product-description">
                    <div class="col-md-8 product-info">
                        <!-- Start Tab Navbar -->
                        
                        <!-- End Tab Navbar -->
                        <!-- Start Tab Content -->
                        <div class="tab-content">

                            <!-- Tab Single -->
                            <div id="tab1" class="tab-pane fade active in">
                               
                                <div class="description">
                                    
                                   
                                    <h4>Item Features</h4>
                                    <ul>
                                        <li>Build with HTML5,CSS3,Bootstrap</li>
                                        <li>Bootstrap 4.x</li>
                                        <li>Font Awesome</li>
                                        <li>Google Fonts</li>
                                        <li>Working Contact Form</li>
                                        <li>Eye Catching Design</li>
                                        <li>W3C Validated Code</li>
                                        <li>Free Support</li>
                                    </ul>

                                    <h4>File Included</h4>
                                    <ul>
                                        <li>HTML files</li>
                                        <li>CSS files</li>
                                        <li>JS files</li>
                                        <li>PHP file</li>
                                        <li>Free Images</li>
                                        <li>Documentation</li>
                                    </ul>
                                    <h4>Credits and Sources</h4>
                                    <ul>
                                        <li><a href="#">jQuery JavaScript Library</a></li>
                                        <li><a href="#">Bootstrap</a></li>
                                        <li><a href="#">Font Awesome</a></li>
                                        <li><a href="#">Wow Animation</a></li>
                                    </ul>
                                </div>
                                <!-- Start Related Item -->
                                
                                <!-- End Related Item -->
                            </div>
                            <!-- End Tab Single -->
                        </div>
                        <!-- End Tab Content -->
                    </div>

                    <!-- Start Product Sidebar -->
                    <div class="col-md-4 product-sidebar">
                        <!-- Single Widget -->
                        <div class="sidebar-item purchase-info">
                        <a href="#" class="btn btn-theme border btn-sm"> Update Profile</a>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <!-- End Product Sidebar -->
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