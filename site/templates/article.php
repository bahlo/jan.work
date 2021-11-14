<?php snippet('header') ?>

<article class="post">
  <div class="wrapper wrapper--small">
    <div class="post-header">
      <h1 class="post-title title-1"><?= $page->title() ?></h1>
      <time class="post-date title-6"><?= $page->date()->toDate('l, F jS Y') ?></time>
    </div>
    <div class="post-content"><?= $page->text()->kirbytext() ?></div>
    <?php snippet('post-actions') ?>
  </div>
</article>

<?php snippet('footer') ?>
