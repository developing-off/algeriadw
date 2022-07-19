<?php
var_dump($_SESSION);
$sql = $pdo->prepare("SELECT name_author FROM themes_author WHERE id_user = :id");
$sql->execute(['id' => $_SESSION['id']]);
$name_author = $sql->fetchColumn();
var_dump($name_author);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('partials/_head.php') ?>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKBKXZD" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--preloader start-->
    <?php require('partials/_loader.php') ?>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <!--header section start-->
        <!--header start-->
        <header class="main-header position-absolute w-100">
            <?php require('include/navbar.php') ?>
        </header>
        <!--header end-->
        <!--header section end-->


        <section class="sign-up-in-section bg-dark ptb-120" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom right">
            <div class="container">
                <div class="row align-items-center justify-content-between">

                    <div class="col-xl-12 col-lg-7 col-md-12 order-0 order-lg-1">
                        <div class="register-wrap p-5 bg-white shadow align-items-center rounded-custom mt-5 mt-lg-0 mt-xl-0">


                            <div class="col-sm-12 align-items-center">
                                <div class="author-info">
                                    <div class="thumb col-md-2 col-md-offset-0 col-sm-3 col-sm-offset-3">
                                        <img src="https://api.algeriadw.studio/img/profile-default/JPG-men/profile-4.png" alt="profile-avatar">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <h4>Thespikeone</h4>
                                </div>
                            </div>


                            <form action="#" class="mt-4 register-form">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="FirstName">Name <span style="color: red;">*</span>: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="name" value="<?= $_SESSION['name'] ?>" name="name" aria-label="Name">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <label for="UserName">Username <span style="color: red;">*</span>: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="username" value="<?= $_SESSION['username'] ?>" name="username" aria-label="UserName">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="mkusername">Marketplace Username <span style="color: red;">*</span>: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="marketplace username" value="<?= $name_author ?>" name="market_username" aria-label="mkusername">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="Name">Email <span style="color: red;">*</span>:</label>
                                        <div class="input-group mb-3">
                                            <button type="button" class="btn btn-primary btn-sm">change</button>
                                            <input type="text" class="form-control" placeholder="<?= $_SESSION['email'] ?>" aria-label="" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="Name">Adress: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="" aria-label="">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="Name">Country: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="" aria-label="">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="Name">Postal code: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Name" aria-label="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="Name">Phone Number: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Name" aria-label="name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-4 d-block w-100">Update Profile
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .author-info img {
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 140%;
                border: 4px solid #f5ebf2;
                padding: 0px;
                box-shadow: -1px 3px 10px 0 rgb(0 0 0 / 6%);
                width: 77%;
            }
        </style>
        <!--footer section start-->
        <footer class="footer-section">
            <?php require('include/footer.php') ?>
        </footer>
        <!--footer section end-->
        <!--footer section end-->

    </div>


    <?php require('partials/_script.php') ?>
</body>

</html>