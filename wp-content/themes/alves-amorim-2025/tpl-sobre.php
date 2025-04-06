<?php
the_post();

// Template name: Sobre nós
get_template_part('includes/components/header', 'header');
?>
<main>

    <section class="bg-gray-100 py-12">
        <div class="container flex flex-col-reverse lg:flex-row flex-wrap lg:flex-nowrap items-center justify-start rounded-xl overflow-hidden bg-white">
            <div class="py-10 lg:py-20 px-10 lg:pr-32 rounded-l-xl">
                <p class="text-blue-300 text-lg mb-4 font-bold">
                    Vamos te ajudar
                </p>
                <h1 class="section-title text-black mb-6">
                    Auxiliar na garantia da Justiça, do amplo direito de defesa, pela liberdade e pela vida
                </h1>
                <p class="text-xl text-gray-400 mb-6">
                    Oferecemos os conhecimentos técnicos e científicos em Tecnologia da Informação e Telecomunicações
                    aos operadores do Direito a fim de garantir evidências inequívocas dos fatos ocorridos.
                </p>
                <a class="btn-default btn-blue" href="">Fale com um Perito</a>
            </div>
            <img class="h-full" src="<?php echo image_dir('alves-amorim-about-image.png'); ?>" alt="">
        </div>
    </section>

    <section class="bg-gray-100">
        <div class="container flex lg:flex-row items-start lg:items-center flex-wrap lg:flex-nowrap justify-start lg:justify-between lg:gap-x-16 gap-y-8 lg:gap-y-0">
            <img class="h-auto" width="513" height="769" src="<?php echo image_dir('alves-amorim-about-image-2.png'); ?>" alt="">
            <div>
                <p class="text-blue-300 text-lg mb-4 font-bold">
                    O QUE FAZEMOS
                </p>
                <h2 class="section-title text-black mb-6">
                    Com o aumento da utilização da tecnologia da informação no mundo todo colaborou para o crescimento
                    de golpes e crimes cibernéticos.
                </h2>
                <p class="text-lg text-gray-400 mb-10">
                    A Perícia Forense Digital e Computacional é o trabalho dedicado à preservação, coleta, análise
                    desses aparelhos eletrônicos como computadores, tablets, celulares e dispositivos móveis, bem como
                    os conteúdos existentes neles, na busca de evidências ou provas que possam ser usadas em um processo
                    administrativo, criminal ou judicial.
                    <br><br>
                    Entendendo o aumento de crimes e fraudes envolvendo a tecnologia, a Perícia Forense Digital e
                    Computacional é cada vez mais essencial no dia-dia das empresas. Coletar e preservar provas no
                    formato digital, garantindo a autenticidade, a integridade com toda a técnica necessária são os
                    pilares da nossa gestão.
                </p>
                <a class="btn-default btn-blue" href="">Fale com um Perito</a>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 relative">

        <img class="hidden lg:block absolute left-0 top-10" src="<?php echo image_dir('vector-bg-gray.svg'); ?>" alt="">

        <img class="hidden lg:block  absolute right-0 top-10 scale-x-[-1] " src="<?php echo image_dir('vector-bg-gray.svg'); ?>" alt="">

        <div class="container flex flex-col lg:flex-row flex-wrap lg:flex-nowrap items-start lg:items-center justify-start lg:justify-between lg:gap-x-10 pt-24">
            <div class="lg:w-4/12">
                <p class="text-blue-300 text-lg mb-4 font-bold">
                    O QUE FAZEMOS
                </p>
                <h2 class="section-title text-black mb-6">
                No que acreditamos
                </h2>
            </div>
            <p class="text-lg text-gray-400 lg:w-8/12">
                Em primeiro lugar, somos parceiros dos nossos clientes e estamos comprometidos em preparar o caminho
                para <b>resolver problemas computacionais</b> que exigem tanta responsabilidade e competência. Nosso principal
                foco é ajudar as empresas e tribunais solucionar os <b>crimes cibernéticos</b> com a experiência de mais de 20
                anos no mercado. Acreditamos também que é possível entregar o melhor alinhando <b>criatividade, ética,
                transparência e inovação.</b>
            </p>
        </div>
        
    </section>

    <?php get_template_part('includes/components/marquee', 'marquee') ?>

    <?php get_template_part('includes/components/pre-footer', 'pre-footer'); ?>

</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>