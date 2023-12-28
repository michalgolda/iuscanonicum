<?php get_header(); ?>
<main>
    <section id="start" class="container swiper">
        <?php get_template_part("template-parts/slider"); ?>
    </section>
    <a class="scroll-down" href="#welcome">
        <img src="<?php echo iuscanonicum_get_image_src('scroll-down-arrow.svg'); ?>" alt="scroll down arrow" />
    </a>
    <section id="welcome" class="section">
        <h2 class="section__heading">Witamy w naszej kancelarii</h2>
        <div class="welcome-block">
            <div class="container">
                <p>Duis felis nisi, vulputate quis accumsan non, finibus ac sapien. Etiam pharetra faucibus quam, ac auctor turpis commodo vitae. Integer condimentum ex eget est cursus porta. Vivamus posuere ante in lobortis tristique. Mauris ipsum dui, aliquam at dapibus quis, sagittis et dui. Sed pharetra elit arcu, nec luctus purus ultricies id. Nam imperdiet semper bibendum. Aenean bibendum ex sed ligula ultricies semper. Ut ante velit, vestibulum id elementum quis, mollis vitae nulla. Suspendisse potenti. In lorem turpis, auctor vel ultricies at, posuere id ipsum. Vestibulum vulputate ipsum arcu, sed laoreet metus efficitur in.</p>
            </div>
        </div>
        <?php get_template_part('template-parts/contact-block'); ?>
    </section>
    <?php get_template_part('template-parts/services'); ?>
    <?php get_template_part('template-parts/advantages'); ?>
    <section id="weCanHelpYou" class="section">
        <div class="weCanHelpYou-block">
            <h2 class="section__heading">Dowiedz się w jaki sposób możemy Ci pomóc</h2>
            <div class="weCanHelpYou-block__details container">
                <p>Etiam consectetur placerat nisl sed iaculis. Cras feugiat pretium feugiat. Suspendisse potenti. Donec nec metus suscipit, fringilla nibh quis, scelerisque urna. Integer ac enim ipsum. Donec et molestie magna. Phasellus dictum placerat diam, quis blandit dolor vehicula eu. Nullam vel urna a sem sodales tincidunt sed ut dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc in enim eleifend, feugiat urna eu, molestie nisl. Quisque ac lobortis ipsum. Mauris interdum nisi dui, a lobortis augue malesuada vitae.</p>
                <a class="button button--primary" href="#">Skontaktuj się</a>
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