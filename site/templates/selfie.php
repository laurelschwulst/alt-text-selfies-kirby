<?php snippet('header') ?>

<div class="w-full min-h-screen bg-yellow flex flex-col justify-between items-center">

    <div class="grow-0 shrink-0">
        <?php snippet('title') ?>
    </div>

    <div class="w-[519px] grow shrink-0 flex justify-center items-center mt-24 mb-24">
        <div>
            <div class="italic">
                <?= $page->title() ?>
            </div>

            <?= $page->selfie_content()->kt() ?>
        </div>
    </div>

    <?php snippet('nav-sound') ?>

    <?php snippet('menu-collapsed') ?>

</div>

<?php snippet('footer') ?>