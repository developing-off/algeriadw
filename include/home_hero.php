<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-10">
            <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                <h1 class="fw-bold display-5">Build A Better
                    Digital Product Marketplace</h1>
                <p class="lead">AlgeriaDW is the most powerful, & customizable template for Easy Digital
                    Downloads Products.</p>
                <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                    <a href="request-demo.html" class="btn btn-primary me-3">Custom Template</a>
                    <a href="<?= $url_root ?>themes"
                        class="text-decoration-none d-inline-flex align-items-center watch-now-btn mt-3 mt-lg-0 mt-md-0">
                        <i class="fa-solid fa-eye"></i> Our Template </a>
                </div>
                <div class="row justify-content-lg-start mt-60">
                    <h6 class="text-white-70 mb-2">Our Top Clients:</h6>
                    <?php foreach($top_clients as $client){
                    ?>
                    <div class="col-4 col-sm-3 my-2 ps-lg-0">
                        <img src="<?= $client['logo_path'] ?>" alt="client" class="img-fluid">
                    </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-8 mt-5">
            <div class="hero-img position-relative circle-shape-images">
                <!--animated shape start-->
                <ul class="position-absolute animate-element parallax-element circle-shape-list">
                    <li class="layer" data-depth="0.03">
                        <img src="https://algeriadw.ga/assets/img/shape/circle-1.svg" alt="shape"
                            class="circle-shape-item type-0 hero-1">
                    </li>
                    <li class="layer" data-depth="0.02">
                        <img src="https://algeriadw.ga/assets/img/shape/circle-1.svg" alt="shape"
                            class="circle-shape-item type-1 hero-1">
                    </li>
                    <li class="layer" data-depth="0.04">
                        <img src="https://algeriadw.ga/assets/img/shape/circle-1.svg" alt="shape"
                            class="circle-shape-item type-2 hero-1">
                    </li>
                    <li class="layer" data-depth="0.04">
                        <img src="https://algeriadw.ga/assets/img/shape/circle-1.svg" alt="shape"
                            class="circle-shape-item type-3 hero-1">
                    </li>
                    <li class="layer" data-depth="0.03">
                        <img src="https://algeriadw.ga/assets/img/shape/circle-1.svg" alt="shape"
                            class="circle-shape-item type-4 hero-1">
                    </li>
                    <li class="layer" data-depth="0.03">
                        <img src="https://algeriadw.ga/assets/img/shape/circle-1.svg" alt="shape"
                            class="circle-shape-item type-5 hero-1">
                    </li>
                </ul>
                <!--animated shape end-->
                <img src="https://algeriadw.ga/assets/img/hero/hero.svg" alt="hero img"
                    class="img-fluid position-relative z-5">
            </div>
        </div>
    </div>
</div>