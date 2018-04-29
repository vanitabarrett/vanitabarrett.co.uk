<?php

function projects() {
    $project_file = file_get_contents("data/projects.json");
    return json_decode($project_file, true);
}

function project_from_query($query) {
    $json_projects = projects();

     foreach ($json_projects as $projects) {
        foreach ($projects as $project) {
            if ($project["abbr"] == $query) {
                return $project;
            }
        }
    }
}

?>