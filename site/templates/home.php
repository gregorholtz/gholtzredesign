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

          <h2>Why bother?</h2>

          <p>Encyclopaedia galactica. A mote of dust suspended in a sunbeam preserve and cherish that pale blue dot paroxysm of global death science rich in heavy atoms another world rich in mystery? Light years muse about, birth a very small stage in a vast cosmic arena. Citizens of distant epochs science encyclopaedia galactica, take root and flourish. Ship of the imagination, from which we spring cosmos culture white dwarf stirred by starlight. Circumnavigated, encyclopaedia galactica, across the centuries. Venture corpus callosum.
          </p>

        </div>

      </div>

      <div class="pillar_wrapper">

        <div id="pillars">

          <div class="pillar" id="simplicity">
            <img src="<?php echo url('assets/images/desktop_placeholder.jpg') ?>">
            <h2>Simplicity</h2>
            <p>Billions upon billions inconspicuous motes of rock and gas Tunguska event circumnavigated kindling the energy hidden in matter made in the interiors of collapsing stars, as a patch of light stirred by starlight. Rich in mystery at the edge of forever?
            </p>
          </div>

          <div class="pillar" id="experimentation">
            <img src="<?php echo url('assets/images/desktop_placeholder.jpg') ?>">
            <h2>Experimentation</h2>
            <p>Billions upon billions inconspicuous motes of rock and gas Tunguska event circumnavigated kindling the energy hidden in matter made in the interiors of collapsing stars, as a patch of light stirred by starlight. Rich in mystery at the edge of forever?
            </p>
          </div>

          <div class="pillar" id="nostalgia">
            <img src="<?php echo url('assets/images/desktop_placeholder.jpg') ?>">
            <h2>Nostalgia</h2>
            <p>Billions upon billions inconspicuous motes of rock and gas Tunguska event circumnavigated kindling the energy hidden in matter made in the interiors of collapsing stars, as a patch of light stirred by starlight. Rich in mystery at the edge of forever?
            </p>
          </div>

          <div class="pillar" id="playfullness">
            <img src="<?php echo url('assets/images/desktop_placeholder.jpg') ?>">
            <h2>Playfulness</h2>
            <p>Billions upon billions inconspicuous motes of rock and gas Tunguska event circumnavigated kindling the energy hidden in matter made in the interiors of collapsing stars, as a patch of light stirred by starlight. Rich in mystery at the edge of forever?
            </p>
          </div>

        </div>

      </div>

    </main>

  </div>

<?php snippet('footer') ?>
