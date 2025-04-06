<?php
the_post();

// Template name: Blog
get_template_part('includes/components/header', 'header');
?>
<main>

    <?php

    $main_post = new WP_Query([
        'posts_per_page' => 1
    ]);

    ?>

    <?php if ($main_post->have_posts()): ?>

        <?php while ($main_post->have_posts()):
            $main_post->the_post(); ?>

            <section class="bg-gray-100 py-24">
                <div class="container">
                    <div class="flex flex-col lg:flex-row flex-wrap lg:flex-nowrap items-start justify-start lg:gap-x-10">
                        <div class="relative w-full lg:w-7/12 aspect-square lg:aspect-none lg:min-h-[630px] mb-6 lg:mb-0">
                            <?php the_post_thumbnail('full', ['class' => 'rounded-xl overflow-hidden fullwidth-bg object-cover']); ?>
                        </div>
                        <div class="lg:w-5/12">
                            <p class="tagline">NOVO</p>
                            <h1 class="section-title text-black mb-6"><?php the_title(); ?></h1>
                            <p class="text-gray-400 text-lg mb-6">
                                <?php echo strip_tags(get_the_excerpt()); ?>
                            </p>
                            <a class="btn-default btn-blue" href="<?php echo get_the_permalink(); ?>">
                                Ler
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        <?php endwhile; ?>


        <section class="postgrid bg-gray-100">
            <div class="container pb-24">

                <p class="tagline">TODOS OS ARTIGOS</p>
                <h2 class="section-title text-black">Confira todos os artigos</h>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mt-10">

                    <?php $i = 0; while ( $i < 6 ) : $i++; ?>

                    <a class="post-card" href="">
                        <div class="post-card-img-wrapper group">
                            <img class="post-card-img group-hover:scale-110" src="<?php echo image_dir('post-placeholder.jpg'); ?>" alt="">
                        </div>
                        <div class="post-card-content">
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

    <?php endif;
    wp_reset_postdata() ?>

    <?php get_template_part('includes/components/pre-footer', 'pre-footer'); ?>

</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>