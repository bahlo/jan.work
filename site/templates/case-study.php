<?php snippet('header') ?>

<article class="case-study">
  <div class="wrapper wrapper--small">
    <h1 class="title-1 case-study-title"><?= $page->title() ?></h1>
    <h2 class="title-3 case-study-intro"><?= $page->intro() ?></h2>
  </div>
  <?php if($image = $page->images()->template('cover')->first()): ?>
  <div class="case-study-cover">
    <div class="wrapper">
      <figure class="case-study-cover__image">
        <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
      </figure>
    </div>
  </div>
  <?php endif ?>
  <div class="case-study__content">
    <?= $page->text()->toBlocks() ?>
  </div>
  <div class="wrapper wrapper--small">
    <div class="case-study__information">
      <div class="case-study__information-bits">
        <div>
          <span class="case-study__information-title">Position</span>
          <span class="case-study__information-text"><?= $page->role() ?></span>
        </div>
        <div>
          <span class="case-study__information-title">Company</span>
          <span class="case-study__information-text"><?= $page->company() ?></span>
        </div>
        <div>
          <span class="case-study__information-title">Year</span>
          <span class="case-study__information-text"><?= $page->year() ?></span>
        </div>
      </div>
      <div>
        <span class="case-study__information-title">Responsibilities</span>
        <ul class="case-study__information-responsibilities">
        <?php foreach ($page->responsibilities()->split() as $item): ?>
          <li class="case-study__information-text"><?= $item ?></li>
        <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>
</article>

<?php snippet('footer') ?>
