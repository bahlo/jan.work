<?php

$alt      = $block->alt();
$caption  = $block->caption();
$link     = $block->link();
$src      = null;
$imageSrc = null;

if ($block->location() == 'web') {
  $src = $block->src();
} elseif ($image = $block->image()->toFile()) {
  $alt = $alt ?? $image->alt();
  $src = $image->url();
  $imageSrc = $image;
}

?>

<?php if ($src): ?>

<div class="wrapper">
  <figure>
    <?php if ($link->isNotEmpty()): ?>
    <a href="<?= $link->toUrl() ?>">
      <img srcset="<?= $imageSrc->srcset([400, 800, 1000, 1500, 2000]) ?>" src="<?= $src ?>" alt="<?= $alt ?>">
    </a>
    <?php else: ?>
    <img srcset="<?= $imageSrc->srcset([400, 800, 1000, 1500, 2000]) ?>" src="<?= $src ?>" alt="<?= $alt ?>">
    <?php endif ?>

    <?php if ($caption->isNotEmpty()): ?>
    <figcaption>
      <?= $caption ?>
    </figcaption>
    <?php endif ?>
  </figure>
</div>
<?php endif ?>
