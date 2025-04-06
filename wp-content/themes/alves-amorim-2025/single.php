<?php
get_template_part('includes/components/header', 'header');
the_post();
?>
<main>

    <section class="bg-gray-100">
        <div class="container">
            <div
                class="pt-10 lg:pt-24 lg:pb-14 breacrumb-variant flex flex-row flex-nowrap items-center justify-start gap-x-4 lg:gap-x-8 mb-16">
                <a class="btn-default max-w-[100px] lg:max-w-auto btn-blue" href="">Voltar</a>
                <?php get_template_part('includes/components/breadcrumb', 'breadcrumb') ?>
            </div>
            <div class="flex flex-col items-center justify-center pb-6">
                <p class="tagline">
                    <?php echo get_the_time('d/m/Y'); ?>
                </p>
                <h1 class="section-title text-black mb-6 text-center"><?php the_title(); ?></h1>
                <p class="text-gray-400">5 MIN</p>
            </div>
        </div>
    </section>

    <section>
        <?php the_post_thumbnail('full', ['class' => 'aspect-video object-cover w-full max-h-[700px]']); ?>
    </section>

    <section class="post-content-wrapper relative">
        <div class="container py-20 flex flex-col-reverse lg:flex-row items-start lg:gap-x-10 gap-y-10 lg:gap-y-0">
            <div class="content-wrapper w-full lg:w-8/12" id="single-content">
                <?php the_content(); ?>
            </div>
            <aside class="w-full lg:w-4/12 lg:sticky lg:top-[240px]" id="sidebar">
                <div class="sharer mt-6">
                    <p class="tagline">
                        COMPARTILHE
                    </p>
                    <div class="flex flex-row flex-nowrap items-center gap-x-4">
                        <a class="aspect-square p-4 rounded-lg bg-blue-300 hover:bg-blue-400 transition duration-300"
                            href="#">
                            <img width="24" height="24" src="<?php echo image_dir('instagram-white.svg'); ?>" alt="">
                        </a>
                        <a class="aspect-square p-4 rounded-lg bg-blue-300 hover:bg-blue-400 transition duration-300"
                            href="#">
                            <img width="24" height="24" src="<?php echo image_dir('whatsapp-white-2.svg') ?>" alt="">
                        </a>
                        <a class="aspect-square p-4 rounded-lg bg-blue-300 hover:bg-blue-400 transition duration-300"
                            href="#">
                            <img width="24" height="24" src="<?php echo image_dir('link.svg') ?>" alt="">
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <section class="related-posts bg-gray-100">
        <div class="container py-12 lg:pb-40">

            <div class="flex flex-row flex-nowrap justify-between mb-10 lg:mb-20">
                <div>
                    <p class="text-blue-300 font-bold text-lg mb-4">
                        NOSSO BLOG
                    </p>
                    <h2 class="section-title text-black">Leia mais</h2>
                </div>
                <a class="underline text-gray-400 font-bold flex flex-row flex-nowrap items-center justify-start gap-x-2"
                    href="">
                    Ver tudo
                    <img width="18" height="18" src="<?php echo image_dir('chevron-right.svg'); ?>" alt="">
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mt-10">
                <?php $i = 0;
                while ($i < 3):
                    $i++; ?>
                    <a class="post-card" href="">
                        <div class="post-card-img-wrapper group">
                            <img class="post-card-img group-hover:scale-110"
                                src="<?php echo image_dir('post-placeholder.jpg'); ?>" alt="">
                        </div>
                        <div class="post-card-content bg-white">
                            <p class="post-card-date">
                                03/03/2025
                            </p>
                            <h2 class="post-card-title">Como contratar uma investigação forense?</h2>
                        </div>
                    </a>
                <?php endwhile ?>
            </div>

        </div>
    </section>

    <?php get_template_part('includes/components/pre-footer', 'pre-footer'); ?>

</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>