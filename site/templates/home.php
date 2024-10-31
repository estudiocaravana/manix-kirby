<?= snippet('header') ?>
<?php $carta = $pages->get('carta');
$secciones = $carta->children()->listed(); ?>

<div id="inicio" class="text-center py-12">
    <div class="w-1 h-12 rounded bg-indigo-900 mx-auto mb-3"></div>
    Café<h1 class="text-5xl font-bold">MANIX</h1>1970
    <div class="w-1 h-12 rounded bg-indigo-900 mx-auto mt-3"></div>
    <?php
    /* snippet('idiomas') */
    ?>
    <div class="text-center leading-loose mt-3 max-w-sm mx-auto">
        <?php foreach ($secciones->not('carta/complementos') as $enlace) : ?>
            <a class="anclas" href="#<?= $enlace->title() ?>"><?= $enlace->title() ?></a>
        <?php endforeach ?>
    </div>
</div>

<?php foreach ($secciones as $seccion) : ?>
    <div id="<?= $seccion->title() ?>" class="seccion">
        <div class="mb-6">
            <div class="text-2xl font-bold pt-1"><?= $seccion->title() ?></div>
        </div>
        <?php $items = $seccion->items()->toStructure();
        foreach ($items as $item) : ?>
            <?php if ($item->tipo() == 'subtit') : ?>
                <span class="block mb-3 max-w-[360px] text-amber-500"><?= $item->tit() ?></span>
            <?php elseif ($item->tipo() == 'subsec') : ?>
                <b class="block mt-6 mb-1"><?= $item->tit() ?></b>
            <?php elseif ($item->tipo() == 'item') : ?>
                <div class="flex mt-2">
                    <div><?= $item->tit() ?></div>
                    <div class="grow text-right whitespace-nowrap"><?= $item->precio() ?> €</div>
                </div>
                <?php if ($item->descripcion()) : ?>
                    <span class="block mb-1 text-indigo-400 max-w-[300px]"><?= $item->descripcion() ?></span>
                <?php endif ?>
            <?php elseif ($item->tipo() == 'extra') : ?>
                <div class="flex mt-2 text-indigo-500">
                    <div>+ <?= $item->tit() ?></div>
                    <div class="grow text-right whitespace-nowrap"><?= $item->precio() ?> €</div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
<?php endforeach ?>

<div class="seccion">
    <small class="inline-block leading-tight text-amber-500">
        <?= $carta->alergenos()->kirbytext() ?>
    </small>
</div>
<div class="text-center pt-12 pb-24 lg:hidden">
    <a href="#inicio" class="underline"><?= $carta->volver() ?></a>
</div>

<?= snippet('footer') ?>