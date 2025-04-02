<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body class="<?php echo body_class('font-inter') ?>">
    <header id="masthead" class="fixed top-0 left-0 w-full z-20">

        <div id="upper-bar" class="bg-blue-400 ">
            <div class="container py-4 text-white text-xl flex flex-row flex-wrap justify-between items-center">
                <div class="flex flex-row flex-nowrap gap-x-6">
                    <p class="font-bold flex flex-row flex-wrap gap-x-2 items-center justify-start">
                        <img width="18" height="18" src="<?php echo image_dir('whatsapp.svg'); ?>"
                            alt="Icone do whatsapp">
                        13 98162.8429
                    </p>
                    <p class="flex flex-row flex-wrap gap-x-2 items-center justify-start">
                        <img width="18" height="18" src="<?php echo image_dir('clock.svg'); ?>" alt="Icone de relógio">
                        <b>Segunda à sexta-feira:</b> 09:00 ás 18:00
                    </p>
                </div>
                <div class="flex flex-row flex-nowrap gap-x-4">
                    <img width="24" height="24" src="<?php echo image_dir('instagram.svg'); ?>"
                        alt="ícone do instagram em branco">
                    <img width="24" height="24" src="<?php echo image_dir('linkedin.svg'); ?>"
                        alt="ícone do linkedin em branco">
                    <img width="24" height="24" src="<?php echo image_dir('facebook.svg'); ?>"
                        alt="ícone do facebook em branco">
                </div>
            </div>
        </div>

        <nav class="menu" id="header-menu">
            <div class="container flex flex-row flex-nowrap items-center justify-between py-4">
                <div class="flex flex-row flex-nowrap items-center justify-start gap-x-14">
                    <a href="<?php echo site_url('/'); ?>">
                        <img src="<?php echo image_dir('logo.svg'); ?>" alt="Logotipo Alves Amorim">
                    </a>

                    <?php
                    $items = [
                        'Início',
                        'Serviços',
                        'Sobre nós',
                        'Blog',
                        'Contato'
                    ];
                    ?>

                    <ul class="text-white text-xl text-white/50 flex flex-row flex-nowrap items-center gap-x-6">
                        <?php foreach ($items as $item): ?>
                            <li class="hover:text-white transition duration-300">
                                <a href="#">
                                    <?php echo $item; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a class="btn-default text-white font-bold text-base bg-transparent" href="#">
                    Fale com um Perito
                </a>
            </div>
        </nav>

    </header>