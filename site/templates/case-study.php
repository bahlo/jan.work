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
        <img src="<?= $image->url() ?>" alt="">
      </figure>
    </div>
  </div>
  <?php endif ?>
  <div class="wrapper wrapper--small case-study__content">
    <?= $page->text()->toBlocks() ?>
  </div>
  <div class="wrapper wrapper--small">
    <div class="case-study__information">
      <div class="case-study__information-bits">
        <div>
          <h4 class="title-5">Position</h4>
          <span class="case-study__information-text"><?= $page->role() ?></span>
        </div>
        <div>
          <h4 class="title-5">Company</h4>
          <span class="case-study__information-text"><?= $page->company() ?></span>
        </div>
        <div>
          <h4 class="title-5">Year</h4>
          <span class="case-study__information-text"><?= $page->year() ?></span>
        </div>
      </div>
      <div>
        <h4 class="title-5">Responsibilities</h4>
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
