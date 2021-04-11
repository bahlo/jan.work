<?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):

?>
<nav class="site-navigation">
  <ul class="site-navigation__list">
    <?php foreach($items as $item): ?>
    <li class="site-navigation__item">
      <a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>
