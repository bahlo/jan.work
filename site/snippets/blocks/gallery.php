<?php /** @var \Kirby\Cms\Block $block */ ?>

<div class="wrapper">
  <figure class="case-study__gallery">
    <ul class="case-study__gallery-list">
    <?php foreach ($block->images()->toFiles() as $image): ?>
      <li class="case-study__gallery-image">
        <?= $image ?>
      </li>
    <?php endforeach ?>
    </ul>
  </figure>
</div>
