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
      <img src="/writing/images/<?= $blog["metadata"]["id"] ?>.png" class="blog__cover-image">
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
        <p>I'm a Web Developer, based in London. I work as a Frontend Developer at Government Digital Service, helping make GOV.UK better for users.</p>
      </div>
      <div class="share-links">
        <p>Share on:</p>
        <ul>
          <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://vanitabarrett.co.uk/blog/<?= $blog["id"] ?>">Facebook</a></li>
          <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=https://vanitabarrett.co.uk/blog/<?= $blog["id"] ?>&title=<?= $blog["title"] ?>&summary=<?= $blog["description"] ?>">LinkedIn</a></li>
          <li><a href="https://twitter.com/home?status=https://vanitabarrett.co.uk/blog/<?= $blog["id"] ?>" >Twitter</a></li>
        </ul>
      </div>
    </aside>

  </div>
<?php
    }
  require_once('partials/footer.inc.php');
?>
