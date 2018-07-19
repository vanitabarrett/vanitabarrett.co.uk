<?php
    require_once('partials/header.inc.php');
?>

<?php
    $query_string = $_SERVER['QUERY_STRING'];
    $project = project_from_query($query_string);
    if (!$project) {
        header("Location: /404.php");
    }
    else {
?>

<nav class="breadcrumbs max-width" aria-label="breadcrumb">
    <ol class="breadcrumbs__list">
        <li class="breadcrumbs__list__item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumbs__list__item">
            <a href="/">Projects</a>
        </li>
        <li class="breadcrumbs__list__item">
            <span><?= $project['name'] ?></span>
        </li>
    </ol>
</nav>

<div class="project-info max-width">
    <h1>Project: <?= $project['name'] ?>
        <?php if (isset($project['url'])) { ?>
            <a href="<?= $project['url'] ?>" rel="external">(<?= $project['url'] ?>)</a>
        <?php } end ?>
    </h1>
    <img class="project-image" src="/assets/projects/<?= $project['image']['name'] ?>" alt="<?= $project['image']['alt_text'] ?>" />

    <p><?= $project['description'] ?></p>

    <?php if (isset($project['skills'])) { ?>
        <div class="project-info__technologies">
            <h2>Uses the following technologies:</h2>
            <ul class="project-info__technologies-list">
            <?php
                $skills = explode(",", $project['skills']);
                foreach ($skills as $skill) {
            ?>
                <li><?= $skill ?></li>
            <?php } end ?>
            </ul>
        </div
    <?php } end ?>
</div>

<?php
    }
     require_once('partials/footer.inc.php');
?>