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
    <title>Vanita Barrett: Web Developer</title>
    <meta charset="utf-8" >
    <meta property="og:title" content="Vanita Barrett: Web Developer" />
    <meta property="og:description" content="Vanita Barrett: Web Developer portfolio. Currently Frontend Developer at Government Digital Service." />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="vanita, barrett, vanita barrett, website, developer, designer, web, surrey, university, portfolio, frontend, frontend developer, gds, govuk" />
    <meta name="description" content="Vanita Barrett: Web Developer portfolio. Currently Frontend Developer at Government Digital Service." />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />

    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/styles/build/styles.css">
  </head>

  <body>
    <?php
        include 'helpers/json_helper.php';
    ?>
    <div class="wrapper">
        <header>
            <div class="max-width">
                <a href="/" class="web-title" aria-label="Vanita Barrett"><span class="web-title--capital">V</span>anita <span class="web-title--capital">B</span>arrett</a>
                <nav aria-label="main page navigation">
                    <a href="/" >Home</a>
                    <?php
                        if (any_live_blogs()) {
                    ?>
                        <a href="blogs" >Blog</a>
                    <?php
                        }
                    ?>
                </nav>
            </div>
        </header>
