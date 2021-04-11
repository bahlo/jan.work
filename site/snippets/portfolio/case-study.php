<div class="project-item<?= " project-item--" . $data->uid(); ?>">
  <div class="project-content">
    <h2 class="project-title title-4"><?= $data->title() ?></h2>
    <h3 class="project-details title-6"><?= $data->year() ?> · <?= $data->role() ?> · <?= $data->company() ?></h3>
    <?php if($data->teaser()->toBool()): ?>
    <span class="project-coming-soon">Coming soon</span>
    <?php else: ?>
    <a class="link-button" href="<?= $data->url() ?>">Read case study</a>
    <?php endif ?>
  </div>
  <div class="project-cover">
  <?php if($image = $data->images()->template('cover')->first()): ?>
    <figure>
      <img src="<?= $image->url() ?>" alt="">
    </figure>
  <?php endif ?>
  </div>
</div>
