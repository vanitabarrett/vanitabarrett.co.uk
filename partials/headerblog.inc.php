<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122624505-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-122624505-1');
    </script>
    <title><?= $blog["metadata"]["title"] ?> | Vanita Barrett</title>

    <meta charset="utf-8" >
    <meta property="og:title" content="<?= $blog["metadata"]["title"] ?> | Vanita Barrett" />
    <meta property="og:image" content="https://vanitabarrett.co.uk/writing/images/<?= $blog["metadata"]["id"] ?>.png" />
    <meta property="og:description" content="<?= $blog["metadata"]["description"] ?>" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@v_barrett" />
    <meta name="twitter:title" content="<?= $blog["metadata"]["title"] ?> | Vanita Barrett" />
    <meta name="twitter:description" content="<?= $blog["metadata"]["description"] ?>" />
    <meta name="twitter:image" content="https://vanitabarrett.co.uk/writing/images/<?= $blog["metadata"]["id"] ?>.png" />

    <meta name="author" content="Vanita Barrett">

    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="vanita, barrett, developer, frontend <?= $blog["metadata"]["keywords"] ?>" />
    <meta name="description" content="<?= $blog["metadata"]["description"] ?>" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />

    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/styles/build/styles.css">
  </head>

  <body>
    <?php
        $pages = array('/' => 'Home','/blogs' =>'Blog');
    ?>
    <div class="wrapper">
        <header>
            <div class="max-width">
                <a href="/" class="web-title" aria-label="Vanita Barrett"><span class="web-title--capital">V</span>anita <span class="web-title--capital">B</span>arrett</a>
                <nav aria-label="main page navigation">
                    <?php
                        foreach ($pages as $page => $title) {
                    ?>
                        <?php if ($page == 'blogs') { ?>
                            <?php if (any_live_blogs()) { ?>
                                <a <?php if ($_SERVER['REQUEST_URI'] === $page) print('class="nav--active"');?> href="<?= $page ?>" ><?= $title ?></a>
                            <?php } ?>
                        <?php } else { ?>
                            <a <?php if ($_SERVER['REQUEST_URI'] === $page) print('class="nav--active"');?> href="<?= $page ?>" ><?= $title ?></a>
                        <?php } ?>
                    <?php } ?>
                </nav>
            </div>
        </header>
