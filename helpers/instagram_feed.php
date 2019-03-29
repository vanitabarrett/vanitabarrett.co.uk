<?php

function instagramData() {
    $env_file = file_get_contents("data/env.json");
    $secrets = json_decode($env_file, true);

    $access_token = $secrets["access_token"];
    $photo_count=4;

    $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
    $json_link.="access_token={$access_token}&count={$photo_count}";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $json_link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);

    $instagramFeed = json_decode($output, true);

    return $instagramFeed["data"];
}

function instagramProfile() {
  $env_file = file_get_contents("data/env.json");
  $secrets = json_decode($env_file, true);

  $access_token = $secrets["access_token"];

  $json_link="https://api.instagram.com/v1/users/self/?access_token={$access_token}";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $json_link);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  $instagramUser = json_decode($output, true);

  return $instagramUser["data"];
}

?>
