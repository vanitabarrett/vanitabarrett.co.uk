<?php
    require_once('helpers/Parsedown.php');
    include 'helpers/json_helper.php';
    $query_string = $_SERVER['QUERY_STRING'];
    $blog = blog_from_query($query_string);
    require_once('partials/headerblog.inc.php');
?>

<?php
  if (!$blog) {
    header("Location: /404.php");
  }
  else {
?>
  <div class="max-width">
    <div class="blog">
      <img src="/writing/images/<?= $blog["metadata"]["id"] ?>.png" class="blog__cover-image" alt="">
      <div class="blog__main">
        <?php
          $Parsedown = new Parsedown();
          echo $Parsedown->text($blog["text"]);
        ?>
      </div>
    </div>

    <aside>
      <div class="about">
        <h2>About</h2>
        <p>I'm a Web Developer, based in London. I work as a Senior Frontend Developer at Government Digital Service (GDS).</p>
      </div>
      <div class="share-links">
        <p>Share on:</p>
        <ul>
          <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://vanitabarrett.co.uk/blog/<?= $blog["metadata"]["id"] ?>">Facebook</a></li>
          <li><a href="https://www.linkedin.com/sharing/share-offsite/?url=https://vanitabarrett.co.uk/blog/<?= $blog["metadata"]["id"] ?>">LinkedIn</a></li>
          <?php if ($blog["metadata"]["medium_link"]) { ?>
            <li><a href="<?= $blog["metadata"]["medium_link"] ?>">Medium</a></li>
          <?php } ?>
          <li><a href="https://twitter.com/intent/tweet?text=<?= $blog["metadata"]["title"] ?>&url=https://vanitabarrett.co.uk/blog/<?= $blog["metadata"]["id"] ?>" >Twitter</a></li>
        </ul>
      </div>
    </aside>

  </div>
<?php
    }
  require_once('partials/footer.inc.php');
?>
