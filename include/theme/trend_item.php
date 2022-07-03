<?php foreach ($themes as $theme) {
?>
    <div class="col-md-4 col-sm-6 equal-height">
        <div class="item">
            <div class="thumb">
                <a href="#"><img src="<?= $theme['image_path'] ?>" alt="Thumb"></a>
            </div>
            <div class="info-box">
                <div class="top-info">
                    <h4>
                        <a href="#"><?= $theme['title'] ?></a>
                    </h4>
                    <div class="author">
                        by <a href="#"><?= $theme['name_author'] ?></a> in
                        <span><a href="#"><?= $theme['tags'] ?></a> / <a href="#"><?= $theme['technology'] ?></a></span>
                    </div>
                    <div class="item-type">
                        <a href="#"><?= $theme['icon_category'] ?> <?= $theme['name_category'] ?></a>

                        <div class="rating">
                            <div class="four-out-of-five">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="bottom-info">
                    <div class="item-preview">
                        <a href="#">Preview</a>
                    </div>
                    <div class="price">
                        <h4>DZ<?= $theme['price'] ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
} ?>