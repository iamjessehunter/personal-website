
<articles-intro>

  <header>
    <h2 class='loud-voice'>This is and "Article grid" module. This is its heading.</h2>

    <p class="attention-voice">Again, we totally just made that up. It's a box with boxes in it.</p>
  </header>

  <article-grid>

    <!-- acting as an example database -->
    <?php include('articles_data.php'); ?>

    <?php foreach ($database as $article) { ?> 
      <?php include('article-card.php'); ?>
    <?php } ?>
  </article-grid>

</articles-intro>
