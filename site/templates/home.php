<?php snippet('header') ?>

  <video autoplay loop poster="<?php echo url('assets/images/8bitportrait.png') ?>" id="bgvid">
  <source src="<?php echo url('assets/images/river.webm') ?>" type="video/webm">
  <source src="<?php echo url('assets/images/river.mp4') ?>" type="video/mp4">
  </video>

  <main class="main" role="main">

    <div class="text">
      <!-- <h1><?php echo $page->title()->html() ?></h1> -->
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <a href="#">
      <div class="interested">
        <h2>Interested?</h2>
      </div>
    </a>

    <!-- <?php snippet('projects') ?> -->

  </main>

<?php snippet('footer') ?>
