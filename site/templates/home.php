<?php snippet('header') ?>

<div class="w-full min-h-screen bg-yellow flex flex-col justify-between items-center">
    <div class="grow-0 shrink-0">
        <?php snippet('title') ?>
    </div>

    <div class="w-[519px] grow shrink-0 flex justify-center items-center">
        <div>
            <?= $site->welcome_text()->kirbytext() ?>
        </div>
    </div>

    <menu class="flex gap-2 grow-0 shrink-0 mb-4">
        <li class="ats-button"><a class="selfies" href="selfies">Selfies</a></li>
        <?php foreach ($site->pages()->listed()->filterBy('template', 'default') as $menu_item): ?>
            <li class="ats-button"><a class="<?php e($page->slug() == $menu_item->slug(), 'current') ?>" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a></li>
        <?php endforeach ?>
        <li class="ats-button"><a class="essays" href="essays">Essays</a></li>
    </menu>

</div>

<?php snippet('footer') ?>