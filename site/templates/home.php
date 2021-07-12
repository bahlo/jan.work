<?php snippet('header') ?>

<div class="wrapper">
  <section class="intro">
    <h2 class="title-1 intro__title"><?= $page->headline() ?></h2>
    <h3 class="title-2 intro__slogan"><?= $page->slogan() ?></h3>
    <a class="link-enhanced" href="<?php echo url("about"); ?>">Learn more about me →</a>
  </section>

  <hr>
    
  <section class="preview">
    <div class="project-previews">
      <h2 class="title-3 preview__title">Selected Projects</h2>
      <ul class="preview__list">
      <?php 
        $projects = page('portfolio')->children();
        $filteredProjects = $projects->filter(function ($child) {
          return $child->homepage()->toBool() == true;
        })->limit(5);
        
        foreach($filteredProjects as $item): ?>
        <li class="preview__item">
          <h3 class="preview__item-title title-4">
          <?php if($item->type() == "case-study"): ?> 
            <a href="<?= $item->url() ?>"><?= $item->title() ?></a>
            <?php elseif ($item->type() == "project"): ?>
            <a href="<?= $item->link() ?>"><?= $item->title() ?></a>
            <?php elseif ($item->type() == "open-source"): ?>
            <a href="<?= $item->link() ?>"><?= $item->title() ?></a>
          <?php endif ?>
          </h3>
          <span class="preview__item-caption title-6">
            <?php
              if($item->type() == "case-study") {
                echo "Case Study";
              } elseif ($item->type() == "project") {
                echo "Side Project";
              } elseif ($item->type() == "open-source") {
                echo "Open Source";
              }
            ?>
          </span>
        </li>
        <?php endforeach ?>
      </ul>
      <a class="link-enhanced" href="<?php echo url("portfolio"); ?>">See all <?= $projects->count() ?> projects →</a>
    </div>
    <div class="writting-preview">
      <h2 class="title-3 preview__title">Recent Writing</h2>
      <ul class="preview__list">
        <?php 
          $posts = page('writing')->children()->listed();
          foreach($posts->flip()->limit(5) as $item): ?>
        <li class="preview__item">
          <h3 class="preview__item-title title-4"><a href="<?= $item->url() ?>"><?= $item->title() ?></a></h3>
          <time class="preview__item-caption title-6"><?= $item->date()->toDate('l, F jS Y') ?></time>
        </li>
        <?php endforeach ?>
      </ul>
      <a class="link-enhanced" href="<?php echo url("writing"); ?>">See all <?= $posts->count() ?> posts →</a>
    </div>
  </section>
</div>

<?php snippet('footer') ?>
