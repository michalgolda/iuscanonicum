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

<body>
    <?php get_template_part('template-parts/header'); ?>
    <main class="container">
        <div class="page-bar">
            <div class="page-bar__box page-bar__box--title">
                <h2><?php echo get_the_title(); ?></h2>
            </div>
            <div class="page-bar__box page-bar__box--breadcrumbs">
                <div class="breadcrumbs">
                    <a href="#"><span>Strona główna</span></a>
                    <span class="breadcrumbs__separator"></span>
                    <span><?php echo get_the_title(); ?></span>
                </div>
            </div>
        </div>
    </main>
    <?php get_template_part('template-parts/footer'); ?>

    <?php wp_footer(); ?>
</body>

</html>