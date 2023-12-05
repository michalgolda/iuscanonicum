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
        <section id="welcome" class="section">
            <h2 class="section__heading">Witamy w naszej kancelarii</h2>
            <div class="welcome__container">
                <div class="container">
                    <p>Duis felis nisi, vulputate quis accumsan non, finibus ac sapien. Etiam pharetra faucibus quam, ac auctor turpis commodo vitae. Integer condimentum ex eget est cursus porta. Vivamus posuere ante in lobortis tristique. Mauris ipsum dui, aliquam at dapibus quis, sagittis et dui. Sed pharetra elit arcu, nec luctus purus ultricies id. Nam imperdiet semper bibendum. Aenean bibendum ex sed ligula ultricies semper. Ut ante velit, vestibulum id elementum quis, mollis vitae nulla. Suspendisse potenti. In lorem turpis, auctor vel ultricies at, posuere id ipsum. Vestibulum vulputate ipsum arcu, sed laoreet metus efficitur in.</p>
                </div>
            </div>
            <div class="contact-block">
                <div class="contact-block__content container">
                    <div class="contact-block__box">
                        <div class="icon">
                            <img class="icon__img" src="<?php echo iuscanonicum_get_image_src("email-icon.svg") ?>" alt="e-mail icon" />
                        </div>
                        <div class="contact-block__details">
                            <h4>E-mail</h4>
                            <p>kontakt@iuasnanonicum.pl</p>
                        </div>
                    </div>
                    <div class="contact-block__box">
                        <div class="icon">
                            <img class="icon__img" src="<?php echo iuscanonicum_get_image_src("location-icon.svg") ?>" alt="location icon" />
                        </div>
                        <div class="contact-block__details">
                            <h4>Lokalizacja</h4>
                            <p>al. Beliny Prażmowskiego 9/331-514 Kraków</p>
                        </div>
                    </div>
                    <div class="contact-block__box">
                        <div class="icon">
                            <img class="icon__img" src="<?php echo iuscanonicum_get_image_src("phone-icon.svg") ?>" alt="phone icon" />
                        </div>
                        <div class="contact-block__details">
                            <h4>Numer kontaktowy</h4>
                            <p>+48 333 333 333</p>
                        </div>
                    </div>
                    <div class="contact-block__box">
                        <div class="icon">
                            <img class="icon__img" src="<?php echo iuscanonicum_get_image_src("clock-icon.svg") ?>" alt="clock icon" />
                        </div>
                        <div class="contact-block__details">
                            <h4>Godziny otwarcia</h4>
                            <p>Pon. - Pt. <br /> 8:00 - 16:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php get_template_part('template-parts/footer'); ?>


    <?php wp_footer(); ?>
</body>

</html>