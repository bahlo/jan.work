<?php snippet('header') ?>

<section class="intro">
  <div class="wrapper wrapper--small">
    <h1 class="intro-slogan title-1"><?= $page->slogan()->html() ?></h1>
    <?= $page->intro()->kirbytext() ?>
  </div>
</section>

<section class="experiences">
  <div class="wrapper wrapper--small">
    <h2 class="title-3">Work Experience</h2>
    <ul class="experiences-list">
    <?php foreach($page->experience()->toStructure() as $item): ?>
      <li class="experiences-item">
        <div class="experiences-item__time">
          <span><?= $item->time() ?></span>
        </div>
        <div class="experiences-item__content">
          <div class="experiences-item__header">
            <h3 class="experiences-item__title title-3"><?= $item->title() ?></h3>
            <span class="experiences-item__location"><?= $item->location() ?></span>
          </div>
          <p class="experiences-item__summary"><?= $item->summary() ?></p>
        </div>
      </li>
    <?php endforeach ?>
    </ul>
  </div>
</section>

<?php snippet('footer') ?>
