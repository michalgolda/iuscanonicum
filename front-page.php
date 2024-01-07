<?php
wp_enqueue_style('iuscanonicum-aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css');

get_header();
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
<script type="text/javascript">
    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,
        autoplay: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
    });
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init()
</script>
<?php get_footer(); ?>