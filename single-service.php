<?php get_header(); ?>

<main class="container">
    <?php get_template_part('template-parts/page-bar', null, ['name' => 'Usługi']); ?>
    <?php get_template_part('template-parts/page-title', null, ['title' => get_the_title()]); ?>

    <div class="post-content">
        <?php the_content(); ?>
    </div>

    <?php get_template_part('template-parts/latest-articles'); ?>
</main>

<?php get_footer(); ?>