<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):

?>
<nav class="site-navigation">
  <ul class="site-navigation__list">
    <?php foreach($items as $item): ?>
    <li class="site-navigation__item<?php e($item->isOpen(), ' site-navigation__item--active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>
