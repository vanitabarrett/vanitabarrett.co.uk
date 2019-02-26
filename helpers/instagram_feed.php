<?php

function instagramData() {
    $env_file = file_get_contents("data/env.json");
    $secrets = json_decode($env_file, true);

    $access_token = $secrets["access_token"];
    $photo_count=4;

    $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
    $json_link.="access_token={$access_token}&count={$photo_count}";

    $instagramFeedJson = file_get_contents($json_link);
    $instagramFeed = json_decode($instagramFeedJson, true);

    return $instagramFeed["data"];
}

?>
