<?php


    require('func/auth_password_change.php')
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
                            <h1 class="fw-bold h3">Change Your Password</h1>
                            <p class="text-danger"><?= @$error ?></p>
                            <p class="text-success"><?= @$success ?></p>
                            <form method="POST" class="mt-5 register-form">
                                <div class="row">

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
                                                    <b>number,</b></span> <span id="length" class="text-danger">Minimum
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
                                        <button type="submit" name="change_password"
                                            class="btn btn-primary mt-3 d-block w-100">Reset
                                            Password
                                        </button>
                                    </div>
                                </div>
                                <p class="font-monospace fw-medium text-center mt-3 pt-4 mb-0">
                                    <a href="<?= $url_root ?>login" class="text-decoration-none">Back to login page</a>
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