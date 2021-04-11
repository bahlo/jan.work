<?php snippet('header') ?>

<div class="wrapper">
  <section class="default-page">
    <h1 class="title-1 page-title"><?= $page->title() ?></h1>
    <?= $page->text()->kt() ?>
  </section>
</div>

<?php snippet('footer') ?>
