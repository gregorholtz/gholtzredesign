<ul class="teaser cf">
  <?php foreach(page('work')->children() as $project): ?>
  <div class="project">
    <li>
      <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
      <p><?php echo $project->text()->excerpt(150) ?>
        <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
    </li>
    <li>
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
      <a href="<?php echo $project->url() ?>">
        <div class="work_image" style="background-image: url('<?php echo $image->url() ?>');">
        </div>
      </a>
      <?php endif ?>
    </li>
  </div>
  <?php endforeach ?>
</ul>
