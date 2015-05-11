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
          <source src="<?php echo url('assets/images/gholtz.ogg') ?>" type="video/ogg">
        </video>

      </div>

      <div id="philosophy">

        <div class="text">

          <h2>Part UI/UX Designer. Part Developer. Part Copywriter.</h2>
          <h2>All about the story.</h2>

        </div>

      </div>

      <div id="intro_paragraph">

        <div class="text">

          <h2>Say it soft and slow</h2>

          <p>
            You've got something really important to say, right? Well, go ahead—out with it. Spit it out.
          </p>

          <p>
            What's that? You want to make sure you say it correctly? To make sure there's no doubt about what you mean?
            That there's no mistaking the emotions you are trying to convey?
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
          <div class="project" style="background-image: url('<?php echo url('content/2-work/7-serene-alliance/literature_pages.jpg') ?>');">
            <div class="caption">
              <h4>The Serene Alliance for Peace</h4>
            </div>
          </div>
        </a>

        <a href="work/fuckin-booze">
          <div class="project" style="background-image: url('<?php echo url('content/2-work/5-fuckin-booze/booklet2.jpg') ?>');">
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
            Each new design problem requires a tailor-made solution. There are so many facets to consider. Who is this design going to benefit?
            What sort of platform will it live on? Who is going to buy it? Is it even for sale? Is it permanent or time-based? These are all important
            questions to consider when starting to plan a living, breathing design.

          </p>

          <p>
            Ultimately, the most important question is this: is there a good enough reason for this thing to exist in the first place? Without a solid conceptual foundation,
            things start looking shaky at best. It's an old screenwriter's cliché but it also rings true for design: <span>concept is king</span>. If what you are trying to communicate through design
            isn't clear, concise, and contextually appropriate then your story isn't being told properly. Let's work together and
          </p>

          <blockquote>
            <p>
              I want to help you find your story—and then I want to help you tell it the way it needs to be told.
            </p>
          </blockquote>

          <img src="<?php echo url('assets/images/concept.png') ?>">

        </div>

      </div>

    </main>

  </div>

<?php snippet('footer') ?>
