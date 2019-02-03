<?php
    require_once('partials/header.inc.php');
?>

<div class="blogs max-width">
    <?php
        $blogs = live_blogs();

        foreach($blogs as $blog) {
    ?>
        <a class="blogs__item" href="/blog/<?= $blog['id'] ?>">
            <img src="<?= $blog['id'] . '.png' ?>" alt="<?= $blog['alt_text'] ?>"/>
            <div class="blogs__item__text">
                <h2><?= $blog['title'] ?></h2>
                <p><?= $blog['description'] ?></p>
            </div>
        </a>
    <?php
        };
    ?>
</div>

<?php
    require_once('partials/footer.inc.php');
?>
