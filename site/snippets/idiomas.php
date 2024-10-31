<nav class="my-9">
    <div class="flex mx-auto w-72 justify-between text-base">
        <?php foreach ($kirby->languages() as $language) : ?>
            <div class="block border border-indigo-900 w-11 h-11 pt-2 rounded-full <?php e($kirby->language() == $language, 'bg-indigo-900 text-indigo-100') ?>">
                <a href="<?php echo $language->url() ?>" hreflang="<?php echo $language->code() ?>">
                    <?php echo html($language->code()) ?>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</nav>