<?php snippet('header') ?>

<div class="wrapper">
  <?php if(param('tag')): ?>
  <h1 class="title-1 page-title">
    <?php $tag = param('tag'); echo 'Tag&#58; ' . urldecode($tag) ?>
  </h1>
  <?php endif ?>
    
  <section class="writing">
    <div class="writing-posts">
      <ul class="preview__list">
      <?php 
        $tag = param('tag');
        $groupedItems = page('writing')->children()->listed()->flip()->filterBy('tags', urldecode($tag), ',');
        foreach($groupedItems as $item) : 
      ?>
        <li class="preview__item">
          <h3 class="preview__item-title title-4"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></h3>
          <time class="preview__item-caption title-6"><?= $item->date()->toDate('l, F jS Y') ?></time>
        </li>
      <?php endforeach; ?>
      </ul>
    </div>
    <aside class="writing-tags">
      <h2 class="title-3">Tags</h2>
      <?php $tags = page('writing')->children()->listed()->pluck('tags', ',', true); ?>
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
