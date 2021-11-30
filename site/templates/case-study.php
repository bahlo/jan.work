<?php snippet('header') ?>

<article class="case-study">
  <div class="wrapper wrapper--small">
    <h2 class="title-1 case-study-title"><?= $page->title() ?></h2>
    <span class="title-3 case-study-intro"><?= $page->intro() ?></span>
  </div>
  <?php if($image = $page->images()->template('cover')->first()): ?>
  <div class="case-study-cover">
    <div class="wrapper">
      <figure class="case-study-cover__image">
        <picture>
          <source srcset="<?= $image->srcset(['400w' => ['width' => 400, 'format' => 'avif'], '800w' => ['width' => 800, 'format' => 'avif'], '1000w' => ['width' => 1000, 'format' => 'avif'], '1500w' => ['width' => 1500, 'format' => 'avif'], '2000w' => ['width' => 2000, 'format' => 'avif']]) ?>" type="image/avif">
          <source srcset="<?= $image->srcset(['400w' => ['width' => 400, 'format' => 'webp'], '800w' => ['width' => 800, 'format' => 'webp'], '1000w' => ['width' => 1000, 'format' => 'webp'], '1500w' => ['width' => 1500, 'format' => 'webp'], '2000w' => ['width' => 2000, 'format' => 'webp']]) ?>" type="image/webp">  
          <img srcset="<?= $image->srcset([400, 800, 1000, 1500]) ?>" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        </picture>
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
