<?php

function projects() {
    $project_file = file_get_contents("data/projects.json");
    return json_decode($project_file, true);
}

?>