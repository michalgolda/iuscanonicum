<?php
/*
Template Name: Kontakt
*/
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://api.fontshare.com/v2/css?f[]=amulya@400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body class="contact-page">
    <?php get_template_part('template-parts/header'); ?>
    <main class="container">
        <?php get_template_part('template-parts/page-bar', null, ['name' => 'Kontakt']); ?>
        <?php get_template_part('template-parts/page-title', null, ['title' => 'Skontaktuj się z nami']); ?>
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
            <div class="content">
                <img src="<?php echo iuscanonicum_get_image_src('google-map.jpg'); ?>" alt="google map" />
                <div class="form-wrapper">
                    <h3>Formularz kontaktowy</h3>
                    <p>Duis fringilla interdum nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis feugiat odio sit amet placerat. Fusce gravida id eros sit amet laoreet. Aliquam semper augue lorem, eget accumsan ante pretium sit amet. Vestibulum vulputate dignissim porta. Proin lacus turpis, efficitur et nisi ut, commodo laoreet eros. Integer suscipit metus quis nunc semper eleifend. Fusce blandit risus ac turpis interdum consectetur. Quisque vel tristique mi.</p>
                    <form class="form">
                        <div class="form__group">
                            <input type="text" name="firstName" placeholder="Imię" required />
                            <input type="text" name="lastName" placeholder="Nazwisko" required />
                        </div>
                        <input type="email" name="email" placeholder="E-mail" required />
                        <input type="text" name="topic" placeholder="Temat wiadomości" required />
                        <textarea placeholder="Treść wiadomości" name="message" required></textarea>
                        <div class="form__group form__group--agreement">
                            <div class="form__agreement">
                                <input type="checkbox" name="agreement" required />
                                <p>Wyrażam zgodę na przetwarzanie danych na potrzeby konwersacji*</p>
                            </div>
                            <button class="button button--primary-outlined button--block" type="submit">Wyślij</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php get_template_part('template-parts/footer'); ?>

    <?php wp_footer(); ?>
</body>

</html>