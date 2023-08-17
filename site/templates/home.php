<?= snippet('header') ?>
<?php $carta = $pages->get('carta');
$secciones = $carta->children()->listed(); ?>

<div id="inicio" class="text-center py-12">
    <div class="w-1 h-12 rounded bg-indigo-900 mx-auto mb-3"></div>
    Café<h1 class="text-5xl font-bold">MANIX</h1>1970
    <div class="w-1 h-12 rounded bg-indigo-900 mx-auto mt-3"></div>
    <?= snippet('idiomas') ?>
    <div class="text-center leading-loose mt-3 max-w-sm mx-auto">
        <?php foreach ($secciones->not('carta/complementos') as $enlace) : ?>
            <a class="anclas" href="#<?= $enlace->title() ?>"><?= $enlace->title() ?></a>
        <?php endforeach ?>
    </div>
</div>
<img src="<?= url('assets/img/abuela.png') ?>" alt="Abuela Concha haciendo empanadillas" class="block px-9 mx-auto max-w-sm mt-auto" />

<?php foreach ($secciones as $seccion) : ?>
    <div id="<?= $seccion->title() ?>" class="seccion">
        <?php if ($seccion->title() == 'Complementos') : ?>
        <?php else : ?>
            <div class="flex gap-4 mb-6">
                <div class="text-2xl font-bold pt-1"><?= $seccion->title() ?></div>
                <div class="grow">
                    <div class="w-full h-1 mt-6 rounded bg-indigo-900 mx-auto mb-3"></div>
                </div>
            </div>
        <?php endif ?>
        <?php $items = $seccion->items()->toStructure();
        foreach ($items as $item) : ?>
            <?php if ($item->tipo() == 'subtit') : ?>
                <small class="block mb-3 max-w-[360px]"><?= $item->tit() ?></small>
            <?php elseif ($item->tipo() == 'subsec') : ?>
                <b class="block mt-6 mb-1"><?= $item->tit() ?></b>
            <?php elseif ($item->tipo() == 'item') : ?>
                <div class="flex mt-3">
                    <div><?= $item->tit() ?></div>
                    <div class="grow text-right"><?= $item->precio() ?> €</div>
                </div>
                <?php if ($item->descripcion()) : ?>
                    <small class="block -mt-1 mb-1 text-indigo-700 max-w-[300px]"><?= $item->descripcion() ?></small>
                <?php endif ?>
            <?php elseif ($item->tipo() == 'extra') : ?>
                <div class="flex mt-6 py-3 border-t border-dotted border-indigo-900">
                    <div><?= $item->tit() ?></div>
                    <div class="grow text-right"><?= $item->precio() ?> €</div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
<?php endforeach ?>

<div class="seccion">
    <small class="inline-block leading-tight">
        <?= $carta->alergenos()->kirbytext() ?>
    </small>
</div>
<div class="text-center pt-12 pb-24 lg:hidden">
    <a href="#inicio" class="underline"><?= $carta->volver() ?></a>
</div>
<div class="lg:col-span-2">
    <img src="<?= url('assets/img/padres.png') ?>" alt="abuela" class="block px-9 max-w-sm mx-auto" />
</div>

<?= snippet('footer') ?>