<?php
/*
Template Name: Zespół
*/

get_header();
?>

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
            'template-parts/team/team-member',
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

<?php get_footer(); ?>