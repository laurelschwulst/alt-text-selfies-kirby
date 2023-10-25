<?php snippet('header') ?>

<div class="w-full min-h-screen flex flex-col justify-between items-center selfies-index">

    <div class="grow-0 shrink-0">
    <header class="fixed top-0 left-0 right-0 pb-4 selfies-index">
        <h1 class="uppercase text-center mt-4">
            <?php if ($page->title() == "Welcome"): ?>
            <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
            <?php else: ?>
            <a href="<?= $site->find('welcome')->url() ?>"><?= $site->title() ?></a>
            <?php endif ?>
        </h1>
    </header>
    </div>

    <div class="w-[519px] grow shrink-0 flex justify-center items-center">
        <div>
            <div class="mb-8">
                <?php snippet('filters', ['filterText' => $filterText]) ?>
            </div>
            <?php foreach ($selfies as $selfie): ?>
                <a class="underline" href="<?= $selfie->url() . $filterParams ?>"><?= $selfie->title() ?></a><br>
            <?php endforeach ?>
        </div>
    </div>

    <?php snippet('nav-sound') ?>

    <div class="fixed bottom-0 left-0 right-0 text-center selfies-index pt-6">
        <div class="block mb-5">
            <nav id="menu-activator">
                <a class="ats-button" style="display: none;">Menu</a>
            </nav>
            <menu class="collapsed uncollapsed gap-2 grow-0 shrink-0 flex text-center">
                <li><a class="ats-button selfies <?php e($page->slug() == 'selfies', 'current') ?>" href="selfies">Selfies</a></li>
                <?php foreach ($site->pages()->listed()->filterBy('template', 'default') as $menu_item): ?>
                    <li><a class="ats-button <?php e($page->slug() == $menu_item->slug(), 'current') ?>" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a></li>
                <?php endforeach ?>
                <li><a class="ats-button essays <?php e($page->slug() == 'essays', 'current') ?>" href="<?= $site->find('essays')->url() ?>">Essays</a></li>
                <li><a class="ats-button close" href="#">Close</a></li>
            </menu>
        </div>
    </div>

</div>

<?php snippet('footer') ?>