<?php get_header(); ?>

<main class="container post-content">
    <?php get_template_part('template-parts/page-bar', null, ['name' => 'Blog']); ?>
    <?php get_template_part('template-parts/page-title', null, ['title' => get_the_title()]); ?>

    <?php the_content(); ?>

    <?php get_template_part('template-parts/other-articles'); ?>
</main>

<?php get_footer(); ?>