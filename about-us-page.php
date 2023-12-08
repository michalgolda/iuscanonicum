<?php
/*
Template Name: O nas
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

<body class="about-us-page">
    <?php get_template_part('template-parts/header'); ?>
    <main class="container">
        <?php get_template_part('template-parts/page-bar'); ?>
        <?php get_template_part('template-parts/page-title', null, ['title' => 'O naszej kancelarii słów kilka']); ?>

        <img class="about-us-page__img" src="<?php echo iuscanonicum_get_image_src('about-us.jpg') ?>" alt="about us image" />

        <p class="p-m-b-32">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac lorem tincidunt, venenatis sapien sed, posuere turpis. Nam ullamcorper massa nunc, vitae interdum tellus auctor nec. Vestibulum ac ullamcorper arcu, et commodo odio. Aliquam eget sodales eros. Nulla id tellus eleifend, varius lectus et, eleifend magna. Donec molestie feugiat enim, at luctus velit vulputate id. Quisque ut lobortis dui, sed maximus nisl. Aenean sit amet arcu vitae magna imperdiet ullamcorper sit amet nec tellus.
        </p>
        <p class="p-m-b-32">
            Sed faucibus lectus nec mollis ornare. Donec ac neque at ante dapibus auctor id quis metus. Nulla purus ligula, rutrum eget est nec, semper auctor augue. Quisque rutrum metus et orci interdum egestas. Quisque suscipit elit at enim vestibulum, at tempus enim porttitor. Etiam vitae maximus felis, sed condimentum mauris. Integer a lectus vitae lorem scelerisque tempus. Quisque enim erat, sagittis eget velit a, euismod lobortis metus. Praesent quis faucibus neque. Curabitur et pretium erat. Maecenas semper vestibulum nisl, eu iaculis quam dapibus at. Nulla facilisi. Curabitur molestie purus vitae libero luctus fringilla. Suspendisse varius arcu vitae diam efficitur, id laoreet metus placerat. Duis magna velit, molestie vitae augue ut, bibendum porttitor lectus.
        </p>
        <p class="p-m-b-32">
            Aenean eleifend eget purus eu ultricies. Aliquam non quam at sapien dignissim aliquet. Pellentesque non tristique lectus. Quisque lorem dui, vestibulum eu condimentum vitae, ultrices at ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus nec urna non eros posuere lobortis eget quis nibh. Cras molestie magna a massa dapibus, et fermentum nisl condimentum. Integer ultrices, velit eget ullamcorper commodo, velit est dignissim nisi, laoreet malesuada nibh lorem ac enim. Fusce at mauris orci. Sed accumsan posuere felis. Sed id erat vitae nisi blandit rhoncus. Donec euismod est leo, non iaculis elit mattis et. Fusce ut molestie est. Vivamus semper sagittis mauris id commodo.
        </p>
    </main>
    <?php get_template_part('template-parts/footer'); ?>

    <?php wp_footer(); ?>
</body>

</html>