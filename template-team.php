<?php
/*
Template Name: Zespół
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

<body class="team-page">
    <?php get_template_part('template-parts/header'); ?>
    <main class="container">
        <?php get_template_part('template-parts/page-bar', null, ['name' => 'Zespół']); ?>
        <?php get_template_part('template-parts/page-title', null, ['title' => 'Nasz zespół']); ?>

        <div class="team-member">
            <img class="team-member__img" src="<?php echo iuscanonicum_get_image_src('team-member.jpg'); ?>" alt="team member" />
            <div class="team-member__details">
                <div class="team-member__heading">
                    <h3>Joanna Zbierzchowska-Ochałek</h3>
                    <p class="team-member__profession">Adwokat</p>
                </div>
                <div class="team-member__contact">
                    <div class="team-member__contact-box">
                        <div class="icon">
                            <img class="icon__img" src="<?php echo iuscanonicum_get_image_src('email-icon.svg') ?>" alt="email icon" />
                        </div>
                        <p>joanna@iuscanonicum.pl</p>
                    </div>
                    <div class="team-member__contact-box">
                        <div class="icon">
                            <img class="icon__img" src="<?php echo iuscanonicum_get_image_src('phone-icon.svg') ?>" alt="email icon" />
                        </div>
                        <p>+48 333 333 333</p>
                    </div>
                    <div class="team-member__contact-box">
                        <div class="icon">
                            <img class="icon__img" src="<?php echo iuscanonicum_get_image_src('document-icon.svg') ?>" alt="email icon" />
                        </div>
                        <a href="#">Potwierdzenie uprawnień</a>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac lorem tincidunt, venenatis sapien sed, posuere turpis. Nam ullamcorper massa nunc, vitae interdum tellus auctor nec. Vestibulum ac ullamcorper arcu, et commodo odio. Aliquam eget sodales eros. Nulla id tellus eleifend, varius lectus et, eleifend magna. Donec molestie feugiat enim, at luctus velit vulputate id. Quisque ut lobortis dui, sed maximus nisl. Aenean sit amet arcu vitae magna imperdiet ullamcorper sit amet nec tellus.</p>
                <p>
                    Sed faucibus lectus nec mollis ornare. Donec ac neque at ante dapibus auctor id quis metus. Nulla purus ligula, rutrum eget est nec, semper auctor augue. Quisque rutrum metus et orci interdum egestas. Quisque suscipit elit at enim vestibulum, at tempus enim porttitor. Etiam vitae maximus felis, sed condimentum mauris. Integer a lectus vitae lorem scelerisque tempus. Quisque enim erat, sagittis eget velit a, euismod lobortis metus. Praesent quis faucibus neque. Curabitur et pretium erat. Maecenas semper vestibulum nisl, eu iaculis quam dapibus at. Nulla facilisi. Curabitur molestie purus vitae libero luctus fringilla. Suspendisse varius arcu vitae diam efficitur, id laoreet metus placerat. Duis magna velit, molestie vitae augue ut, bibendum porttitor lectus.
                </p>
                <p>
                    Sed faucibus lectus nec mollis ornare. Donec ac neque at ante dapibus auctor id quis metus. Nulla purus ligula, rutrum eget est nec, semper auctor augue. Quisque rutrum metus et orci interdum egestas. Quisque suscipit elit at enim vestibulum, at tempus enim porttitor. Etiam vitae maximus felis, sed condimentum mauris. Integer a lectus vitae lorem scelerisque tempus. Quisque enim erat, sagittis eget velit a, euismod lobortis metus. Praesent quis faucibus neque. Curabitur et pretium erat. Maecenas semper vestibulum nisl, eu iaculis quam dapibus at. Nulla facilisi. Curabitur molestie purus vitae libero luctus fringilla. Suspendisse varius arcu vitae diam efficitur, id laoreet metus placerat. Duis magna velit, molestie vitae augue ut, bibendum porttitor lectus.
                </p>
            </div>
        </div>
        <div class="team-member">
            <img class="team-member__img" src="<?php echo iuscanonicum_get_image_src('team-member.jpg'); ?>" alt="team member" />
            <div class="team-member__details">
                <div class="team-member__heading">
                    <h3>Joanna Zbierzchowska-Ochałek</h3>
                    <p class="team-member__profession">Adwokat</p>
                </div>
                <div class="team-member__contact">
                    <div class="team-member__contact-box">
                        <div class="icon">
                            <img class="icon__img" src="<?php echo iuscanonicum_get_image_src('email-icon.svg') ?>" alt="email icon" />
                        </div>
                        <p>joanna@iuscanonicum.pl</p>
                    </div>
                    <div class="team-member__contact-box">
                        <div class="icon">
                            <img class="icon__img" src="<?php echo iuscanonicum_get_image_src('phone-icon.svg') ?>" alt="email icon" />
                        </div>
                        <p>+48 333 333 333</p>
                    </div>
                    <div class="team-member__contact-box">
                        <div class="icon">
                            <img class="icon__img" src="<?php echo iuscanonicum_get_image_src('document-icon.svg') ?>" alt="email icon" />
                        </div>
                        <a href="#">Potwierdzenie uprawnień</a>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac lorem tincidunt, venenatis sapien sed, posuere turpis. Nam ullamcorper massa nunc, vitae interdum tellus auctor nec. Vestibulum ac ullamcorper arcu, et commodo odio. Aliquam eget sodales eros. Nulla id tellus eleifend, varius lectus et, eleifend magna. Donec molestie feugiat enim, at luctus velit vulputate id. Quisque ut lobortis dui, sed maximus nisl. Aenean sit amet arcu vitae magna imperdiet ullamcorper sit amet nec tellus.</p>
                <p>
                    Sed faucibus lectus nec mollis ornare. Donec ac neque at ante dapibus auctor id quis metus. Nulla purus ligula, rutrum eget est nec, semper auctor augue. Quisque rutrum metus et orci interdum egestas. Quisque suscipit elit at enim vestibulum, at tempus enim porttitor. Etiam vitae maximus felis, sed condimentum mauris. Integer a lectus vitae lorem scelerisque tempus. Quisque enim erat, sagittis eget velit a, euismod lobortis metus. Praesent quis faucibus neque. Curabitur et pretium erat. Maecenas semper vestibulum nisl, eu iaculis quam dapibus at. Nulla facilisi. Curabitur molestie purus vitae libero luctus fringilla. Suspendisse varius arcu vitae diam efficitur, id laoreet metus placerat. Duis magna velit, molestie vitae augue ut, bibendum porttitor lectus.
                </p>
                <p>
                    Sed faucibus lectus nec mollis ornare. Donec ac neque at ante dapibus auctor id quis metus. Nulla purus ligula, rutrum eget est nec, semper auctor augue. Quisque rutrum metus et orci interdum egestas. Quisque suscipit elit at enim vestibulum, at tempus enim porttitor. Etiam vitae maximus felis, sed condimentum mauris. Integer a lectus vitae lorem scelerisque tempus. Quisque enim erat, sagittis eget velit a, euismod lobortis metus. Praesent quis faucibus neque. Curabitur et pretium erat. Maecenas semper vestibulum nisl, eu iaculis quam dapibus at. Nulla facilisi. Curabitur molestie purus vitae libero luctus fringilla. Suspendisse varius arcu vitae diam efficitur, id laoreet metus placerat. Duis magna velit, molestie vitae augue ut, bibendum porttitor lectus.
                </p>
            </div>
        </div>
    </main>
    <?php get_template_part('template-parts/footer'); ?>

    <?php wp_footer(); ?>
</body>

</html>