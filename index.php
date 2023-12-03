<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=amulya@400,500&display=swap" rel="stylesheet">
</head>

<body>
    <?php get_template_part('template-parts/header'); ?>
    <main>
        <section id="start" class="container">
            <div class="hero">
                <div class="hero__container">
                    <div class="hero__heading">
                        <p class="hero__overline-heading">wiedza</p>
                        <h1>Twoje prawo, nasza wiedza – pewność na każdym etapie</h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mi felis, vehicula non pellentesque vitae, condimentum vitae nulla. Mauris at orci ut quam fermentum commodo et sed enim. Nam in consequat augue. Maecenas nisl erat, maximus in auctor eget, rhoncus non erat.</p>
                    <a class="button button--primary" href="#">Skontaktuj się</a>
                </div>
                <img class="hero__img" src="<?php echo iuscanonicum_get_image_src('hero-image.jpg'); ?>" alt="hero image" />
            </div>
            <div class="slider-pagination">
                <span class="slider-pagination__bullet slider-pagination__bullet--active"></span>
                <span class="slider-pagination__bullet"></span>
                <span class="slider-pagination__bullet"></span>
            </div>
        </section>
        <a class="scroll-down" href="#">
            <img src="<?php echo iuscanonicum_get_image_src('scroll-down-arrow.svg'); ?>" alt="scroll down arrow" />
        </a>
    </main>
    <?php get_template_part('template-parts/footer'); ?>


    <?php wp_footer(); ?>
</body>

</html>