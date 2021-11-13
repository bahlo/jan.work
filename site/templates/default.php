<?php snippet('header') ?>

<section class="default-page">
  <div class="wrapper wrapper--small">
    <h2 class="title-1"><?= $page->title() ?></h2>
    <?= $page->text()->kt() ?>
  </div>
</section>

<?php snippet('footer') ?>
