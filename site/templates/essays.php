<?php snippet('header') ?>

<div class="w-full min-h-screen bg-yellow flex flex-col justify-between items-center">

    <div class="grow-0 shrink-0">
      <?php snippet('title') ?>
    </div>

    <div class="grow-0 shrink-0">
      <?php snippet('subtitle') ?>
    </div>

    <div class="w-[855px] grow shrink-0 flex justify-center items-center mt-12 mb-24">
      <div>
        <?= $site->essays_text()->kirbytext() ?>

        <ul>
        <?php foreach ($page->children()->listed() as $essay): ?>
            <li class="mb-3">
                <a class="underline" href="<?= $essay->url() ?>"><?= $essay->title() ?></a><br>
                <i><?= $essay->author() ?></i>
            </li>
        <?php endforeach ?>
        </ul>
        
      </div>
    </div>

    <?php snippet('nav-sound') ?>

    <?php snippet('menu-collapsed') ?>

</div>

<?php snippet('footer') ?>