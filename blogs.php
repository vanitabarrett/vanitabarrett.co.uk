<?php
    include 'helpers/instagram_feed.php';
    require_once('partials/header.inc.php');
?>

<div class="blogs max-width">
    <?php
        $blogs = live_blogs();

        foreach($blogs as $blog) {
    ?>
        <a class="blogs__item" href="/blog/<?= $blog['id'] ?>">
            <div class="blogs__item__text">
                <h2><?= $blog['title'] ?></h2>
                <p><?= $blog['description'] ?></p>
            </div>
        </a>
    <?php
        };
    ?>

    <div class="instagram">
        <?php
            foreach(instagramData() as $instagramPost) {
        ?>
            <a class="instagram__post" href="<?= $instagramPost["link"] ?>">
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

<?php
    require_once('partials/footer.inc.php');
?>
