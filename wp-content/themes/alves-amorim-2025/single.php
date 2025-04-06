<?php
get_template_part('includes/components/header', 'header');
the_post();
?>
<main>

    <section class="bg-gray-100">
        <div class="container">
            <div
                class="pt-24 pb-14 breacrumb-variant flex flex-row flex-nowrap items-center justify-start gap-x-8 mb-16">
                <a class="btn-default btn-blue" href="">Voltar</a>
                <?php get_template_part('includes/components/breadcrumb', 'breadcrumb') ?>
            </div>
            <div class="flex flex-col items-center justify-center pb-6">
                <p class="tagline">
                    <?php echo get_the_time('d/m/Y'); ?>
                </p>
                <h1 class="section-title text-black mb-6"><?php the_title(); ?></h1>
                <p class="text-gray-400">5 MIN</p>
            </div>
        </div>
    </section>

    <section>
        <?php the_post_thumbnail('full', ['class' => 'aspect-video object-cover w-full max-h-[700px]']); ?>
    </section>

    <section class="post-content-wrapper relative">
        <div class="container py-20 flex flex-row items-start gap-x-10">
            <div class="content-wrapper w-8/12" id="single-content">
                <?php the_content(); ?>
            </div>
            <aside class="w-4/12 sticky top-[240px]" id="sidebar">
                <div class="sharer mt-6">
                    <p class="tagline">
                        COMPARTILHE
                    </p>
                    <div class="flex flex-row flex-nowrap items-center gap-x-4">
                        <a class="aspect-square p-4 rounded-lg bg-blue-300 hover:bg-blue-400 transition duration-300" href="#">
                            <img width="24" height="24" src="<?php echo image_dir('instagram-white.svg'); ?>" alt="">
                        </a>
                        <a class="aspect-square p-4 rounded-lg bg-blue-300 hover:bg-blue-400 transition duration-300" href="#">
                            <img width="24" height="24" src="<?php echo image_dir('whatsapp-white-2.svg') ?>" alt="">
                        </a>
                        <a class="aspect-square p-4 rounded-lg bg-blue-300 hover:bg-blue-400 transition duration-300" href="#">
                            <img width="24" height="24" src="<?php echo image_dir('link.svg') ?>" alt="">
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <?php get_template_part('includes/components/pre-footer', 'pre-footer'); ?>

</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>