<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0" />
    <meta name="format-detection" content="telephone=no">

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/header') ?>