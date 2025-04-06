<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/src/assets/fonts/Nexa-Bold.woff2" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/src/assets/fonts/NexaRegular.woff2" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/src/assets/fonts/Inter.ttf" as="font"
        type="font/truetype" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'Nexa';
            src: url('<?php echo get_template_directory_uri(); ?>/src/assets/fonts/NexaRegular.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Nexa';
            src: url('<?php echo get_template_directory_uri(); ?>/src/assets/fonts/Nexa-Bold.woff2') format('woff2');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter';
            src: url('<?php echo get_template_directory_uri(); ?>/src/assets/fonts/Inter.ttf') format('truetype');
            font-weight: 100 900;
            font-stretch: 75% 125%;
            font-style: normal;
            font-display: swap;
        }
    </style>
</head>

<body <?php body_class('font-inter'); ?>>


    <header id="masthead"
        class="fixed top-0 left-0 w-full z-20 transition duration-300 <?php echo is_page('home') ? '' : 'scrolled'; ?>">

        <div id="upper-bar" class="bg-blue-400 transition duration-300 hidden lg:block">
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


        <?php if (wp_is_mobile()): ?>
            <nav class="w-full" id="mobile-nav">
                <div class="container flex flex-row items-center justify-between py-4">
                    <div class="flex flex-row flex-nowrap items-center gap-x-4">
                        <button class="hamburger hamburger--3d.x" type="button" id="open-menu">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <a href="<?php echo site_url('/'); ?>">
                            <img class="lg:block" id="header-logo" width="78" height="48"
                                src="<?php echo image_dir(is_page('home') ? 'logo.svg' : 'logo-black.svg'); ?>"
                                alt="Logotipo Alves Amorim">
                        </a>
                    </div>
                    <div>
                        <a id="header-btn"
                            class="flex btn-default text-white text-xs font-bold bg-transparent hover:bg-white hover:text-blue-300 transition duration-300"
                            href="#">
                            Fale com um Perito
                        </a>
                    </div>
                </div>
            </nav>
        <?php endif; ?>

        <nav class="menu bg-white lg:bg-transparent w-screen lg:w-auto h-screen lg:h-auto fixed lg:static flex flex-col lg:block justify-between items-start flex-wrap  z-20 top-0 left-0"
            id="header-menu">
            <div class="container lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between lg:py-4">
                <div class="lg:bg-none lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-start gap-x-14">


                    <?php if (!wp_is_mobile()): ?>
                        <a href="<?php echo site_url('/'); ?>">
                            <img class="hidden lg:block" id="header-logo"
                                src="<?php echo image_dir(is_page('home') ? 'logo.svg' : 'logo-black.svg'); ?>"
                                alt="Logotipo Alves Amorim">
                        </a>
                    <?php endif; ?>

                    <button
                        class="fixed top-6 left-4 z-40 lg:hidden w-[50px] h-[50px] text-4xl rounded-full bg-blue-300 text-white flex flex-col items-center justify-center"
                        id="close-menu">
                        &times;
                    </button>

                    <?php
                    $items = [
                        'Início' => site_url('/'),
                        'Serviços' => site_url('/servicos'),
                        'Sobre nós' => site_url('/sobre-nos'),
                        'Blog' => site_url('/blog'),
                        'Contato' => site_url('/contato')
                    ];
                    ?>

                    <ul
                        class="pt-28 lg:pt-0 lg:w-auto  lg:h-auto 
                    lg:static text-gray-400 text-xl lg:text-white/50 flex flex-col lg:flex-row lg:flex-nowrap lg:items-center gap-y-8 lg:gap-y-0 lg:gap-x-6">
                        <?php foreach ($items as $key => $val): ?>
                            <li class="lg:hover:text-white transition duration-300">
                                <a href="<?php echo $val ?>">
                                    <?php echo $key ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <?php if (!wp_is_mobile()): ?>
                    <a id="header-btn"
                        class="hidden lg:flex btn-default text-white font-bold text-base bg-transparent hover:bg-white hover:text-blue-300 transition duration-300"
                        href="#">
                        Fale com um Perito
                    </a>
                <?php endif; ?>


            </div>

            <?php if (wp_is_mobile()): ?>
                <div
                    class="z-30 bottom-0 left-0 lg:hidden mobile-footer w-screen px-8  bg-blue-400 text-white flex flex-col gap-y-2 py-8">
                    <p class="font-bold flex flex-row flex-wrap gap-x-2 items-center justify-start">
                        <img width="24" height="24" src="<?php echo image_dir('whatsapp.svg'); ?>" alt="Icone do whatsapp">
                        13 98162.8429
                    </p>
                    <div class="flex flex-row flex-nowrap gap-x-2 items-center justify-start">
                        <img width="24" height="24" src="<?php echo image_dir('clock.svg'); ?>" alt="Icone de relógio">
                        <p>
                            <b>Segunda à sexta-feira:</b> <span class="block">09:00 ás 18:00</span>
                        </p>
                    </div>

                    <img class="block w-[60%] mx-auto"
                        src="<?php echo image_dir('logo-mobile-menu.svg'); ?>" alt="Logotipo Alves Amorim">

                    <div class="w-full flex flex-row items-center justify-center mt-4 gap-x-4">
                        <img width="24" height="24" src="<?php echo image_dir('instagram.svg'); ?>"
                            alt="ícone do instagram em branco">
                        <img width="24" height="24" src="<?php echo image_dir('linkedin.svg'); ?>"
                            alt="ícone do linkedin em branco">
                        <img width="24" height="24" src="<?php echo image_dir('facebook.svg'); ?>"
                            alt="ícone do facebook em branco">
                    </div>

                </div>
            <?php endif; ?>
        </nav>

    </header>