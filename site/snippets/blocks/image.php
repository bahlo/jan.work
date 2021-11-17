<?php

$alt     = $block->alt();
$caption = $block->caption();
$link    = $block->link();
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt ?? $image->alt();
    $src = $image->url();
}

?>

<?php if ($src): ?>

<div class="wrapper">
  <figure>
    <?php if ($link->isNotEmpty()): ?>
    <a href="<?= $link->toUrl() ?>">
      <img src="<?= $src ?>" alt="<?= $alt ?>">
    </a>
    <?php else: ?>
    <img src="<?= $src ?>" alt="<?= $alt ?>">
    <?php endif ?>

    <?php if ($caption->isNotEmpty()): ?>
    <figcaption>
      <?= $caption ?>
    </figcaption>
    <?php endif ?>
  </figure>
</div>
<?php endif ?>
