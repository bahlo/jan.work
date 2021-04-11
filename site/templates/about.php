<?php snippet('header') ?>

<div class="wrapper">
  <section class="biography">
    <h1 class="title-1 page-title"><?= $page->title() ?></h1>
    <div class="biography-content">
      <?= $page->text()->kirbytext() ?>
    </div>
  </section>

  <hr>

  <section class="experiences">
    <h2 class="section-title title-2">Experience</h2>
    <ul class="resume-list">
      <?php foreach($page->experience()->toStructure() as $item): ?>
      <li class="resume-list__item">
        <details class="collapse">
          <summary>
            <span class="collapse__header">
              <span>
                <h3 class="collapse__title title-4"><?= $item->company() ?></h3>
                <span class="collapse__subtitle title-6"><?= $item->time() ?> • <?= $item->location() ?></span>
              </span>
              <span class="collapse__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
            </span>
          </summary>
          <div class="collapse__content">
            <?= $item->summary()->kirbytext() ?>
          </div>
        </details>
      </li>
      <?php endforeach ?>
    </ul>
  </section>
</div>

<?php snippet('footer') ?>
