
<section class='stuff'>
<inner-column>

  <articles-intro>

    <header>
      <h2 class='attention-voice'>PROJECTS</h2>
    </header>

    <article-grid>
      <?php include('articles_data.php'); ?><!-- acting as an example database -->

      <?php foreach ($database as $article) { ?> 
        <?php include('article-card.php'); ?>
      <?php } ?>
    </article-grid>

  </articles-intro>

</inner-column>
</section>
