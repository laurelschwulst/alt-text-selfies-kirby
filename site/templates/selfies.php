<?php snippet('header') ?>

<div class="w-full min-h-screen bg-yellow flex flex-col justify-between items-center">

    <div class="grow-0 shrink-0">
        <?php snippet('title') ?>
    </div>

    <div class="w-[519px] grow shrink-0 flex justify-center items-center">
        <div>
            
            <?php $selfie = $page->children()->listed()->first(); ?>

            <?= $selfie->title() ?>

            <?= $selfie->selfie_content()->kt() ?>

        </div>
    </div>

    <nav id="lateral">
        <a href="" class="next">→</a>
        <a href="" class="previous">←</a>
    </nav>

    <?php snippet('menu') ?>

</div>

<?php snippet('footer') ?>