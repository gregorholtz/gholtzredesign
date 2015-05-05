<?php snippet('header') ?>

  <div class="inner-container">

    <main class="main" role="main">

      <h1><?php echo $page->title()->html() ?></h1>

      <div class="text">
        <?php echo $page->text()->kirbytext() ?>

      </div>

      <nav class="nextprev cf" role="navigation">
        <?php if($prev = $page->prevVisible()): ?>
        <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
        <?php endif ?>
        <?php if($next = $page->nextVisible()): ?>
        <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
        <?php endif ?>
      </nav>

    </main>

  </div>

<?php snippet('footer') ?>
