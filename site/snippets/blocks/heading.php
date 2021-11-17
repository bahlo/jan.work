<?php /** @var \Kirby\Cms\Block $block */ ?>

<div class="wrapper wrapper--small">
  <<?= $level = $block->level()->or('h2') ?>><?= $block->text() ?></<?= $level ?>>
</div>
