<?php snippet('header') ?>

<div class="wrapper">
  <h1 class="title-1 page-title"><?= $page->title() ?></h1>

  <?php if(param('tag')): ?>
  <div class="hash">
    <?php $tag = param('tag'); echo 'Filter&#58;  &#35;' . $tag ?>
    <a href="<?= url('writing') ?>">Remove</a>
  </div>
  <?php endif ?>
    
  <section class="writing">
    <div class="writing-posts">
      <?php 
        $callback = function($p) {
          return $p->date()->toDate('Y');
        };
        $groupedItems = page()->children()->listed()->group($callback);
        foreach($groupedItems->flip() as $year => $itemsPerYear) : 
      ?>
      <h2 class="title-3"><?= $year ?></h2>
        <ul class="preview__list">
        <?php foreach($itemsPerYear->flip() as $item) : ?>
          <li class="preview__item">
            <h3 class="preview__item-title title-4"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></h3>
            <time class="preview__item-caption title-6"><?= $item->date()->toDate('l, F jS Y') ?></time>
          </li>
        <?php endforeach; ?>
        </ul>
      <?php endforeach; ?>
    </div>
    <aside class="writing-tags">
      <h2 class="title-3">Tags</h2>
    <?php $tags = $page->children()->listed()->pluck('tags', ',', true); ?>
      <ul class="writing-tag-list">
      <?php foreach($tags as $tag): ?>
        <li class="writing-tag-item">
          <a href="<?= url('tags', ['params' => ['tag' => $tag]]) ?>"><?= html($tag) ?></a>
        </li>
      <?php endforeach ?>
      </ul>
    </aside>
  </section>
</div>

<?php snippet('footer') ?>
