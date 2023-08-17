<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?> | <?= $page->title() ?></title>
    <meta name="description" content="<?= $site->description() ?>">
    <!-- fuente Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <!-- output.css -->
    <?= css('assets/css/styles.css') ?>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= url('/') ?>/assets/img/favicon.svg" type="image/x-icon">
    <!-- Alpine con pluging intersect -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body id="body" class="bg-repeat" style="background-image: url(<?= url('/assets/img/tabla.jpg') ?>)">
    <div class="mx-auto overflow-hidden min-h-screen md:grid md:grid-cols-2 lg:border-4 lg:border-indigo-900 xl:max-w-6xl xl:my-12 lg:px-12">