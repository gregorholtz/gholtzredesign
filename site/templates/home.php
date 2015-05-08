<?php snippet('header') ?>

  <div class="inner-container">

    <main class="main" role="main">

      <div id="video_block">

        <div class="text" id="splash">
          <!-- <h1><?php echo $page->title()->html() ?></h1> -->
          <?php echo $page->text()->kirbytext() ?>
        </div>

        <video autoplay loop poster="<?php echo url('assets/images/desktop_placeholder.jpg') ?>" id="bgvid">
        <source src="<?php echo url('assets/images/gholtz.webm') ?>" type="video/webm">
        <source src="<?php echo url('assets/images/gholtz.mp4') ?>" type="video/mp4">
        </video>

      </div>

      <div id="philosophy">

        <div class="text">

          <h2>Nostalgia. Playfulness.</h2>
          <h2>Experimentation. Simplicity.</h2>

        </div>

      </div>

      <div class="text">

        <h2>Welcome to the tone zone.</h2>

        <p>
          Citizens of distant epochs quasar extraplanetary, rich in mystery! Inconspicuous motes of rock and gas Tunguska event astonishment circumnavigated worldlets, bits of moving fluff, brain is the seed of intelligence prime number, muse about laws of physics dispassionate extraterrestrial observer Rig Veda Hypatia, circumnavigated.
        </p>

      </div>

      <div id="project_blocks">

        <a href="#">
          <div class="project">
            <img src="<?php echo url('assets/images/desktop_placeholder.jpg') ?>">
            <div class="caption">
              <h4>Caption</h4>
            </div>
          </div>
        </a>

        <a href="#">
          <div class="project">
            <img src="<?php echo url('assets/images/desktop_placeholder.jpg') ?>">
            <div class="caption">
              <h4>Caption</h4>
            </div>
          </div>
        </a>

        <a href="#">
          <div class="project">
            <img src="<?php echo url('assets/images/desktop_placeholder.jpg') ?>">
            <div class="caption">
              <h4>Caption</h4>
            </div>
          </div>
        </a>

        <a href="#">
          <div class="project">
            <img src="<?php echo url('assets/images/desktop_placeholder.jpg') ?>">
            <div class="caption">
              <h4>Caption</h4>
            </div>
          </div>
        </a>

      </div>

      <div class="text">

        <h2>Welcome to the tone zone.</h2>

        <p>
          Citizens of distant epochs quasar extraplanetary, rich in mystery! Inconspicuous motes of rock and gas Tunguska event astonishment circumnavigated worldlets, bits of moving fluff, brain is the seed of intelligence prime number, muse about laws of physics dispassionate extraterrestrial observer Rig Veda Hypatia, circumnavigated.
        </p>

        <img src="<?php echo url('assets/images/concept.png') ?>">

      </div>

    </main>

  </div>

<?php snippet('footer') ?>
