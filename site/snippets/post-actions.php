<div class="post-actions">
  <form class="post-actions__like" action="<?= $page->url() ?>/like/toggle">
  <?php if($page->hasLiked()): ?>
    <button class="link-button link-button--post">Unlike post 👎</button>
  <?php else: ?>
    <button class="link-button link-button--post">Like post 👍</button>
  <?php endif ?>
  </form>
  <a class="link-button link-button--post" href="mailto:jan@fruechtl.me?subject=<?= $page->title() ?>">Reply via email</a>
</div>
