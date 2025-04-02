<?php

// Template name: Home
get_template_part('includes/components/header', 'header');
?>
<main class="bg-black">

    <section class="relative">
        <div class="container min-h-screen flex flex-col justify-center items-center py-6">
            <p class="p-4 text-white bg-black/50 rounded-md mb-4">
                30 anos de Experiência
            </p>
            <h1 class="font-bold text-blue-300 text-6xl mb-8">
                <span class="block text-white"> Seja bem vindo à</span>
                ALVES AMORIM
            </h1>
            <p class="text-white text-2xl mb-8 text-center">
                Especialistas em perícia digital, Investigação Corporativa e assistência técnica <br> pericial que
                envolva informática e telecomunicações.
            </p>
            <a class="btn-default bg-green-300 flex flex-row items-center justify-center gap-x-2 text-center text-white border-0"
                href="">
                <img width="18" height="18" src="<?php echo image_dir('whatsapp-white.svg') ?>" alt="Ícone whatsapp">
                Falar com um perito
            </a>
        </div>
        <img class="absolute bottom-0 right-0 opacity-10" src="<?php echo image_dir('vector-logo.svg') ?>" alt="">
    </section>

    <section class="bg-blue-400">
        <div class="container py-16 grid grid-cols-3 gap-x-10">
            <div class="bg-black/20 py-8 px-10">
                <img width="56" height="56" class="mb-6" src="<?php echo image_dir('icon-values.svg'); ?>"
                    alt="ícone de engrenagem">
                <h2 class="text-white font-bold text-2xl mb-6">Valores</h2>
                <p class="text-gray-400 text-xl">
                    Em primeiro lugar, somos parceiros dos nossos clientes e estamos comprometidos em preparar o caminho
                    para resolver problemas computacionais que exigem tanta responsabilidade e competência.
                </p>
            </div>
            <div class="bg-black/20 py-8 px-10">
                <img width="56" height="56" class="mb-6" src="<?php echo image_dir('icon-vision.svg'); ?>"
                    alt="ícone de engrenagem">
                <h2 class="text-white font-bold text-2xl mb-6">Visão</h2>
                <p class="text-gray-400 text-xl">
                    Acreditamos também que é possível entregar o melhor alinhando criatividade, ética, transparência e
                    inovação.
                </p>
            </div>
            <div class="bg-black/20 py-8 px-10">
                <img width="56" height="56" class="mb-6" src="<?php echo image_dir('icon-mission.svg'); ?>"
                    alt="ícone de engrenagem">
                <h2 class="text-white font-bold text-2xl mb-6">Missão</h2>
                <p class="text-gray-400 text-xl">
                    Nosso principal foco é ajudar as empresas e tribunais solucionar os crimes cibernéticos com a
                    experiência de mais de 20 anos no mercado.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-gray-100">
        <div class="container py-36">
            <div class="bg-white w-full py-16 px-10 rounded-3xl shadow-md relative">
                <div class="w-5/12">
                    <p class="text-blue-300 text-lg mb-4">Responsável Técnico</p>
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
                    <a class="text-blue-300 text-lg font-bold block underline" href="">Saiba mais</a>
                </div>

                <img width="709" height="792" class="absolute right-0 bottom-0"
                    src="<?php echo image_dir('alves-amorim.png'); ?>" alt="Foto do Dr.Eduardo">
            </div>
        </div>
    </section>

   <section class="bg-white py-24">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold text-black mb-4">Por quê nos escolher?</h2>
      <p class="text-lg text-gray-500">Características</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Item -->
      <div class="flex items-start space-x-4">
        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center shrink-0">
          <!-- Replace with your icon -->
          <span class="text-blue-500 font-bold text-xl">✓</span>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-black mb-1">Experiência Comprovada</h3>
        </div>
      </div>

      <!-- Item -->
      <div class="flex items-start space-x-4">
        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center shrink-0">
          <span class="text-blue-500 font-bold text-xl">✓</span>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-black mb-1">Equipe Especializada</h3>
        </div>
      </div>

      <!-- Item -->
      <div class="flex items-start space-x-4">
        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center shrink-0">
          <span class="text-blue-500 font-bold text-xl">✓</span>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-black mb-1">Compromisso com a Ética</h3>
        </div>
      </div>

      <!-- Item -->
      <div class="flex items-start space-x-4">
        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center shrink-0">
          <span class="text-blue-500 font-bold text-xl">✓</span>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-black mb-1">Reconhecimento no Mercado</h3>
        </div>
      </div>
    </div>
  </div>
</section>


</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>