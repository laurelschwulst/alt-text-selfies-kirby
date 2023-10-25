<?php snippet('header') ?>

<div class="w-full min-h-screen bg-yellow flex flex-col justify-between items-center">

    <div class="grow-0 shrink-0">
        <?php snippet('title') ?>
    </div>

    <?php $selfie = $site->find('selfies')->children()->listed()->shuffle()->first(); ?>

    <?php snippet('selfie', ['selfie' => $selfie]) ?>

    <?php snippet('nav-lateral', ['previousSelfie' => $previousSelfie, 'nextSelfie' => $nextSelfie]) ?>

    <?php snippet('nav-sound') ?>

    <?php snippet('menu') ?>

</div>

<?php snippet('footer') ?>