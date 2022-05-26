<?php 
@$eror = '';
require('func/auth_register.php');

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
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-12">
                        <div class="pricing-content-wrap bg-custom-light rounded-custom shadow-lg">
                            <div
                                class="price-feature-col pricing-feature-info text-white left-radius p-5 order-1 order-lg-0">
                                <a href="<?= $url_root ?>" class="d-none d-xl-block d-lg-block"
                                    style="font-size: 20px;position:absolute;"><i
                                        class="fa-solid fa-arrow-left"></i></a>
                                <center>
                                    <a href="<?= $url_root ?>" class="mb-5 d-none d-xl-block d-lg-block"><img
                                            src="<?= $logo_png_right_white ?>" alt="logo" class="img-fluid"></a>
                                </center>
                                <div class="customer-testimonial-wrap mt-60">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="testimonial-tab-1" role="tabpanel">
                                            <div class="testimonial-tab-content mb-4">
                                                <div class="mb-2">
                                                    <ul class="review-rate mb-0 mt-2 list-unstyled list-inline">
                                                        <li class="list-inline-item"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i
                                                                class="fas fa-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                                <blockquote>
                                                    <h5>The Best Template You Got to Have it!</h5>
                                                    Globally network long-term high-impact schemas vis-a-vis distinctive
                                                    e-commerce
                                                    cross-media infrastructures rather than ethical sticky alignments
                                                    rather
                                                    than global.
                                                </blockquote>
                                                <div class="author-info mt-4">
                                                    <h6 class="mb-0">Imad Hakem</h6>
                                                    <span>Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-60">
                                    <div class="col-12">
                                        <p>Already trusted by some of the greatest companies</p>
                                        <ul class="list-unstyled list-inline mb-0">
                                            <?php foreach($top_clients as $client){
                                            ?>
                                            <li class="list-inline-item">
                                                <img src="<?= $client['logo_path'] ?>" width="120" alt="clients logo"
                                                    class="img-fluid py-3 me-3">
                                            </li>
                                            <?php
                                             } 
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="price-feature-col pricing-action-info p-5 right-radius bg-light order-0 order-lg-1">
                                <a href="<?= $url_root ?>" class="d-block d-xl-none d-lg-none"
                                    style="font-size: 20px;position:absolute;"><i
                                        class="fa-solid fa-arrow-left"></i></a>
                                <center>
                                    <a href="<?= $url_root ?>" class="mb-5 d-block d-xl-none d-lg-none"><img
                                            src="<?= $logo_png_right_black ?>" alt="logo" class="img-fluid"></a>
                                </center>
                                <h1 class="h3">Create an Account</h1>
                                <p class="error danger" style="color:red;"><?= @$error ?></p>

                                <p class="text-muted">Get started with your free account today. No credit card needed
                                    and no
                                    setup fees.</p>

                                <form method="POST" class="mt-5 register-form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="name" class="mb-1">Name <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="name" placeholder="Name"
                                                    id="name" required aria-label="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="username" class="mb-1">Username <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="Username" id="username" required aria-label="username">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 ">
                                            <label for="email" class="mb-1">Email <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email" id="email" required aria-label="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="password" class="mb-1">Password<span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Password" id="password"
                                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" aria-label="password">

                                                <button class="btn"
                                                    style="background-color: white;border-color: rgba(0, 0, 0, 0.08);"
                                                    onclick="show_password()" type="button" id="button-addon2"><i
                                                        class="fa-solid fa-eye"></i></button>
                                            </div>
                                            <div id="message">
                                                <p id="letter" class="text-danger"><b>lowercase</b> letter, <span
                                                        id="capital" class="text-danger"><b>capital (uppercase)</b>
                                                        letter,</span> <span id="number" class="text-danger">One
                                                        <b>number,</b></span> <span id="length"
                                                        class="text-danger">Minimum
                                                        <b>8 characters</b></span> </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="password" class="mb-1">Confirm Password <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" name="cpassword"
                                                    placeholder="Confirm Password" id="cpassword" required
                                                    aria-label="cPassword">
                                            </div>
                                            <div class="verf">
                                                <p id="does-match" class="text-danger"><b>Password does not match</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check d-flex">
                                                <input class="form-check-input me-2" type="checkbox" name="terms_agree"
                                                    value="agree" id="flexCheckChecked" required>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    I have read and agree to the <a href="#"
                                                        class="text-decoration-none">Terms
                                                        & Conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button name="register_adw" type="submit"
                                                class="btn btn-primary mt-4 d-block w-100">Submit</button>
                                        </div>
                                    </div>
                                    <div
                                        class="position-relative d-flex align-items-center justify-content-center mt-4 py-4">
                                        <span class="divider-bar"></span>
                                        <h6 class="position-absolute text-center divider-text bg-light mb-0">Or</h6>
                                    </div>
                                    <div class="action-btns">
                                        <a href="#"
                                            class="btn google-btn mt-4 d-block bg-white shadow-sm d-flex align-items-center text-decoration-none justify-content-center">
                                            <img src="<?= $url_root ?>assets/img/company/google-icon.svg" alt="google"
                                                class="me-3">
                                            <span>Sign up with Google</span>
                                        </a>
                                    </div>
                                    <p class="text-center text-muted mt-4 mb-0 fw-medium font-monospace">Already have an
                                        account? <a href="<?= $url_root ?>login" class="text-decoration-none">Sign
                                            in</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->
    </div>
    <!--main content wrapper end-->
    <!--build:js-->
    <?php require('partials/_script.php') ?>
    <script>
    function show_password() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        var y = document.getElementById("cpassword");
        if (y.type === "password") {
            y.type = "text";
        } else {
            y.type = "password";
        }
    }
    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#cpassword").val();
        var does_match = document.getElementById("does-match");
        if (password != confirmPassword) {
            $("#does-match").html("<b>Passwords do not match!</b>");
            does_match.classList.remove("text-success");
            does_match.classList.add("text-danger");
        } else {
            $("#does-match").html("<b>Passwords match.</b>");
            does_match.classList.remove("text-danger");
            does_match.classList.add("text-success");
        }
    }
    $(document).ready(function() {
        $("#cpassword").keyup(checkPasswordMatch);
    });
    </script>
    <script>
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }
    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }
    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("text-danger");
            letter.classList.add("text-success");
        } else {
            letter.classList.remove("text-success");
            letter.classList.add("text-danger");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("text-danger");
            capital.classList.add("text-success");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("text-danger");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("text-danger");
            number.classList.add("text-success");
        } else {
            number.classList.remove("text-success");
            number.classList.add("text-danger");
        }

        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("text-danger");
            length.classList.add("text-success");
        } else {
            length.classList.remove("text-success");
            length.classList.add("text-danger");
        }
    }
    </script>
    <!--endbuild-->
</body>

</html>