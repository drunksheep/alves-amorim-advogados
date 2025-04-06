<?php
the_post();

// Template name: Serviço
get_template_part('includes/components/header', 'header');
?>
<main class="bg-black">

    <section class="relative">
        <img class="fullwidth-bg" src="<?php echo image_dir('bg-service-1.jpg'); ?>" alt="">
        <div class="container relative z-10 flex flex-col flex-wrap justify-end items-start min-h-[640px] pb-24">
            <?php get_template_part('includes/components/breadcrumb', 'breadcrumb') ?>
            <div class="flex flex-row flex-wrap items-center justify-start gap-x-6">
                <img class="filter brightness-0 invert" width="80" height="80"
                    src="<?php echo image_dir('hammer.svg'); ?>" alt="">
                <h1 class="section-title text-white"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class=" bg-gray-100 py-20">
        <div class="container flex flex-row flex-nowrap justify-start items-start gap-x-10">
            <div class="lg:max-w-[65%] content-wrapper">
                <?php the_content(); ?>
            </div>
            <aside class="sticky top-[240px] w-full self-start">
                <div class="p-8 bg-white shadow-lg rounded-2xl mb-10">
                    <p class="font-bold text-lg mb-6 text-blue-300">Outros serviços</p>
                    <?php
                    if (is_page() && $post->post_parent) {

                        $siblings = get_pages([
                            'parent' => $post->post_parent,
                            'sort_column' => 'menu_order'
                        ]);

                        if ($siblings):
                            ?>
                            <ul
                                class="sibling-pages w-full flex flex-col flex-wrap gap-y-6 text-gray-400">
                                <?php foreach ($siblings as $sibling): ?>
                                    <li class="<?php if ($sibling->ID === $post->ID)
                                        echo 'current-page'; ?>">
                                        <a class="hover:text-black hover:underline" href="<?php echo get_permalink($sibling->ID); ?>">
                                            <?php echo esc_html($sibling->post_title); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php
                        endif;
                    }
                    ?>
                </div>
                <a href="" class="btn-default bg-blue-300 max-w-none w-full text-white transition duration-300 hover:bg-blue-400">
                    Fale com um Perito
                </a>
            </aside>
        </div>
    </section>

    <?php get_template_part('includes/components/pre-footer', 'pre-footer'); ?>

</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>