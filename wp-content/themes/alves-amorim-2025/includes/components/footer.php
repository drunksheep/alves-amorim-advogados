<footer class="bg-black py-20" id="hull">
    <div class="container flex flex-row flex-nowrap items-start justify-between">
        <ul class="text-white text-xl flex flex-col items-start justify-start gap-y-4">
            <li class="text-gray-400">
                Início
            </li>
            <li>Serviços</li>
            <li>Sobre nós</li>
            <li>Depoimentos</li>
            <li>Blog</li>
            <li>Contato</li>
        </ul>
        <ul class="text-white text-xl flex flex-col items-start justify-start gap-y-4">
            <li class="text-gray-400">
                Serviços
            </li>
            <li>Assistência Técnica Judicial</li>
            <li>Investigação Corporativa</li>
            <li>Perícia Judicial</li>
            <li>Investigação Criminal Tecnológica</li>
        </ul>
        <ul class="text-white text-xl flex flex-col items-start justify-start gap-y-4">
            <li class="text-gray-400">
                Sobre nós
            </li>
            <li>Alves Amorim</li>
            <li>Eduardo Amorim</li>
            <li>Objetivo</li>
        </ul>
        <ul class="text-white text-xl flex flex-col items-start justify-start gap-y-4">
            <li class="text-gray-400">
                Blog
            </li>
            <li>Última publicação</li>
            <li>
                Todas as publicações
            </li>
        </ul>
        <ul class="text-white text-xl flex flex-col items-start justify-start gap-y-4">
            <li class="text-gray-400">
                Social
            </li>
            <li class="flex flex-row flex-nowrap items-center justify-start gap-x-4">
                <img width="18" height="18" src="<?php echo image_dir('instagram.svg'); ?>" alt="Ícone instagram">
                Instagram
            </li>
            <li class="flex flex-row flex-nowrap items-center justify-start gap-x-4">
                <img width="18" height="18" src="<?php echo image_dir('linkedin.svg'); ?>" alt="Ícone Linkedin">
                Linkedin
            </li>
            <li class="flex flex-row flex-nowrap items-center justify-start gap-x-4">
                <img width="18" height="18" src="<?php echo image_dir('facebook.svg'); ?>" alt="Ícone Facebook">
                Facebook
            </li>
        </ul>
        <ul class="text-white text-xl flex flex-col items-start justify-start gap-y-4">
            <li class="text-gray-400">
                Contato
            </li>
            <li class="flex flex-row flex-nowrap items-center justify-start gap-x-4">
                <img width="18" height="18" src="<?php echo image_dir('whatsapp.svg'); ?>" alt="Ícone whatsapp">
                13 98162.8429
            </li>
            <li class="flex flex-row flex-nowrap items-center justify-start gap-x-4">
                <img width="18" height="18" src="<?php echo image_dir('phone.svg'); ?>" alt="Ícone telefone">
                13 98162.8429
            </li>
            <li class="flex flex-row flex-nowrap items-center justify-start gap-x-4">
                <img width="18" height="18" src="<?php echo image_dir('envelope.svg'); ?>" alt="Ícone Facebook">
                Envie um e-mail
            </li>
        </ul>
    </div>
    <div class="container py-20">
        <hr class="border border-gray-400" />
    </div>
    <div class="container pb-20 flex flex-row flex-nowrap items-center justify-between">
        <div class="flex flex-row flex-nowrap items-center justify-start gap-x-6">
            <a href="<?php echo site_url('/'); ?>">
                <img width="232" height="160" src="<?php echo image_dir('logo.svg'); ?>" alt="">
            </a>
            <p class="text-xl text-gray-400">
                ALVES AMORIM PERÍCIA DIGITAL <br />
                Registro N (SP): 0000.0000 <br />
                CNPJ/SP: n º 27.323.999/0001-02
            </p>
        </div>
        <div class="flex flex-row flex-nowrap items-center justify-start gap-x-4">
            <img width="32" height="32" src="<?php echo image_dir('pin.svg'); ?>" alt="">
            <p class="text-white text-xl">
                Av. Engenheiro Luís Carlos Berrini, 1681 - 11º Andar
                <span class="text-gray-400 block">Cidade Monções, São Paulo - SP, 04571-011</span>
            </p>
        </div>
    </div>
    <div class="container pb-20">
        <hr class="border border-gray-400" />
    </div>
    <div class="container flex flex-row flex-wrap items-center justify-between">
        <p class="text-xl text-gray-400">
            Copyright © 2025 Alves Amorim Perícia Digital. Todos os direitos reservados.
        </p>
        <a href="https://artedez.com.br/" target="_BLANK" title="Artedez">
            Criação de sites:
            <img width="100" height="24" src="<?php echo image_dir('artedez.svg'); ?>" alt="Logo Artedez">
        </a>
    </div>
</footer>

<a href="#" class="btn-default rounded-full bg-green-600 hover:scale-110 transition duration-300 fixed right-10 bottom-10 flex flex-nowrap flex-row items-center justify-center border-0 z-20">
    <img class="filter" width="24" height="24" src="<?php echo image_dir('whatsapp-white.svg'); ?>" alt="">
    <p class="text-white text-sm"> WhatsApp</p>
</a>
<?php wp_footer(); ?>
</body>

</html>