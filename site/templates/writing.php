<?php snippet('header') ?>

<section class="writing">
  <div class="wrapper wrapper--small">
    <h2 class="title-1"><?= $page->title() ?></h2>
    <?php 
      $callback = function($p) { return $p->date()->toDate('Y'); };
      $groupedItems = page()->children()->listed()->group($callback);
      foreach($groupedItems->flip() as $year => $itemsPerYear): 
        ?>
    <div class="writing-block">
      <h3 class="title-3"><?= $year ?></h3>
      <ul class="writing__list">
        <?php foreach($itemsPerYear->flip() as $item) : ?>
          <li class="writing__item">
            <h4 class="writing__item-title title-2"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></h4>
            <time class="writing__item-caption"><?= $item->date()->toDate('l, F jS Y') ?></time>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php snippet('footer') ?>
