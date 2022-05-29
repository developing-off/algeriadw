<?php
require('func/auth_register_complet.php');
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

                        <a href="#" class="mb-4 d-block text-center"><img src="<?= $logo_png_right_white ?>" alt="logo"
                                class="img-fluid"></a>
                        <div class="register-wrap p-5 bg-light shadow rounded-custom">

                            <h1 class="h3">Complete Information Account</h1>
                            <p class="text-muted">Please Enter this information below</p>

                            <form method="POST" class="mt-4 register-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="address" class="mb-1">Address <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="address" class="form-control" name="address"
                                                placeholder="address" id="address" required aria-label="address">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="dof" class="mb-1">Date of birth <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="date" class="form-control" name="dof"
                                                placeholder="Date of Birth" id="dof" required aria-label="dof">


                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="Country" class="mb-1">Country <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="country" placeholder="Country"
                                                id="Country" required aria-label="Country">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="City" class="mb-1">City <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="city" placeholder="City"
                                                id="City" required aria-label="City">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="Phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="Phone" class="form-control" name="phone"
                                                placeholder="+21300000" id="Phone" required aria-label="Phone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="info_comp"
                                            class="btn btn-primary mt-3 d-block w-100">Submit</button>
                                    </div>
                                </div>

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