
<section class='stuff'>
<inner-column>

  <articles-intro>

    <header>
      <div class="border"></div>
      <h2 class='attention-voice'>PROJECTS</h2>
      <div class="border"></div>
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
