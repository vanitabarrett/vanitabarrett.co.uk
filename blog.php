<?php
    require_once('partials/header.inc.php');
    require_once('helpers/Parsedown.php');
?>

<?php
    $query_string = $_SERVER['QUERY_STRING'];
    $blog = blog_from_query($query_string);
    if (!$blog) {
      header("Location: /404.php");
    }
    else {
      $Parsedown = new Parsedown();
      echo $Parsedown->text($blog);
    }
?>

<?php
    require_once('partials/footer.inc.php');
?>
