<?php
wp_enqueue_style('iuscanonicum-aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
wp_enqueue_style('iuscanonicum-swiper-style', get_template_directory_uri() . '/swiper.bundle.css');

get_header();

wp_enqueue_script(
    'iuscanonicum-swiper-bundle',
    get_template_directory_uri() . '/assets/scripts/swiper.bundle.js',
    [],
    false,
    [
        "strategy" => "defer"
    ]
);
?>
<main>
    <?php get_template_part('template-parts/front-page/start-section'); ?>
    <a class="scroll-down" href="#welcome">
        <img src="<?php echo iuscanonicum_get_image_src('scroll-down-arrow.svg'); ?>" alt="scroll down arrow" />
    </a>
    <?php get_template_part('template-parts/front-page/welcome-section'); ?>
    <?php get_template_part('template-parts/front-page/services-section'); ?>
    <?php get_template_part('template-parts/front-page/advantages-section'); ?>
    <?php get_template_part('template-parts/front-page/banner-section'); ?>
    <?php get_template_part('template-parts/latest-articles'); ?>
</main>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init()
</script>
<?php get_footer(); ?>