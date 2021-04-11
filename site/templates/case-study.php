<?php snippet('header') ?>

<article class="case-study<?= " case-study--" . $page->uid(); ?>">
  <div class="wrapper">
    <h1 class="title-1 page-title"><?= $page->title() ?></h1>
    <h2 class="title-3 case-study-intro"><?= $page->intro() ?></h2>
  </div>
  <?php if($image = $page->images()->template('cover')->first()): ?>
  <div class="case-study-cover">
    <div class="wrapper">
      <figure class="case-study-cover__image">
        <img src="<?= $image->url() ?>" alt="">
      </figure>
    </div>
  </div>
  <?php endif ?>
  <div class="wrapper">
    <?= $page->text()->toBlocks() ?>
  </div>
</article>

<?php snippet('footer') ?>
