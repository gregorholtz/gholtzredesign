<?php snippet('header') ?>
  <div class="inner-container">

    <main class="main" role="main">

      <div class="text">
        <?php if($page->slug() != "contact") { ?>
          <h1><?php echo $page->title()->html() ?></h1>
          <?php } ?>
        <?php echo $page->text()->kirbytext() ?>
      </div>

    </main>

  </div>

<?php snippet('footer') ?>
