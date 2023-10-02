<?php snippet('header') ?>

<div class="w-full min-h-screen bg-yellow flex flex-col justify-between items-center">

    <div class="grow-0 shrink-0">
        <?php snippet('title') ?>
    </div>

    <div class="w-[519px] grow shrink-0 flex justify-center items-center mt-24 mb-24">
        <div>
            
            <?php $selfie = $page->children()->listed()->shuffle()->first(); ?>

            <div class="italic">
                <?= $selfie->title() ?>
            </div>

            <div class="mt-4 mb-5">
                <button class="ats-button listen">Listen</button>
            </div>

            <?= $selfie->selfie_content()->kt() ?>

        </div>
    </div>

    <?php snippet('nav-lateral') ?>

    <?php snippet('nav-sound') ?>

    <?php snippet('menu-collapsed') ?>

</div>

<?php snippet('footer') ?>