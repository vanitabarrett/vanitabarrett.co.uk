<?php
    require_once('partials/header.inc.php');
?>

<div class="intro max-width">
    <p>I'm a Web Developer, based in London. I work as a <span class="intro-em">Senior Frontend Developer</span> at <a href="https://gds.blog.gov.uk/" rel="external" class="intro-em">Government Digital Service</a>, working on the <a href="https://www.gov.uk/design-system" rel="external" class="intro-em">GOV.UK Design System</a>.</p>

    <?php
        if (any_live_blogs()) {
    ?>
        <p>I also <a href="/blogs" class="intro-em">write</a> about my experiences working as a developer and being a woman in tech.</p>
    <?php
        }
    ?>

    <p>Occasionally, I pretend to be a web designer and <a href="https://www.flickr.com/photos/v_barrett/" rel="external" class="intro-em">photographer</a>.</p>

    <p>You can find me on <a href="https://www.linkedin.com/in/vanitabarrett/" rel="external" class="intro-em">LinkedIn</a> and <a href="https://twitter.com/V_Barrett" rel="external" class="intro-em">Twitter</a>.</p>
</div>

<div class="projects max-width">
    <h1>Projects</h1>
    <ol class="projects__list">
        <?php
            $json_projects = projects();

            foreach ($json_projects as $projects) {
                foreach ($projects as $project) {
        ?>
            <li class="projects__item">
                <h2><a href="/project/<?= $project['abbr'] ?>"><?= $project['name'] ?></a></h2>
                <?php
                    if ($project['ongoing']) {
                ?>
                    <span class="projects__beta">Ongoing</span>
                <?php
                    }
                ?>

                <p class="projects__item__job" aria-label="Job Title: <?= $project['job-role'] ?>"><?= $project['job-role'] ?></p>
                <p class="projects__item__summary"><?= $project['summary'] ?></p>
            </li>
        <?php
                }
            };
        ?>
    </ol>
</div>
<?php
    require_once('partials/footer.inc.php');
?>
