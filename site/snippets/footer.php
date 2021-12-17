</main>
<footer class="site-footer">
  <div class="site-footer-content">
    <div class="secondary-navigation">
      <ul class="secondary-navigation__list">
        <li class="secondary-navigation__item">
          <a href="https://photos.fruechtl.me">Photos</a>
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
  </div>
</footer>
<?php if($page->template() == "article"): ?>
<?= js(['assets/js/prism.js']) ?>
<?php endif ?>
<script defer data-domain="fruechtl.me" src="https://plausible.io/js/plausible.js"></script>
</body>
</html>
