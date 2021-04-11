<?php snippet('header') ?>

<div class="wrapper">
  <h1 class="title-1 page-title"><?= $page->title() ?></h1>
  <section class="portfolio-items">
    <?php $projects = page()->children()->listed(); ?>

    <div class="portfolio-case-case-study">
      <div class="project-list">
        <div class="project-list">
        <?php foreach($projects->filterBy('type', 'case-study')->limit(5) as $item) : ?>
          <?php snippet('portfolio/case-study', ['data' => $item]) ?>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
      
    <div class="portfolio-case-projects">
      <h2 id="selected-projects" class="section-title title-3">Selected Projects</h2>
      <div class="project-list project-list--simple">
      <?php foreach($projects->filterBy('type', 'project') as $item) : ?>
        <?php snippet('portfolio/project', ['data' => $item]) ?>
      <?php endforeach; ?>
      </div>
    </div>

    <div class="portfolio-case-open-source">
      <h2 id="open-source-projects" class="section-title title-3">Open Source</h2>
      <div class="project-list project-list--simple">
      <?php foreach($projects->filterBy('type', 'open-source') as $item) : ?>
        <?php snippet('portfolio/project', ['data' => $item]) ?>
      <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>

<?php snippet('footer') ?>
