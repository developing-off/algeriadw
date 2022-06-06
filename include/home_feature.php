<?php 
$sql=$pdo->prepare("SELECT * FROM section_feature ORDER BY last_update Limit 3");
$sql->execute();
$features=$sql->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
            <div class="section-heading text-center">
                <h2>With all the Features You Need</h2>
                <p>the principle functionality that we offer you.</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <?php foreach($features as $feature): ?>
            <div class="col-lg-4 col-md-6">
            <div class="single-feature-promo p-lg-5 p-4 text-center mt-3">
                <div class="feature-icon icon-center pb-5 rounded-custom <?= $feature['color'] ?>">
                    <i class="<?= $feature['icon'] ?> fa-2x text-white"></i>
                </div>
                <div class="feature-info-wrap">
                    <h3 class="h5"><?= $feature['title'] ?></h3>
                    <p><?= $feature['descr'] ?> </p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
       
    </div>
    <!-- <div class="row pt-lg-5 pt-3">
        <div class="col-lg-6 mt-4">
            <div class="position-relative d-flex flex-column h-100 flex-wrap bg-danger-soft p-5 rounded-custom">
                <div class="cta-left-info mb-2">
                    <h5>Utilize your software data</h5>
                    <p>Progressively reinvent models and niche revolutionary benefits for integrated niches.
                    </p>
                </div>
                <div class="mt-auto">
                    <a href="request-demo.html" class="btn btn-outline-primary btn-sm">Start For Free</a>
                </div>
                <div class="cta-img position-absolute right-0 bottom-0">
                    <img src="https://algeriadw.ga/assets/img/cta-img-1.png" alt="cta img" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4">
            <div class="position-relative d-flex flex-column h-100 flex-wrap bg-primary-soft p-5 rounded-custom">
                <div class="cta-left-info mb-2">
                    <h5>Get real time updated anytime</h5>
                    <p>Progressively reinvent models and niche revolutionary benefits for integrated niches.
                    </p>
                </div>
                <div class="mt-auto">
                    <a href="request-demo.html" class="btn btn-outline-primary btn-sm">Start For Free</a>
                </div>
                <div class="cta-img position-absolute right-0 bottom-0">
                    <img src="https://algeriadw.ga/assets/img/cta-img-2.png" alt="cta img" class="img-fluid">
                </div>
            </div>
        </div>
    </div> -->
</div>
