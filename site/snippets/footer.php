</main>
<div class="wrapper">
  <footer class="site-footer">
    <div class="secondary-navigation">
      <ul class="secondary-navigation__list">
        <li class="secondary-navigation__item">
          <a href="https://micro.fruechtl.me">Microblog</a>
        </li>
        <li class="secondary-navigation__item">
          <a href="https://photos.fruechtl.me">Photos</a>
        </li>
        <li class="secondary-navigation__item">
          <a href="<?php echo url("podcasts"); ?>">Podcasts</a>
        </li>
        <li class="secondary-navigation__item">
          <a href="<?php echo url("feed"); ?>">Feed</a>
        </li>
        <li class="secondary-navigation__item">
          <a href="<?php echo url("imprint"); ?>">Imprint</a>
        </li>
      </ul>
    </div>
    <span class="copyright">© 2021</span>
  </footer>
</div>
<?php if($page->template() == "article"): ?>
<?= js(['assets/js/prism.js']) ?>
<?php endif ?>
<script async defer data-domain="fruechtl.me" src="https://plausible.io/js/plausible.js"></script>
</body>
</html>
