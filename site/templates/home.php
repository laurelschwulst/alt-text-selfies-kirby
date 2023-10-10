<?php snippet('header') ?>

<div class="w-full min-h-screen flex flex-col justify-between items-center bg-black splash">

    <div class="grow-0 shrink-0">
        <header class="fixed top-0 left-0 right-0 pb-4 bg-black">
            <h1 class="uppercase text-center mt-4">
                <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
            </h1>
        </header>
    </div>

    <div class="grow shrink-0 flex justify-center items-center">
        <menu class="flex gap-2 grow-1 shrink-0 mb-5">
            <li>
                <a class="ats-button-large sound" href="welcome">
                    Enter<br>
                    with<br>
                    sound
                </a>
            </li>
            <li>
                <a class="ats-button-large no-sound" href="welcome">
                    Enter<br>
                    * without *<br>
                    sound
                </a>
            </li>
        </menu>
    </div>

</div>

<?php snippet('footer') ?>