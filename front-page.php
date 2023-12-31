<?php get_header(); ?>
<main>
    <?php get_template_part('template-parts/front-page/start-section'); ?>
    <a class="scroll-down" href="#welcome">
        <img src="<?php echo iuscanonicum_get_image_src('scroll-down-arrow.svg'); ?>" alt="scroll down arrow" />
    </a>
    <?php get_template_part('template-parts/front-page/welcome-section'); ?>
    <?php get_template_part('template-parts/front-page/services-section'); ?>
    <?php get_template_part('template-parts/front-page/advantages-section'); ?>
    <?php get_template_part('template-parts/front-page/we-can-help-you-section'); ?>
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
<?php get_footer(); ?>