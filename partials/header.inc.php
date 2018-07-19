<!DOCTYPE html>
<html>
  <head>
    <title>Vanita Barrett: Web Developer</title>
    <meta charset="utf-8" >
    <meta property="og:title" content="Vanita Barrett: Web Developer" />
    <meta property="og:description" content="Vanita Barrett: Web Developer portfolio. Currently Frontend Developer at Government Digital Service." />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="vanita, barrett, vanita barrett, website, developer, designer, web, surrey, university, portfolio, frontend, frontend developer, gds, govuk" />
    <meta name="description" content="Vanita Barrett: Web Developer portfolio. Currently Frontend Developer at Government Digital Service." />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="shortcut icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/styles/build/styles.css">
  </head>

  <body>
    <?php
        include 'helpers/json_helper.php';
    ?>
    <header>
        <div class="max-width">
            <a href="/" class="web-title"><span class="web-title--capital">V</span>anita <span class="web-title--capital">B</span>arrett</a>
            <nav aria-label="main page navigation">
                <a href="/" >Home</a>
                <?php
                    if (any_live_blogs()) {
                ?>
                    <a href="blogs.php" >Blog</a>
                <?php
                    }
                ?>
            </nav>
        </div>
    </header>