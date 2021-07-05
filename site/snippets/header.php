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

  <meta name="theme-color" content="#fcf9f8" media="(prefers-color-scheme: light)">
  <meta name="theme-color" content="#fcf9f8" media="(prefers-color-scheme: dark)">

  <?= css(['assets/css/main.css']) ?>
</head>
<body>
<a class="skip-link" href='#main'>Skip to content</a>
<div class="wrapper">
  <header class="site-header">
    <h1 class="site-title title-3">
      <a href="/">Jan Früchtl</a>
    </h1>
    <?php snippet('menu') ?>
  </header>
</div>
<main class="main-content" id="main">
