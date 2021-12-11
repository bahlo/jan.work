<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php snippet('robots'); ?>
  <?php snippet('meta_information'); ?>

  <link rel="alternate" type="application/rss+xml" title="Latest articles" href="<?= site()->url() ?>/feed"/>

  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#e7910c">

  <?= css(['assets/css/main.css']) ?>
  <?= css($page->files()->filterBy('extension', 'css')->pluck('url')) ?>
</head>
<body>
  <a class="skip-link" href='#main'>Skip to content</a>
  <header class="site-header">
    <h1 class="site-title">
      <a href="/">Jan Früchtl, Designer</a>
    </h1>
    <?php snippet('menu') ?>
  </header>
  <main class="main-content" id="main">
