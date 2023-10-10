<div class="fixed bottom-0 left-0 right-0 text-center bg-yellow pt-6 fade-up">
    <div class="block mb-5">
        <nav id="menu-activator">
            <a class="ats-button">Menu</a>
        </nav>
        <menu class="collapsed gap-2 grow-0 shrink-0 flex text-center">
            <li><a class="ats-button selfies <?php e($page->slug() == 'selfies', 'current') ?>" href="selfies">Selfies</a></li>
            <?php foreach ($site->pages()->listed()->filterBy('template', 'default') as $menu_item): ?>
                <li><a class="ats-button <?php e($page->slug() == $menu_item->slug(), 'current') ?>" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a></li>
            <?php endforeach ?>
            <li><a class="ats-button essays <?php e($page->slug() == 'essays', 'current') ?>" href="<?= $site->find('essays')->url() ?>">Essays</a></li>
            <li><a class="ats-button close" href="#">Close</a></li>
        </menu>
    </div>
</div>