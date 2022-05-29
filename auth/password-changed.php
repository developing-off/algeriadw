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
        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-60"
            style="background: url('<?= $url_root ?>assets/img/page-header-bg.svg')no-repeat right bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <a href="<?= $url_root ?>" style="font-size: 20px;position: absolute;"><i
                                class="fa-solid fa-arrow-left"></i></a>
                        <a href="<?= $url_root ?>" class="mb-4 d-block text-center"><img
                                src="<?= $logo_png_right_white ?>" alt="logo" class="img-fluid"></a>
                        <div class="register-wrap p-5 bg-light shadow rounded-custom">
                            <h1 class="fw-bold h3">Change Your Password</h1>
                            <p class="text-success"><b> Your Password has been changed </b></p>
                            <div class="row">
                                <div class="col-12">
                                    <a style="text-decoration: none;" href="<?= $url_root ?>login">
                                    <button style="text-decoration: none;"
                                        class="btn btn-primary mt-3 d-block w-100">Go to Login
                                    </button>
                                    </a>
                                </div>
                            </div>
                            <p class="font-monospace fw-medium text-center mt-3 pt-4 mb-0">
                                <a href="<?= $url_root ?>" class="text-decoration-none">Back to home page</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->
    </div>
    <!--build:js-->
    <?php require('partials/_script.php') ?>

    <!--endbuild-->
</body>

</html>