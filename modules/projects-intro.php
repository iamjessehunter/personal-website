
<section class='projects-page'>
  <inner-column>

    <articles-intro>
      <header>
        <h3 class='soft-voice'>Projects</h3>

        <h1 class="topic loud-voice">Here Are The Things I Have Built</h1>
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
