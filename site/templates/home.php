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

      <div class="green_block">

        <div class="text">

          <h2>Part Designer. Part Developer.</h2>
          <h2>All about the story.</h2>

        </div>

      </div>

      <div id="intro_paragraph">

        <div class="text">

            <h2>
              Interdisciplinary Turbo Nerd. Truly Real Dude. Low Art/High Concept.
            </h2>

          <p>

            Every design has a story. Never content to just create something beautiful, I am always trying to strengthen the concepts and narratives behind my designs, in order to give them a solid foundation to rest on.
          </p>

          <p>
            For me, a design is more than a pretty skin drawn tight across an empty shell. It is a living, breathing experience that requires care, consideration, and, above all, thought.
            Design can be playful, but still very seriously considered and planned. It can be nostalgic without delusion. It can takes risks and experiment without sacrificing the
            simplicity and usefulness we expect from it.
          </p>
          <p>
            Design is alive and I’m trying my damnedest to help it
            stay that way.
          </p>

        </div>

      </div>

      <div class="green_block">

        <div class="text">

            <h2>
              I want to help you find your story—let's tell it the way it needs to be told.

            </h2>

        </div>

      </div>

      <div id="concept_block">

        <div class="text">

          <h2>It can get messy, but concept is always king.</h2>

            <p>
              Each new design problem requires a tailor-made solution.
              What sort of platform will it live on? Who is going to buy it? Is it even for sale? Is it permanent or time-based?

            </p>

            <p>
              Ultimately, the most important question is this: is there a good enough reason for this thing to exist in the first place? Without a solid conceptual foundation,
              things start looking shaky at best. It's an old screenwriter's cliché but it also rings true for design: <span>concept is king</span>. If what you are trying to communicate through design
              isn't clear, concise, and contextually appropriate then your story isn't being told properly. Let's work together and figure it out!
            </p>

          <img src="<?php echo url('assets/images/concept.png') ?>">

        </div>

      </div>

      <div class="green_block featured">

        <div class="text">

          <h2>Featured Work</h2>

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
          <div class="project" style="background-image: url('<?php echo url('content/2-work/3-serene-alliance/serenealliance.jpg') ?>');">
            <div class="caption">
              <h4>The Serene Alliance for Peace</h4>
            </div>
          </div>
        </a>

        <a href="work/psu-college-of-the-arts-promos">
          <div class="project" style="background-image: url('<?php echo url('content/2-work/4-psu-college-of-the-arts-promos/psucota.png') ?>');">
            <div class="caption">
              <h4>PSU College of the Arts Promo Videos</h4>
            </div>
          </div>
        </a>

      </div>


        <div class="text bottom">

            <h2>

              <a href="/work">See more work, if you'd like.</a>

            </h2>

        </div>


    </main>

  </div>

<?php snippet('footer') ?>
