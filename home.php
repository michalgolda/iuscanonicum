<?php
get_header();
?>
<main class="container">
    <?php get_template_part('template-parts/page-bar', null, ['name' => 'Blog']); ?>
    <?php get_template_part('template-parts/page-title', null, ['title' => 'Wpisy']); ?>

    <div class="article-list">
        <?php
        while (have_posts()) :
            the_post();

            get_template_part(
                'template-parts/article',
                null,
                [
                    'category-name' => get_the_category()[0]->name,
                    'title' => get_the_title(),
                    'date' => get_the_date(),
                    'permalink' => get_the_permalink()

                ]
            );
        endwhile;
        ?>
    </div>
</main>
<?php get_footer() ?>