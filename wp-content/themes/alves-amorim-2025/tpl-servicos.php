<?php

// Template name: Serviços
get_template_part('includes/components/header', 'header');
?>
<main class="bg-black">

    <section class="bg-gray-100">
        <div class="container py-12  lg:py-36 flex flex-col flex-wrap items-center justify-center">

            <div class="lg:w-8/12 text-center mb-12">
                <p class="tagline">
                    SERVIÇOS
                </p>
                <h2 class="section-title mb-6 text-black w-full">
                    Como podemos ajudar?
                </h2>
                <p class="text-gray-400 text-lg lg:text-xl">
                    O perito forense digital é especialista em identificar, coletar e analisar provas digitais em
                    computadores, e-mails, aplicativos e dispositivos eletrônicos. Seu trabalho dedicado à preservação,
                    coleta e análise de registros e logs armazenados aparelhos eletrônicos.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-x-4 gap-y-8 lg:gap-y-0">

                <div class="service-item group hover:bg-blue-300 druation-300 transition">
                    <img class="mb-6 filter group-hover:brightness-0 group-hover:invert transition duration-300"
                        width="32" height="32" src="<?php echo image_dir('hammer.svg'); ?>" alt="">
                    <h2 class="text-2xl text-black font-bold mb-4 group-hover:text-white transition-all duration-300">
                        Assistência Técnica Judicial
                    </h2>
                    <p class="text-lg text-gray-400 group-hover:text-white transition-all duration-300">
                        Elaboração de quesitos, parecer técnico. Acompanhamento de diligência pericial, impugnação
                        técnica do laudo oficial, com base no conhecimento
                        técnico e cientifico necessário para resolução da causa.
                    </p>
                    <div class="btn-wrapper mt-6 lg:h-0 group-hover:h-[54px] transition-[height] duration-300 ease-in-out">
                        <a class="btn-default bg-blue-300 text-white lg:bg-transparent lg:border-white w-full max-w-none text-center overflow-hidden hover:bg-white hover:text-blue-300"
                            href="<?php echo site_url('/servicos/assistencia-tecnica-judicial/') ?>">
                            Ver mais
                        </a>
                    </div>
                </div>

                <div class="service-item group hover:bg-blue-300">
                    <img class="mb-6 filter group-hover:brightness-0 group-hover:invert transition duration-300 "
                        width="32" height="32" src="<?php echo image_dir('glass.svg'); ?>" alt="">
                    <h2 class="text-2xl text-black font-bold mb-4 group-hover:text-white transition-all duration-300">
                        Investigação Corporativa
                    </h2>
                    <p class="text-lg text-gray-400 group-hover:text-white transition-all duration-300">
                        Nossa expertise, comprovada por clientes, conferem nosso atendimento nas seguintes demandas:
                        Crimes Cibernéticos Bancários, Crimes cibernéticos ocasionados por Ransonware, Crimes virtuais
                        com vazamento de dados.
                    </p>
                    <div class="btn-wrapper mt-6 lg:h-0 group-hover:h-[54px] transition-[height] duration-300 ease-in-out">
                        <a class="btn-default bg-blue-300 text-white lg:bg-transparent lg:border-white w-full max-w-none text-center overflow-hidden hover:bg-white hover:text-blue-300"
                            href="<?php echo site_url('/servicos/assistencia-tecnica-judicial/') ?>">
                            Ver mais
                        </a>
                    </div>
                </div>

                <div class="service-item group hover:bg-blue-300">
                    <img class="mb-6 filter group-hover:brightness-0 group-hover:invert transition duration-300 "
                        width="32" height="32" src="<?php echo image_dir('files.svg'); ?>" alt="">
                    <h2 class="text-2xl text-black font-bold mb-4 group-hover:text-white transition-all duration-300">
                        Perícia Judicial
                    </h2>
                    <p class="text-lg text-gray-400 group-hover:text-white transition-all duration-300">
                        Incorporar autos com provas carregadas de teores técnico é de extrema importância para a
                        pronunciação de uma sentença justa e imparcial. Atenta justamente a essa vertente peritos
                        judiciais, nos especializamos e hoje auxiliamos a Justiça em todo o Brasil.
                    </p>
                    <div class="btn-wrapper mt-6 lg:h-0 group-hover:h-[54px] transition-[height] duration-300 ease-in-out">
                        <a class="btn-default bg-blue-300 text-white lg:bg-transparent lg:border-white w-full max-w-none text-center overflow-hidden hover:bg-white hover:text-blue-300"
                            href="<?php echo site_url('/servicos/assistencia-tecnica-judicial/') ?>">
                            Ver mais
                        </a>
                    </div>
                </div>
                <div class="service-item group hover:bg-blue-300">
                    <img class="mb-6 filter group-hover:brightness-0 group-hover:invert transition duration-300 "
                        width="32" height="32" src="<?php echo image_dir('pc.svg'); ?>" alt="">
                    <h2 class="text-2xl text-black font-bold mb-4 group-hover:text-white transition-all duration-300">
                        Investigação Criminal Tecnológica
                    </h2>
                    <p class="text-lg text-gray-400 group-hover:text-white transition-all duration-300">
                        Atuamos juntamente com os advogados de defesa do processo; analisamos o processo como um todo,
                        verificando se há elementos para impugnar o mesmo, através da inadmissibilidade.
                    </p>
                    <div class="btn-wrapper mt-6 lg:h-0 group-hover:h-[54px] transition-[height] duration-300 ease-in-out">
                        <a class="btn-default bg-blue-300 text-white lg:bg-transparent lg:border-white w-full max-w-none text-center overflow-hidden hover:bg-white hover:text-blue-300"
                            href="<?php echo site_url('/servicos/assistencia-tecnica-judicial/') ?>">
                            Ver mais
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php get_template_part('includes/components/pre-footer', 'pre-footer'); ?>

</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>