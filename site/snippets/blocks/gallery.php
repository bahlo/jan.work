<?php /** @var \Kirby\Cms\Block $block */ ?>

<div class="wrapper">
  <div class="case-study__gallery">
    <div class="case-study__gallery-list">
    <?php foreach ($block->images()->toFiles() as $image): ?>
      <figure class="case-study__gallery-image">
        <img srcset="<?= $image->srcset([400, 800, 1000, 1500]) ?>" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        
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
