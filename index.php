<?php
    require_once('partials/header.inc.php');
?>

<div class="intro max-width">
    <p>I'm a Web Developer and Designer, based in London. I work as a <span class="intro-em">Frontend Developer</span> at <a href="https://gds.blog.gov.uk/" rel="external" class="intro-em">Government Digital Service</a>, helping make <a href="https://gov.uk" rel="external" class="intro-em">GOV.UK</a> better for users.</p>
    <p>I also <a href="/blog.php" class="intro-em">write</a> about my experiences working as a developer and being a woman in tech.</p>
    <p>You can find me on <a href="https://www.linkedin.com/in/vanitabarrett/" rel="external" class="intro-em">LinkedIn</a> and <a href="https://twitter.com/V_Barrett" rel="external" class="intro-em">Twitter</a>.</p>
</div>

<div class="projects max-width">
    <h1>Projects</h1>
    <img src="assets/projects/latest-project.png" alt="A screenshot of the GOV.UK website homepage - my latest project." />

    <?php
        $json_projects = projects();

        foreach ($json_projects as $projects) {
            foreach ($projects as $project) {
    ?>
        <div class="projects__item">
            <h2><a href="/project.php?<?= $project['abbr'] ?>"><?= $project['name'] ?></a></h2>
            <p><?= $project['summary'] ?></p>
        </div>
    <?php
            }
        };
    ?>

<?php
    require_once('partials/footer.inc.php');
?>
