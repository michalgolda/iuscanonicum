<?php get_header(); ?>
<main>
    <section id="start" class="container swiper">
        <?php get_template_part("template-parts/slider"); ?>
    </section>
    <a class="scroll-down" href="#welcome">
        <img src="<?php echo iuscanonicum_get_image_src('scroll-down-arrow.svg'); ?>" alt="scroll down arrow" />
    </a>
    <section id="welcome" class="section">
        <?php dynamic_sidebar('iuscanonicum-front-page-welcome-section-heading'); ?>
        <div class="welcome-block">
            <div class="container">
                <?php dynamic_sidebar('iuscanonicum-front-page-welcome-section-body'); ?>
            </div>
        </div>
        <?php get_template_part('template-parts/contact-block'); ?>
    </section>
    <?php get_template_part('template-parts/services'); ?>
    <?php get_template_part('template-parts/advantages'); ?>
    <section id="weCanHelpYou" class="section">
        <div class="weCanHelpYou-block">
            <?php dynamic_sidebar('iuscanonicum-front-page-we-can-help-you-section-heading'); ?>
            <div class="weCanHelpYou-block__details container">
                <?php dynamic_sidebar('iuscanonicum-front-pagewe-can-help-you-section-body'); ?>
                <a class="button button--primary" href="/kontakt">Skontaktuj się</a>
            </div>
        </div>
    </section>
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