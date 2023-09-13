<?php snippet('header') ?>

  <?= $site->splash_text()->kirbytext() ?>

  <?= $site->welcome_text()->kirbytext() ?>

    <menu>
        <li><a class="selfies" href="selfies">Selfies</a></li>
        <?php foreach ($site->pages()->listed()->filterBy('template', 'default') as $menu_item): ?>
            <li><a class="<?php e($page->slug() == $menu_item->slug(), 'current') ?>" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a></li>
        <?php endforeach ?>
        <li><a class="essays" href="essays">Essays</a></li>
    </menu>

<?php snippet('footer') ?>