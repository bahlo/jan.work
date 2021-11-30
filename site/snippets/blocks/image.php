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
      <picture>
        <source srcset="<?= $image->srcset(['400w'  => ['width' => 400, 'format' => 'avif'], '800w'  => ['width' => 800, 'format' => 'avif'], '1000w'  => ['width' => 1000, 'format' => 'avif'], '1500w'  => ['width' => 1500, 'format' => 'avif'], '2000w' => ['width' => 2000, 'format' => 'avif']]) ?>" type="image/avif">
        <source srcset="<?= $image->srcset(['400w'  => ['width' => 400, 'format' => 'webp'], '800w'  => ['width' => 800, 'format' => 'webp'], '1000w'  => ['width' => 1000, 'format' => 'webp'], '1500w'  => ['width' => 1500, 'format' => 'webp'], '2000w' => ['width' => 2000, 'format' => 'webp']]) ?>" type="image/webp">
        <img srcset="<?= $imageSrc->srcset([400, 800, 1000, 1500, 2000]) ?>" src="<?= $src ?>" alt="<?= $alt ?>">
      </picture>
    <?php endif ?>

    <?php if ($caption->isNotEmpty()): ?>
    <figcaption>
      <?= $caption ?>
    </figcaption>
    <?php endif ?>
  </figure>
</div>
<?php endif ?>
