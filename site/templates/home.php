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

    <?php snippet('menu') ?>

</div>

<?php snippet('footer') ?>