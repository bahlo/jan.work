<?php snippet('header') ?>

<div class="wrapper">
  <section class="default-page">
    <h1 class="title-1 page-title"><?= $page->title() ?></h1>
    <?= $page->text()->kt() ?>
  </section>
  <section>
    <ul class="podcast-list">
    <?php foreach($page->children()->listed() as $podcast): ?>
      <li class="podcast-item">
        <figure class="podcast-item-cover">
        <?= $podcast->image()->crop(500) ?>
        </figure>
        <h3 class="podcast-title title-5"><?= $podcast->title() ?></h3>
        <div class="podcast-item__meta">
          <span class="podcast-item__meta-item">
            <a href="<?= $podcast->website() ?>">Website</a>
          </span>
          <?php if($podcast->feed()): ?>
          <span class="podcast-item__meta-item"> • </span>
          <span class="podcast-item__meta-item">
            <a href="<?= $podcast->feed() ?>">Feed</a>
          </span>
          <?php endif; ?>
        </div>
      </li>
    <?php endforeach ?>
    </ul>
  </section>
</div>

<?php snippet('footer') ?>
