<?php 
  snippet('header');
  $projects = page()->children()->listed();
?>

<section class="portfolio-intro">
  <div class="wrapper wrapper--small">
    <h1 class="title-1"><?= $page->title() ?></h1>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
  </div>
</section>

<section class="portfolio-case-studies">
  <div class="wrapper">
    <div class="portfolio-case-studies-list">
    <?php foreach($projects->filterBy('type', 'case-study')->limit(5) as $item) : ?>
      <?php snippet('portfolio/case-study', ['data' => $item]) ?>
    <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="portfolio-side-projects">
  <div class="wrapper wrapper--small">
    <h2 class="section-title title-2">Side Projects</h2>
    <div class="portfolio-side-projects-list">
    <?php foreach($projects->filterBy('type', 'project') as $item) : ?>
      <?php snippet('portfolio/project', ['data' => $item]) ?>
    <?php endforeach; ?>
    </div>
  </div>
</section>

<?php snippet('footer') ?>
