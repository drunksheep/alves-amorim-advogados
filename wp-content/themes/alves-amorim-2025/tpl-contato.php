<?php
the_post();

// Template name: Contato
get_template_part('includes/components/header', 'header');
?>
<main>

    <?php get_template_part('includes/components/contact-cta', 'contact-cta'); ?>

    <section class="bg-gray-100">
        <div class="container pt-24 pb-40">
            <p class="tagline">Meios de contato</p>
            <h1 class="section-title text-black mb-12">Contate-se conosco</h1>
            <div class="grid grid-cols-3 gap-x-12">

                <div class="bg-blue-400 px-8 py-10 rounded-xl flex flex-col items-start justify-start">
                    <div class="flex flex-row flex-nowrap items-center justify-start gap-x-4 w-full mb-6">
                        <img width="40" height="40" src="<?php echo image_dir('whatsapp.svg'); ?>" alt="">
                        <p class="text-white text-xl">
                            <span class="text-gray-400 block uppercase font-bold">Whatsapp</span>
                            13 98162.8429
                        </p>
                    </div>
                    <a class="text-white text-lg font-bold flex flex-row flex-nowrap items-center justify-start gap-x-2 hover:underline"
                        href="">
                        Enviar mensagem
                        <img width="24" height="24" src="<?php echo image_dir('chevron-right.svg'); ?>" alt="">
                    </a>
                </div>
                <div class="bg-blue-400 p-8 rounded-xl flex flex-col items-start justify-start">
                    <div class="flex flex-row flex-nowrap items-center justify-start gap-x-4 w-full mb-6">
                        <img width="40" height="40" src="<?php echo image_dir('phone.svg'); ?>" alt="">
                        <p class="text-white text-xl">
                            <span class="text-gray-400 block uppercase font-bold">Telefone</span>
                            13 98162.8429
                        </p>
                    </div>
                    <a class="text-white text-lg font-bold flex flex-row flex-nowrap items-center justify-start gap-x-2 hover:underline"
                        href="">
                        Ligar
                        <img width="24" height="24" src="<?php echo image_dir('chevron-right.svg'); ?>" alt="">
                    </a>
                </div>
                <div class="bg-blue-400 p-8 rounded-xl flex flex-col items-start justify-start">
                    <div class="flex flex-row flex-nowrap items-center justify-start gap-x-4 w-full mb-6">
                        <img width="40" height="40" src="<?php echo image_dir('envelope.svg'); ?>" alt="">
                        <p class="text-white text-xl">
                            <span class="text-gray-400 block uppercase font-bold">e-mail</span>
                            email@email.com
                        </p>
                    </div>
                    <a class="text-white text-lg font-bold flex flex-row flex-nowrap items-center justify-start gap-x-2 hover:underline"
                        href="">
                        Enviar E-mail
                        <img width="24" height="24" src="<?php echo image_dir('chevron-right.svg'); ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue-300 relative">
        <div class="container py-12">
            <div class="w-5/12">
                <div class="flex flex-row flex-nowrap items-center justify-start gap-x-6">
                    <img width="40" height="40" src="<?php echo image_dir('pin-dark.svg') ?>" alt="">
                    <p class="text-xl text-white">
                        <span class="block opacity-50 mb-2">ENDEREÇO</span>
                        <span class="text-xl">Av. Engenheiro Luís Carlos Berrini, 1681 - 11º Andar</span>
                        <span class="block opacity-50">
                            Cidade Monções, São Paulo - SP, 04571-011
                        </span>
                    </p>
                </div>
                <a class="text-white text-lg mt-8 flex flex-row flex-nowrap gap-x-2" href="">
                    Rotas <img class="filter brightness-0 invert" width="24" height="24" src="<?php echo image_dir('chevron-right.svg'); ?>" alt="">
                </a>
            </div>
        </div>

        <div class="min-h-[400px] absolute right-0 lg:w-6/12 xl:w-7/12 z-10 top-[-25%] shadow-lg rounded-xl">
            <iframe class="absolute top-0 left-0 w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.075426909098!2d-46.65381282391433!3d-23.565734361754338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1743871313479!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <div class="bg-gray-100 py-24"></div>

</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>