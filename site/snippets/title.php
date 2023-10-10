<header class="fade-down fixed top-0 left-0 right-0 pb-4 bg-yellow">
  <h1 class="uppercase text-center mt-4">
    <?php if ($page->title() == "Welcome"): ?>
      <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
    <?php else: ?>
      <a href="<?= $site->find('welcome')->url() ?>"><?= $site->title() ?></a>
    <?php endif ?>
  </h1>
</header>