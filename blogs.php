<?php
    include 'helpers/instagram_feed.php';
    require_once('partials/header.inc.php');
?>

<div class="blogs max-width">
    <?php
        $blogs = live_blogs();

        foreach($blogs as $blog) {
    ?>
        <div class="blogs__item__text">
            <a class="blogs__item" href="/blog/<?= $blog['id'] ?>"><h2><?= $blog['title'] ?></h2></a>
            <p><?= $blog['description'] ?></p>
        </div>
    <?php
        };
    ?>

    <div class="instagram">
        <div class="instagram__user">
            <?php $instagramUser = instagramProfile(); ?>
            <img class="instagram__pp" src="<?= $instagramUser["profile_picture"] ?>" />
            <div class="instagram__user-details">
                <p class="instagram__username"><?= $instagramUser["username"] ?></p>
                <p class="instagram__bio"><?= $instagramUser["bio"] ?></p>
                <a class="instagram__follow" href="https://www.instagram.com/thisgirlcodes/" rel="external">Follow me on Instagram</a>
            </div>
        </div>

        <div class="instagram__posts">
            <?php
                foreach(instagramData() as $instagramPost) {
            ?>
                <a class="instagram__post" href="<?= $instagramPost["link"] ?>" rel="external">
                    <img class="instagram__image" src="<?= $instagramPost["images"]["low_resolution"]["url"]?>">
                    <div class="instagram__metadata">
                        <span><?= $instagramPost["likes"]["count"] ?> likes</span>
                        <span><?= $instagramPost["comments"]["count"] ?> comments</span>
                    </div>
                </a>
            <?php
                }
            ?>
        </div>
    </div>
</div>

<?php
    require_once('partials/footer.inc.php');
?>
