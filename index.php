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
    <?php get_template_part('template-parts/footer'); ?>


    <?php wp_footer(); ?>
</body>

</html>