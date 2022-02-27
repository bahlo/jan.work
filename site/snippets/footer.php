</main>
<footer class="site-footer">
  <div class="site-footer-content">
    <div class="secondary-navigation">
      <ul class="secondary-navigation__list">
        <li class="secondary-navigation__item">
          <a href="<?php echo url("feed"); ?>">Feed</a>
        </li>
        <li class="secondary-navigation__item">
          <a href="<?php echo url("imprint"); ?>">Imprint</a>
        </li>
      </ul>
    </div>
    <span class="copyright">© <?= date("Y"); ?></span>
  </div>
</footer>
<?php if($page->template() == "article"): ?>
<?= js(['assets/js/prism.js']) ?>
<?php endif ?>
<script defer data-domain="jan.work" src="https://plausible.io/js/plausible.js"></script>
</body>
</html>
