<?php
if(empty($url[1])){
    header("Location:". $url_root);
}else{
    @$error = '';
    require('func/auth_confirm.php');
}
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
            style="background: url('<?= $url_root ?>assets/img/page-header-bg.svg')no-repeat right bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <a href="<?= $url_root ?>" style="font-size: 20px;position: absolute;"><i
                                class="fa-solid fa-arrow-left"></i></a>
                        <a href="<?= $url_root ?>" class="mb-4 d-block text-center"><img
                                src="<?= $logo_png_right_white ?>" alt="logo" class="img-fluid"></a>
                        <div class="register-wrap p-5 bg-light shadow rounded-custom">
                            <h1 class="fw-bold h3">Two-Step Verification</h1>
                            <p class="text-muted">We’ve sent a verification code to
                                your email..</p>
                            <p class="text-danger"><?= $error ?> </p>

                            <form method="POST" id="otp-form" class="mt-5 register-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">Code <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input placeholder="0" type="text" name="otp_code[]" class="fxt-form-col otp-input form-control" maxlength="1"
                                                required="required">
                                            <input placeholder="0" type="text" name="otp_code[]" class="fxt-form-col otp-input form-control" maxlength="1"
                                                required="required">
                                            <input placeholder="0" type="text" name="otp_code[]" class="fxt-form-col otp-input form-control" maxlength="1"
                                                required="required">
                                            <input placeholder="0" type="text" name="otp_code[]" class="fxt-form-col otp-input form-control" maxlength="1"
                                                required="required">
                                            <input placeholder="0" type="text" name="otp_code[]" class="fxt-form-col otp-input form-control" maxlength="1"
                                                required="required">
                                            <input placeholder="0" type="text" name="otp_code[]" class="fxt-form-col otp-input form-control" maxlength="1"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="otp_verf" class="btn btn-primary mt-3 d-block w-100">Verify
                                        </button>
                                    </div>
                                </div>
                                <p class="font-monospace fw-medium text-center mt-1 mb-0">
                                    <a href="<?= $url_root ?>send_confirm/<?= $token ?>" class="text-decoration-none">Send New code</a>
                                </p>
                                <p class="font-monospace fw-medium text-center mt-1 mb-0">
                                    <a href="<?= $url_root ?>" class="text-decoration-none">Back to Home</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
        .fxt-form-col {
            padding: 10px 5px !important;
            text-align: center !important;
            margin-right: 10px !important;
            flex-basis: 0 !important;
            flex-grow: 1 !important;
        }
        </style>
        <!--register section end-->
    </div>


    <!--build:js-->
    <?php require('partials/_script.php') ?>
    <script>
    $("#otp-form .otp-input").keyup(function() {
        if (this.value.length == this.maxLength) {
            $(this).next('.otp-input').focus();
        }
    });
    </script>
    <!--endbuild-->
</body>

</html>