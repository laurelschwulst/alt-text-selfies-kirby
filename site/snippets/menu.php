<menu class="flex gap-2 grow-0 shrink-0 mb-5">
    <li><a class="ats-button selfies <?php e($page->slug() == 'selfies', 'current') ?>" href="selfies">Selfies</a></li>
    <?php foreach ($site->pages()->listed()->filterBy('template', 'default') as $menu_item): ?>
        <li><a class="ats-button <?php e($page->slug() == $menu_item->slug(), 'current') ?>" href="<?= $menu_item->url() ?>"><?= $menu_item->title() ?></a></li>
    <?php endforeach ?>
    <li><a class="ats-button essays <?php e($page->slug() == 'essays', 'current') ?>" href="essays">Essays</a></li>
</menu>