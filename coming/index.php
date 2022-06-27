<?php
require('function/pdo.php');
if(isset($_POST['subscribe-form-submit'])){
    require('function/get_info.php');
    require('function/mails/notif.php');
    $email = $_POST['subscribe-form-email'];
    

    require('function/sub.php');
}

 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="../api/img/awd.svg" rel="icon">
    <title>ADW - Coming Soon</title>
    <meta name="description" content="Our New website">
    <meta name="author" content="Algeria Dev Web">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900'
        type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min-2.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min-2.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min-2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/stylesheet-2.css">
    <link id="color-switcher" rel="stylesheet" type="text/css" href="assets/css/color-yellow-1.css">
</head>

<body>

    <div class="preloader preloader-dark">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div id="main-wrapper" class="bg-dark">

        <!-- Header -->
        <header id="header">
            <!-- Navbar -->
            <nav class="primary-menu navbar navbar-expand-md navbar-text-light bg-transparent border-bottom-0">
                <div class="container position-relative">
                    <div class="col-auto col-lg-2">
                        <!-- Logo -->
                        <a class="logo" style="width: 58px;" href="index-2.html" title="adw"> <img
                                src="../api/img/awd.svg" alt="adw"> <span style="text-decoration: none; color:white;">
                                AlgeriaDW</span> </a>
                        <!-- Logo End -->
                    </div>
                    <div class="col navbar-accordion px-0">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                            data-bs-target="#header-nav"><span></span><span></span><span></span></button>

                    </div>
                    <div class="col-auto d-flex justify-content-end">
                        <ul class="social-icons social-icons-light">
                            <!-- <li class="social-icons-twitter"><a data-bs-toggle="tooltip" href="http://www.twitter.com/"
                                    target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li> -->
                            <li class="social-icons-facebook"><a data-bs-toggle="tooltip"
                                    href="https://www.facebook.com/algeriadw" target="_blank" title="Facebook"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li class="social-icons-instagram"><a data-bs-toggle="tooltip"
                                    href="https://www.instagram.com/algeriadw_/" target="_blank" title="Instagram"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container py-4 py-lg-0">
            <div class="row min-vh-100">

                <div class="col-lg-8 align-items-center d-flex flex-column py-5">
                    <div class="row py-5 my-auto text-center text-lg-start">
                        <div class="col-auto text-white text-center mx-auto mx-lg-0 mb-4 pb-2">
                            <div class="countdown" data-countdown-end="2022/07/30 13:00:00"></div>
                        </div>
                        <div class="col-12 mx-auto">
                            <h1 class="text-9 bg-primary d-inline-block fw-700 rounded px-3 py-2 mb-4">Coming Soon!</h1>
                            <h2 class="text-15 text-white fw-600 mb-4">Our new website is on its way.</h2>
                        </div>
                        <div class="col-md-8 col-lg-9 col-xl-8 mx-auto me-lg-auto ms-lg-0">
                            <p class="text-5 text-light mb-3">Get notified when we launch.</p>
                            <!-- Subscribe Form -->
                            <div class="subscribe-form">
                                <form class="form-dark" role=" form" method="post">
                                    <div class="input-group">
                                        <input type="email" name="subscribe-form-email"
                                            class="form-control border-dark required" required=""
                                            placeholder="Enter Your Email Here..">

                                        <button id="subscribe-form-submit" name="subscribe-form-submit"
                                            class="btn btn-primary px-4 shadow-none" type="submit">
                                            <span class="d-none d-sm-block">Notify Me</span>
                                            <span class="text-4 d-block d-sm-none"><i class="fas fa-arrow-right"></i>
                                            </span></button>
                                    </div>
                                </form>
                                <br>
                                <?php
                                if(!empty($_GET['subscribed'])){
                                    if($_GET['subscribed'] === 'false'){
                                        echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error!</strong> You have already subscribed.
                                        </div>';
                                        }elseif($_GET['subscribed'] == true){
                                        echo '<div class="alert alert-success" role="alert">
                                        <strong>Success!</strong> You have been subscribed.
                                        </div>';
                                        }
                                }
                                ?>
                            </div>
                            <!-- Subscribe End -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-auto py-lg-5">
                    <div class="row bg-dark-2 rounded shadow-md text-center mx-0 py-4 mb-4 mb-lg-0">
                        <div class="col-11 mx-auto">
                            <h3 class="fw-600 text-white mb-3 mt-3">Contact Us</h3>
                            <p class="text-muted mb-4">For Customer Support, Send us a note.</p>
                            <form id="contact-form" class="form-dark" action="php/mail.php" method="post">
                                <div class="mb-3">
                                    <input id="name" name="name" type="text" class="form-control border-2"
                                        placeholder="Enter Your Name" required="">
                                </div>
                                <div class="mb-3">
                                    <input id="email" name="email" type="email" class="form-control border-2"
                                        placeholder="Enter Your Email" required="">
                                </div>
                                <div class="mb-3">
                                    <textarea id="form-message" name="form-message" class="form-control border-2"
                                        rows="2" placeholder="Enter Your Query" required=""></textarea>
                                </div>
                                <div class="d-grid mt-4">
                                    <button id="submit-btn" class="btn btn-primary" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min-2.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min-2.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min-2.js"></script>
    <script src="assets/vendor/jquery-form/jquery.form.min-2.js"></script>
    <script src="assets/vendor/jquery-validation/jquery.validate.min-2.js"></script>
    <script src="assets/vendor/jquery-countdown/jquery.countdown.min-1.js"></script>
    <script src="assets/js/theme-2.js"></script>
    <!-- Style Switcher -->
    <script src="assets/js/switcher.min-2.js"></script>
</body>

</html>