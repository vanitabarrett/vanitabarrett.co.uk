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
?>
  <div class="max-width">
    <div class="blog">
      <?php
        $Parsedown = new Parsedown();
        echo $Parsedown->text($blog);
      ?>
    </div>
  </div>
<?php
    }
  require_once('partials/footer.inc.php');
?>
