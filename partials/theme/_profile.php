<div class="author__avatar online">
    <img src="https://algeriadw.ga/assets/themes/img/user-avater.png" alt="user avatar" class="rounded-circle">
</div>

<div class="dropdown dropdown--author">
    <div class="author-credits d-flex">
        <div class="author__avatar">
            <img src="https://algeriadw.ga/assets/themes/img/user-avater.png" alt="user avatar" class="rounded-circle">
        </div>
        <div class="autor__info">
            <p class="name">
                <?= $_SESSION['username'] ?>
            </p>
            <p class="amount"> <?= $_SESSION['subscribe'] ?></p>
        </div>
    </div>
    <ul>
        <li>
            <a href="<?= $url_root ?>edit">
                <span class="icon-user"></span>Profile</a>
        </li>
        <li>
            <a href="<?= $url_root ?>settings">
                <span class="icon-settings"></span> Settings</a>
        </li>
        <li>
            <a href="<?= $url_root ?>cart">
                <span class="icon-basket"></span>Purchases</a>
        </li>
        <li>
            <a href="<?= $url_root ?>fav">
                <span class="icon-heart"></span> Favourite</a>
        </li>
        <li>
            <a href="<?= $url_root ?>Download">
            <i class="fa-thin fa-download"></i>My Downloads</a>
        </li>
        <li>
            <a href="<?= $url_root ?>logout">
                <span class="icon-logout"></span>Logout</a>
        </li>
    </ul>
</div>