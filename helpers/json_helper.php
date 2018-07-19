<?php

function projects() {
    $project_file = file_get_contents("data/projects.json");
    return json_decode($project_file, true);
}

function blogs() {
    $blogs_file = file_get_contents("data/blogs.json");
    return json_decode($blogs_file, true);
}

function any_live_blogs() {
    $all_blogs = blogs();
    if ($all_blogs) {
        foreach ($all_blogs as $blogs) {
            foreach ($blogs as $blog) {
                if ($blog['status'] == 'live') {
                    return true;
                }
            }
        };
    }
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