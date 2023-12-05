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
        <section id="services" class="section">
            <h2 class="section__heading">Usługi</h2>
            <div class="services-block container">
                <div class="services-block__box">
                    <h3>Prawo małżeńskie</h3>
                    <p>Donec ut ipsum augue. Fusce pretium urna nibh, et luctus lacus bibendum id. Nullam in dapibus ex, sit amet commodo felis. Nam eu ornare nulla. Praesent consequat.</p>
                    <a class="button button--primary-outlined" href="#">Szczegóły</a>
                </div>
                <div class="services-block__box">
                    <h3>Pomoc administracyjna</h3>
                    <p>Donec ut ipsum augue. Fusce pretium urna nibh, et luctus lacus bibendum id. Nullam in dapibus ex, sit amet commodo felis. Nam eu ornare nulla. Praesent consequat.</p>
                    <a class="button button--primary-outlined" href="#">Szczegóły</a>
                </div>
                <div class="services-block__box">
                    <h3>Kanonizacje</h3>
                    <p>Donec ut ipsum augue. Fusce pretium urna nibh, et luctus lacus bibendum id. Nullam in dapibus ex, sit amet commodo felis. Nam eu ornare nulla. Praesent consequat.</p>
                    <a class="button button--primary-outlined" href="#">Szczegóły</a>
                </div>
                <div class="services-block__box">
                    <h3>Przygotowywanie dokumentacji</h3>
                    <p>Donec ut ipsum augue. Fusce pretium urna nibh, et luctus lacus bibendum id. Nullam in dapibus ex, sit amet commodo felis. Nam eu ornare nulla. Praesent consequat.</p>
                    <a class="button button--primary-outlined" href="#">Szczegóły</a>
                </div>
                <div class="services-block__box">
                    <h3>Zbieranie materiału dowodowego</h3>
                    <p>Donec ut ipsum augue. Fusce pretium urna nibh, et luctus lacus bibendum id. Nullam in dapibus ex, sit amet commodo felis. Nam eu ornare nulla. Praesent consequat.</p>
                    <a class="button button--primary-outlined" href="#">Szczegóły</a>
                </div>
                <div class="services-block__box">
                    <h3>Reprezentacja przed sądem kościelnym</h3>
                    <p>Donec ut ipsum augue. Fusce pretium urna nibh, et luctus lacus bibendum id. Nullam in dapibus ex, sit amet commodo felis. Nam eu ornare nulla. Praesent consequat.</p>
                    <a class="button button--primary-outlined" href="#">Szczegóły</a>
                </div>
            </div>
        </section>
        <section id="advantages" class="section">
            <h2 class="section__heading">Zalety kancelarii</h2>
            <div class="advantages-block container">
                <div class="advantages-block__box">
                    <div class="icon">
                        <img class="icon__img" src="<?php echo iuscanonicum_get_image_src("dolar-icon.svg") ?>" alt="dolar icon" />
                    </div>
                    <div class="advantages-block__details">
                        <h3>Przejrzyste rozliczenia</h3>
                        <p>Phasellus mattis risus eu orci suscipit gravida. Donec cursus laoreet augue. Vivamus lobortis porttitor enim eu pellentesque. Integer id sem ut mi ultricies semper ac mollis ligula. Phasellus mattis risus eu orci suscipit gravida. Donec cursus laoreet augue. Vivamus lobortis porttitor enim eu pellentesque. Integer id sem ut mi ultricies semper ac mollis ligula. </p>
                    </div>
                </div>
                <div class="advantages-block__box">
                    <div class="icon">
                        <img class="icon__img" src="<?php echo iuscanonicum_get_image_src("success-icon.svg") ?>" alt="success icon" />
                    </div>
                    <div class="advantages-block__details">
                        <h3>Proste rozwiązania</h3>
                        <p>Phasellus mattis risus eu orci suscipit gravida. Donec cursus laoreet augue. Vivamus lobortis porttitor enim eu pellentesque. Integer id sem ut mi ultricies semper ac mollis ligula. Phasellus mattis risus eu orci suscipit gravida. Donec cursus laoreet augue. Vivamus lobortis porttitor enim eu pellentesque. Integer id sem ut mi ultricies semper ac mollis ligula. </p>
                    </div>
                </div>
                <div class="advantages-block__box">
                    <div class="icon">
                        <img class="icon__img" src="<?php echo iuscanonicum_get_image_src("target-icon.svg") ?>" alt="target icon" />
                    </div>
                    <div class="advantages-block__details">
                        <h3>Zaangażowanie</h3>
                        <p>Phasellus mattis risus eu orci suscipit gravida. Donec cursus laoreet augue. Vivamus lobortis porttitor enim eu pellentesque. Integer id sem ut mi ultricies semper ac mollis ligula. Phasellus mattis risus eu orci suscipit gravida. Donec cursus laoreet augue. Vivamus lobortis porttitor enim eu pellentesque. Integer id sem ut mi ultricies semper ac mollis ligula. </p>
                    </div>
                </div>
                <div class="advantages-block__box">
                    <div class="icon">
                        <img class="icon__img" src="<?php echo iuscanonicum_get_image_src("clock-icon.svg") ?>" alt="clock icon" />
                    </div>
                    <div class="advantages-block__details">
                        <h3>Terminowość</h3>
                        <p>Phasellus mattis risus eu orci suscipit gravida. Donec cursus laoreet augue. Vivamus lobortis porttitor enim eu pellentesque. Integer id sem ut mi ultricies semper ac mollis ligula. Phasellus mattis risus eu orci suscipit gravida. Donec cursus laoreet augue. Vivamus lobortis porttitor enim eu pellentesque. Integer id sem ut mi ultricies semper ac mollis ligula. </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="weCanHelpYou" class="section">
            <div class="weCanHelpYou-block container">
                <h2 class="section__heading">Dowiedz się w jaki sposób możemy Ci pomóc</h2>
                <div class="weCanHelpYou-block__details">
                    <p>Etiam consectetur placerat nisl sed iaculis. Cras feugiat pretium feugiat. Suspendisse potenti. Donec nec metus suscipit, fringilla nibh quis, scelerisque urna. Integer ac enim ipsum. Donec et molestie magna. Phasellus dictum placerat diam, quis blandit dolor vehicula eu. Nullam vel urna a sem sodales tincidunt sed ut dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc in enim eleifend, feugiat urna eu, molestie nisl. Quisque ac lobortis ipsum. Mauris interdum nisi dui, a lobortis augue malesuada vitae.</p>
                    <a class="button button--primary" href="#">Skontaktuj się</a>
                </div>
            </div>
        </section>
        <section id="latest-articles" class="section">
            <h2 class="section__heading">Najnowsze artykuły, które mogą Cię zainteresować</h2>
            <div class="latest-articles-block container">
                <div class="article">
                    <img class="article__cover-img" src="<?php echo iuscanonicum_get_image_src("article-cover.jpg") ?>" alt="article cover" />
                    <div class="article__header">
                        <p class="article__overline-heading">prawo rodzinne</p>
                        <h3 class="article__heading">Analiza Współczesnego Prawa Rodzinnego</h3>
                        <span class="article__date">20.10.2024</span>
                    </div>
                    <p class="article__summary">Praesent egestas lacus vitae est aliquet, et rutrum turpis volutpat. Donec tincidunt vehicula augue sed sagittis. Nullam tempor facilisis ultrices. Aliquam nibh erat, commodo ac ante non, pulvinar dictum felis.</p>
                    <a class="article__ref" href="#">Przeczytaj więcej</a>
                </div>
                <div class="article">
                    <img class="article__cover-img" src="<?php echo iuscanonicum_get_image_src("article-cover.jpg") ?>" alt="article cover" />
                    <div class="article__header">
                        <p class="article__overline-heading">prawo rodzinne</p>
                        <h3 class="article__heading">Analiza Współczesnego Prawa Rodzinnego</h3>
                        <span class="article__date">20.10.2024</span>
                    </div>
                    <p class="article__summary">Praesent egestas lacus vitae est aliquet, et rutrum turpis volutpat. Donec tincidunt vehicula augue sed sagittis. Nullam tempor facilisis ultrices. Aliquam nibh erat, commodo ac ante non, pulvinar dictum felis.</p>
                    <a class="article__ref" href="#">Przeczytaj więcej</a>
                </div>
                <div class="article">
                    <img class="article__cover-img" src="<?php echo iuscanonicum_get_image_src("article-cover.jpg") ?>" alt="article cover" />
                    <div class="article__header">
                        <p class="article__overline-heading">prawo rodzinne</p>
                        <h3 class="article__heading">Analiza Współczesnego Prawa Rodzinnego</h3>
                        <span class="article__date">20.10.2024</span>
                    </div>
                    <p class="article__summary">Praesent egestas lacus vitae est aliquet, et rutrum turpis volutpat. Donec tincidunt vehicula augue sed sagittis. Nullam tempor facilisis ultrices. Aliquam nibh erat, commodo ac ante non, pulvinar dictum felis.</p>
                    <a class="article__ref" href="#">Przeczytaj więcej</a>
                </div>
            </div>
        </section>
    </main>
    <?php get_template_part('template-parts/footer'); ?>


    <?php wp_footer(); ?>
</body>

</html>