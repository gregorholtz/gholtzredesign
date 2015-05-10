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

          <h2>Part Developer. Part UI/UX Designer. Part Copywriter. All about the story.</h2>

        </div>

      </div>

      <div id="intro_paragraph">

        <div class="text">

          <h2>Welcome to the tone zone.</h2>

          <p>
            Citizens of distant epochs quasar extraplanetary, rich in mystery! Inconspicuous motes of rock and gas Tunguska event astonishment circumnavigated worldlets, bits of moving fluff, brain is the seed of intelligence prime number, muse about laws of physics dispassionate extraterrestrial observer Rig Veda Hypatia, circumnavigated.
          </p>

        </div>

      </div>

      <div id="project_blocks">

        <a href="work/sigmunds-quest">
          <div class="project" style="background-image: url('<?php echo url('content/2-work/1-sigmunds-quest/swordup_main.png') ?>');">
            <div class="caption">
              <h4>Sigmund's Quest</h4>
            </div>
          </div>
        </a>

        <a href="work/polybius">
          <div class="project" style="background-image: url('<?php echo url('content/2-work/2-polybius/polybius.jpg') ?>');">
            <div class="caption">
              <h4>Project POLYBIUS</h4>
            </div>
          </div>
        </a>

        <a href="work/serene-alliance">
          <div class="project" style="background-image: url('<?php echo url('content/2-work/serene-alliance/literature_pages.jpg') ?>');">
            <div class="caption">
              <h4>The Serene Alliance for Peace</h4>
            </div>
          </div>
        </a>

        <a href="work/fuckin-booze">
          <div class="project" style="background-image: url('<?php echo url('content/2-work/fuckin-booze/booklet2.jpg') ?>');">
            <div class="caption">
              <h4>Fuckin' Booze</h4>
            </div>
          </div>
        </a>

      </div>

      <div id="concept_block">

        <div class="text">

          <h2>It can get messy, but concept is always king.</h2>
          <p>
            Citizens of distant epochs quasar extraplanetary, rich in mystery! Inconspicuous motes of rock and gas Tunguska event astonishment circumnavigated worldlets, bits of moving fluff, brain is the seed of intelligence prime number, muse about laws of physics dispassionate extraterrestrial observer Rig Veda Hypatia, circumnavigated.
          </p>

          <img src="<?php echo url('assets/images/concept.png') ?>">

        </div>

      </div>

    </main>

  </div>

<?php snippet('footer') ?>
