<?php snippet('header') ?>

<div id="hero_image">

  <img src="<?php echo $site->url() ?>/assets/images/work.jpg">

</div>

  <div class="inner-container">

    <main class="main" role="main">

      <div class="text">
        <?php echo $page->text()->kirbytext() ?>
      </div>

      <hr>

      <?php snippet('projects') ?>

    </main>
  </div>

<?php snippet('footer') ?>
