<?php
require('func/auth_login.php');
?>
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
            style="background: url('assets/img/page-header-bg.svg')no-repeat right bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <a href="<?= $url_root ?>" style="font-size: 20px;position: absolute;"><i
                                        class="fa-solid fa-arrow-left"></i></a>
                        <a href="<?= $url_root ?>" class="mb-4 d-block text-center"><img
                                src="<?= $logo_png_right_white ?>" alt="logo" class="img-fluid"></a>
                        <div class="register-wrap p-5 bg-light shadow rounded-custom">
                            
                            <h1 class="h3">Nice to Seeing You Again</h1>
                            <p class="text-muted">Please log in to access your account web-enabled methods of innovative
                                niches.</p>

                            <div class="action-btns">
                                <a href="#"
                                    class="btn google-btn bg-white shadow-sm mt-4 d-block d-flex align-items-center text-decoration-none justify-content-center">
                                    <img src="<?= $url_root ?>assets/img/company/google-icon.svg" alt="google"
                                        class="me-3">
                                    <span>Connect with Google</span>
                                </a>
                            </div>
                            <div class="position-relative d-flex align-items-center justify-content-center mt-4 py-4">
                                <span class="divider-bar"></span>
                                <h6 class="position-absolute text-center divider-text bg-light mb-0">Or</h6>
                            </div>
                            <p class="text-danger"><?= @$error ?></p>
                            <form method="POST" class="mt-4 register-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" name="email" placeholder="Email" id="email"
                                                required aria-label="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="password" class="mb-1">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="password" name="password" class="form-control" placeholder="Password"
                                                id="password" required aria-label="Password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="login" class="btn btn-primary mt-3 d-block w-100">Submit</button>
                                    </div>
                                </div>
                                <p class="font-monospace fw-medium text-center text-muted mt-3 pt-4 mb-0">Don't have an
                                    account? <a href="<?= $url_root ?>register" class="text-decoration-none">Sign up
                                        Today</a>
                                    <br>
                                    <a href="<?= $url_root ?>password-reset" class="text-decoration-none">Forgot
                                        password</a>
                                </p>
                            </form>
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