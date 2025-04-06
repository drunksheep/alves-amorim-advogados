<section class="bg-gray-100 py-24">

    <div class="marquee mb-10">
        <div class="track">
            <?php $i = 0;
            while ($i < 6):
                $i++; ?>
                <div class="slide brand-slide grayscale hover:grayscale-0 transition">
                    <img width="250" height="100" src="<?php echo image_dir('logo-meditron.png') ?>" alt="">
                </div>
                <div class="slide brand-slide grayscale hover:grayscale-0 transition">
                    <img width="250" height="100" src="<?php echo image_dir('logo-danreal.png') ?>" alt="">
                </div>
            <?php endwhile ?>
        </div>
    </div>
    <div class="marquee">
        <div class="track track-reverse">
            <?php $i = 0;
            while ($i < 6):
                $i++; ?>
                <div class="slide brand-slide grayscale hover:grayscale-0 transition">
                    <img width="250" height="100" src="<?php echo image_dir('logo-danreal.png') ?>" alt="">
                </div>
                <div class="slide brand-slide grayscale hover:grayscale-0 transition">
                    <img width="250" height="100" src="<?php echo image_dir('logo-meditron.png') ?>" alt="">
                </div>
            <?php endwhile ?>
        </div>
    </div>

</section>