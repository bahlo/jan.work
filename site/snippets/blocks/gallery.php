<?php /** @var \Kirby\Cms\Block $block */ ?>

<div class="wrapper">
  <figure class="case-study__gallery">
    <ul class="case-study__gallery-list">
    <?php foreach ($block->images()->toFiles() as $image): ?>
      <li class="case-study__gallery-image">
        <img srcset="<?= $image->srcset([400, 800, 1000, 1500]) ?>" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        
        <?php if ($image->caption()->isNotEmpty()): ?>
        <span class="case-study__gallery-caption"><?= $image->caption() ?></span>
        <?php endif ?>
      </li>
    <?php endforeach ?>
    </ul>
  </figure>
</div>
