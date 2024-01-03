<?php get_header(); ?>
<main class="container">
    <?php get_template_part('template-parts/page-bar', null, ['name' => get_the_title()]); ?>

    <div class="post-content">
        <?php the_content(); ?>
    </div>
</main>
<?php get_footer(); ?>