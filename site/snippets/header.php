<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café Mánix</title>
    <meta name="description" content="<?= $site->description() ?>">
    <!-- fuente Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <!-- output.css -->
    <?= css('assets/css/styles.css?v=24103100') ?>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= url('/') ?>/assets/img/favicon.svg" type="image/x-icon">
    <!-- Alpine con pluging intersect -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body id="body" class="bg-repeat" style="background-image: url(<?= url('/assets/img/nnnoise.svg') ?>)">
    <div class="bg-white relative mx-auto overflow-hidden min-h-screen lg:border-x lg:border-indigo-100 xl:max-w-7xl lg:py-12">
        <!-- línea central -->
        <div class="absolute top-0 bottom-0 left-1/2 h-full border-l border-indigo-100 z-0 hidden md:block xl:hidden"></div>
        <!-- columna central -->
        <div class="absolute top-0 bottom-0 left-1/2 -translate-x-1/2 w-1/3 h-full border-x border-indigo-100 z-0 hidden xl:block"></div>
        <div class="relative z-10">

            <div class="md:grid md:grid-cols-2 xl:grid-cols-3">