<?php

// Template name: Home
get_template_part('includes/components/header', 'header');
?>
<main class="bg-black">

    <section class="relative">

        <div class="overlay absolute top-0 left-0 w-full h-full bg-black/50 z-[2]"></div>

        <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay muted loop playsinline preload="auto">
            <source src="<?php echo video_dir('output.mp4'); ?>" type="video/mp4" />
        </video>

        <div class="container min-h-[90vh] lg:min-h-[110vh] xl:min-h-screen flex flex-col justify-center text-center items-center py-6 z-10 relative">
            <p class="p-4 text-white bg-black/50 rounded-md mb-4">
                30 anos de Experiência
            </p>
            <h1 class="font-bold text-blue-300 text-4xl lg:text-6xl mb-8">
                <span class="block text-white"> Seja bem vindo à</span>
                ALVES AMORIM
            </h1>
            <p class="text-white text-lg lg:text-2xl mb-8 text-center">
                Especialistas em perícia digital, Investigação Corporativa e assistência técnica <br> pericial que
                envolva informática e telecomunicações.
            </p>
            <a class="btn-default bg-green-300 flex flex-row items-center justify-center gap-x-2 text-center text-white border-0"
                href="">
                <img width="18" height="18" src="<?php echo image_dir('whatsapp-white.svg') ?>" alt="Ícone whatsapp">
                Falar com um perito
            </a>
        </div>
        <img class="absolute bottom-0 right-0 opacity-10 max-w-[300px] lg:max-w-none"
            src="<?php echo image_dir('vector-logo.svg') ?>" alt="">
    </section>

    <section class="bg-blue-400">
        <div
            class="container py-16 flex flex-col justify-start flex-wrap gap-y-10 lg:gap-y-0 lg:grid lg:grid-cols-3 lg:gap-x-10">
            <div class="bg-black/20 py-8 px-10 rounded-lg">
                <img width="56" height="56" class="mb-6" src="<?php echo image_dir('icon-values.svg'); ?>"
                    alt="ícone de engrenagem">
                <h2 class="text-white font-bold text-2xl mb-6">Valores</h2>
                <p class="text-gray-400 text-lg lg:text-xl">
                    Em primeiro lugar, somos parceiros dos nossos clientes e estamos comprometidos em preparar o caminho
                    para resolver problemas computacionais que exigem tanta responsabilidade e competência.
                </p>
            </div>
            <div class="bg-black/20 py-8 px-10 rounded-lg">
                <img width="56" height="56" class="mb-6" src="<?php echo image_dir('icon-vision.svg'); ?>"
                    alt="ícone de engrenagem">
                <h2 class="text-white font-bold text-2xl mb-6">Visão</h2>
                <p class="text-gray-400 text-lg lg:text-xl">
                    Acreditamos também que é possível entregar o melhor alinhando criatividade, ética, transparência e
                    inovação.
                </p>
            </div>
            <div class="bg-black/20 py-8 px-10 rounded-lg">
                <img width="56" height="56" class="mb-6" src="<?php echo image_dir('icon-mission.svg'); ?>"
                    alt="ícone de engrenagem">
                <h2 class="text-white font-bold text-2xl mb-6">Missão</h2>
                <p class="text-gray-400 text-lg lg:text-xl">
                    Nosso principal foco é ajudar as empresas e tribunais solucionar os crimes cibernéticos com a
                    experiência de mais de 20 anos no mercado.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-gray-100">
        <div class="container py-28 lg:py-36">
            <div class="bg-white w-full py-16 px-10 rounded-3xl shadow-md relative">
                <div class="h-[100px]  lg:hidden"></div>
                <div class="pt-[200px] lg:pt-0 lg:w-5/12">
                    <p class="tagline">Responsável Técnico</p>
                    <h2 class="section-title text-black mb-6 font-bold">
                        Eduardo Henrique <br />
                        Alves Amorim
                    </h2>
                    <ul class="text-gray-400 list-disc pl-4 mb-6">
                        <li class="mb-4">
                            Engenheiro da computação, com formação voltada para análise de sistemas computacionais,
                            projeto
                            e desenvolvimento de firmware e integração de hardware e software, projeto e implementação
                            de
                            protocolos de comunicação.
                        </li>
                        <li class="mb-4">
                            Possui pós-graduação em Telecomunicações, LATU SENSU, MBA em Análise de Sistemas e Telecom.
                            Foi
                            professor do curso MBA em Direito Digital na rede juris (https://redejuris.com/). De 2001 a
                            2016
                            atuou em vários segmentos como instituições financeiras, saúde, entretenimento e esportes e
                            indústria e comércio.
                        </li>
                        <li class="mb-4">
                            Atualmente é perito forense, com forte atuação em investigação criminal tecnológica e crimes
                            virtuais, atuando junto aos magistrados de Goiás, São Paulo, Paraná, Distrito Federal, Santa
                            Catarina, Pernambuco e Rondônia. Atua com tecnologia profissionalmente desde 2001.
                        </li>
                    </ul>
                    <a class="link-default" href="">Saiba mais</a>
                </div>

                <img width="709" height="792"
                    class="absolute top-[-100px] left-0 lg:left-auto mx-auto lg:mx-0 lg:top-auto lg:right-0 lg:bottom-0"
                    src="<?php echo image_dir(wp_is_mobile() ? 'alves-amorim-mobile.png' : 'alves-amorim.png'); ?>"
                    alt="Foto do Dr.Eduardo">
            </div>
        </div>
    </section>

    <section class="bg-gray-100 relative">

        <img class="absolute left-0 right-0 mx-auto top-[50%] translate-y-[-50%] max-w-[80%]"
            src="<?php echo image_dir('logo-vector-bg-choice.svg'); ?>" alt="">

        <div class="container py-32 relative z-10">

            <div class="flex flex-col flex-wrap w-full items-start justify-center text-center mb-10">
                <p class="tagline text-center w-full">
                    Características
                </p>
                <h2 class="section-title text-black text-center w-full">
                    Por quê nos escolher?
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="card bg-white py-6 px-4 rounded-xl shadow-md">
                    <img class="mb-4" width="56" height="56" src="<?php echo image_dir('icon-choice-1.svg'); ?>" alt="">
                    <h3 class="text-2xl font-bold text-black mb-4">
                        Experiência Comprovada
                    </h3>
                    <p class="text-gray-400 text-xl">
                        Com mais de 21 anos de atuação, acumulamos conhecimento sólido em perícia forense digital,
                        garantindo precisão e confiabilidade na análise de evidências.
                    </p>
                </div>

                <div class="card bg-white py-6 px-4 rounded-xl shadow-md">
                    <img class="mb-4" width="56" height="56" src="<?php echo image_dir('icon-choice-2.svg'); ?>" alt="">
                    <h3 class="text-2xl font-bold text-black mb-4">
                        Equipe Especializada
                    </h3>
                    <p class="text-gray-400 text-xl">
                        Nossos peritos possuem expertise em informática, telecomunicações e tecnologia, oferecendo
                        soluções personalizadas para cada caso.
                    </p>
                </div>

                <div class="card bg-white py-6 px-4 rounded-xl shadow-md">
                    <img class="mb-4" width="56" height="56" src="<?php echo image_dir('icon-choice-3.svg'); ?>" alt="">
                    <h3 class="text-2xl font-bold text-black mb-4">
                        Compromisso com a Ética
                    </h3>
                    <p class="text-gray-400 text-xl">
                        Transparência, responsabilidade e inovação guiam nosso trabalho, assegurando resultados
                        confiáveis e alinhados às melhores práticas do setor.
                    </p>
                </div>

                <div class="card bg-white py-6 px-4 rounded-xl shadow-md">
                    <img class="mb-4" width="56" height="56" src="<?php echo image_dir('icon-choice-4.svg'); ?>" alt="">
                    <h3 class="text-2xl font-bold text-black mb-4">
                        Reconhecimento no Mercado
                    </h3>
                    <p class="text-gray-400 text-xl">
                        Somos referência no segmento, atuando junto a grandes escritórios de advocacia, tribunais e
                        empresas de todo o Brasil.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="bg-gray-100 relative">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-y-6 lg:gap-y-0 lg:gap-x-10 py-16">

            <?php if (wp_is_mobile()): ?>

                <img width="350" height="260" class="rounded-l-xl" src="<?php echo image_dir('dr-alves-amorim.jpg'); ?>"
                    alt="">

            <?php endif; ?>

            <div>
                <p class="tagline">
                    COMPETÊNCIAS
                </p>
                <h2 class="section-title mb-6 text-black w-full">
                    Nossas habilidades
                </h2>
                <p class="text-gray-400 text-xl mb-4">
                    Somos especialistas em <b>perícia forense digital</b>, atuando na análise, coleta e preservação
                    de
                    evidências digitais. Com expertise técnica e compromisso ético, oferecemos suporte essencial em
                    diversas áreas.
                </p>
                <p class="text-gray-400 text-xl mb-4">
                    Na <b>Assistência Técnica Judicial</b>, ajudamos advogados e empresas com pareceres técnicos,
                    elaboração de
                    quesitos e impugnação de laudos periciais. Em <b>Investigação Corporativa</b>, lidamos com
                    crimes
                    cibernéticos, vazamento de dados e ataques digitais, protegendo informações estratégicas.
                </p>
                <p class="text-gray-400 text-xl mb-4">
                    Nossa atuação em <b>Perícia Judicial</b> contribui para a inclusão de provas técnicas em
                    processos,
                    auxiliando na busca por decisões justas. Já na Investigação <b>Criminal Tecnológica</b>,
                    analisamos
                    processos para contestação de provas obtidas de forma indevida, fortalecendo estratégias de
                    defesa
                    legal.
                </p>
                <p class="text-gray-400 text-xl mb-6">
                    Com experiência e inovação, nos destacamos no setor, entregando análises precisas e seguras para
                    casos judiciais e corporativos.
                </p>
                <a class="link-default" href="">Conheça nossos Serviços</a>
            </div>
        </div>
        <img width="920" height="659"
            class="hidden lg:block absolute rounded-l-xl right-0 top-[55%] translate-y-[-50%] max-w-[40vw]"
            src="<?php echo image_dir('dr-alves-amorim.jpg'); ?>" alt="">
    </section>

    <section class="bg-black relative overflow-hidden" id="depoimentos">
        <div class="container py-20 lg:py-28">

            <div class="flex flex-col flex-wrap w-full items-start justify-center lg:text-center mb-10">

                <p class="tagline lg:text-center w-full">
                    DEPOIMENTOS
                </p>
                <h2 class="text-left lg:text-center section-title text-white w-full mb-10 lg:mb-20">
                    Palavras de clientes
                </h2>

                <div class="lg:w-[90vw] w-full">
                    <div class="swiper customer-swiper">
                        <div class="swiper-wrapper">
                            <?php $i = 0;
                            while ($i < 8):
                                $i++; ?>
                                <div class="swiper-slide customer-slide text-left group transition duration-300">
                                    <p
                                        class="text-base lg:text-xl mb-4 text-white group-hover:text-gray-400 transition duration-300">
                                        Estou extremamente satisfeito com os serviços da
                                        Alves Amorim. Eles demonstraram um profundo conhecimento e uma abordagem
                                        excepcionalmente dedicada ao meu caso.</p>
                                    <div class="flex flex-row justify-start items-center gap-x-6">
                                        <img class="rounded-full overflow-hidden" width="64" height="64"
                                            src="<?php echo image_dir('avatar.jpg') ?>" alt="">
                                        <p
                                            class="text-lg text-white group group-hover:text-blue-300 transition duration-300">
                                            Analua Mota
                                            <span class="block text-gray-400">
                                                Cliente
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>

            </div>

            <img class="absolute left-0 bottom-0 max-w-[200px] lg:max-w-none"
                src="<?php echo image_dir('vector-customers.svg'); ?>" alt="">

        </div>

        <div class="hidden lg:block ellipsis w-[463px] h-[379px] lg:-top-20 lg:-right-20 xl:-top-40 xl:-right-40"></div>

    </section>

    <?php get_template_part('includes/components/marquee', 'marquee') ?>

    <section class="blog bg-gray-100">
        <div class="container pb-28">

            <div class="flex flex-row flex-nowrap justify-between mb-10 lg:mb-20">
                <div>
                    <p class="text-blue-300 font-bold text-lg mb-4">
                        NOSSO BLOG
                    </p>
                    <h2 class="section-title text-black">Artigos e Notícias</h2>
                </div>
                <a class="underline text-gray-400 font-bold flex flex-row flex-nowrap items-center justify-start gap-x-2"
                    href="">
                    Ver tudo
                    <img width="18" height="18" src="<?php echo image_dir('chevron-right.svg'); ?>" alt="">
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-6 lg:grid-rows-4 gap-x-8 gap-y-8 lg:gap-y-4">

                <?php if (!wp_is_mobile()): ?>
                    <div
                        class="lg:col-span-3 lg:row-span-4 flex flex-col items-start justify-start rounded-xl bg-white overflow-hidden">
                        <img class="h-full lg:h-auto lg:max-h-[320px] w-full object-cover" width="730" height="320"
                            src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Tsunami_by_hokusai_19th_century.jpg" alt="">
                        <div class="content p-8">
                            <div class="text-lg text-gray-400 mb-6">
                                03/03/2025
                            </div>
                            <h3 class="text-black text-2xl">
                                Crime cibernético do ECA e o perito atuando pela defesa
                            </h3>
                        </div>
                    </div>

                <?php else: ?>
                    <div
                        class="lg:col-span-3 lg:row-span-2 lg:col-start-4 flex flex-col lg:flex-row items-start justify-start h-full rounded-xl bg-white overflow-hidden">
                        <img class="h-full w-full lg:w-auto object-cover" width="260" height="220"
                            src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Tsunami_by_hokusai_19th_century.jpg" alt="" />
                        <div class="content p-4 lg:p-8 flex flex-col items-start justify-end w-full h-full">
                            <div class="text-lg text-gray-400 mb-4">
                                03/03/2025
                            </div>
                            <h3 class="text-black text-2xl w-full">
                                Crime cibernético do ECA e o perito atuando pela defesa
                            </h3>
                        </div>
                    </div>

                <?php endif; ?>

                <div
                    class="lg:col-span-3 lg:row-span-2 lg:col-start-4 flex flex-col lg:flex-row items-start justify-start h-full rounded-xl bg-white overflow-hidden">
                    <img class="h-full w-full lg:w-auto object-cover lg:max-w-[260px] lg:max-h-[230px]" width="260" height="220"
                        src="https://www.mauritshuis.nl/media/4lrpkto2/rembrandt-van-rijn-de-nachtwacht-rijksmuseum-amsterdam.jpg?width=1200&height=0&quality=70&v=1d794e12cb8a5d0" alt="" />
                    <div class="content p-4 lg:p-8 flex flex-col items-start justify-end w-full h-full">
                        <div class="text-lg text-gray-400 mb-4">
                            03/03/2025
                        </div>
                        <h3 class="text-black text-2xl w-full">
                            Como contratar uma investigação forense?
                        </h3>
                    </div>
                </div>

                <div
                    class="lg:col-span-3 lg:row-span-2 lg:col-start-4 lg:row-start-3 flex flex-col lg:flex-row items-start justify-start h-full rounded-xl bg-white overflow-hidden">

                    <img class="h-full w-full lg:w-auto object-cover lg:max-w-[260px] lg:max-h-[230px]" width="260" height="220"
                        src="https://media.timeout.com/images/105293264/750/562/image.jpg" alt="" />
                    <div class="content p-4 lg:p-8 flex flex-col items-start justify-end w-full h-full">
                        <div class="text-lg text-gray-400 mb-4">
                            03/03/2025
                        </div>
                        <h3 class="text-black text-2xl w-full">
                            Perito judicial digital: quais as vantagens de contratar?
                        </h3>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php get_template_part('includes/components/pre-footer', 'pre-footer'); ?>

</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>