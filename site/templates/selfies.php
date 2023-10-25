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

    <?php snippet('menu') ?>

</div>

<?php snippet('footer') ?>