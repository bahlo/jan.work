<?php /** @var \Kirby\Cms\Block $block */ ?>

<div class="wrapper">
  <div class="case-study__gallery">
    <div class="case-study__gallery-list">
    <?php foreach ($block->images()->toFiles() as $image): ?>
      <figure class="case-study__gallery-image">
        <picture>
          <source srcset="<?= $image->srcset(['400w'  => ['width' => 400, 'format' => 'avif'], '800w'  => ['width' => 800, 'format' => 'avif'], '1000w'  => ['width' => 1000, 'format' => 'avif'], '1500w'  => ['width' => 1500, 'format' => 'avif'], '2000w' => ['width' => 2000, 'format' => 'avif']]) ?>" type="image/avif">
          <source srcset="<?= $image->srcset(['400w'  => ['width' => 400, 'format' => 'webp'], '800w'  => ['width' => 800, 'format' => 'webp'], '1000w'  => ['width' => 1000, 'format' => 'webp'], '1500w'  => ['width' => 1500, 'format' => 'webp'], '2000w' => ['width' => 2000, 'format' => 'webp']]) ?>" type="image/webp">  
          <img srcset="<?= $image->srcset([400, 800, 1000, 1500]) ?>" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        </picture>
        <?php if ($image->caption()->isNotEmpty()): ?>
        <figcaption class="case-study__gallery-caption">
          <?= $image->caption() ?>
        </figcaption>
        <?php endif ?>
      </figure>
    <?php endforeach ?>
    </div>
  </div>
</div>
