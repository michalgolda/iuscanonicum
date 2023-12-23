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


        <?php
        wp_reset_query();

        $query_args = [
            'post_type' => 'team-member',
            'post_status' => 'private'
        ];

        $query = new WP_Query($query_args);
        while ($query->have_posts()) :
            $query->the_post();

            get_template_part(
                'template-parts/team-member',
                null,
                [
                    'fullname' => iuscanonicum_remove_prefix_from_post_title(get_the_title()),
                    'description' => get_the_content(),
                    'career-title' => get_field('career-title'),
                    'email' => get_field('email'),
                    'phone-number' => get_field('phone-number'),
                    'skill-prove-document-url' => get_field('skill-prove-document-url'),
                    'image-url' => get_field('image')
                ]
            );
        endwhile;

        wp_reset_postdata();
        ?>
    </main>
    <?php get_template_part('template-parts/footer'); ?>

    <?php wp_footer(); ?>
</body>

</html>