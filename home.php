<?php
get_header();
?>
<main class="container">
    <?php get_template_part('template-parts/page-bar', null, ['name' => 'Blog']); ?>
    <?php get_template_part('template-parts/page-title', null, ['title' => 'Wpisy']); ?>

    <div class="article-list">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <article class="article">
                    <img class="article__cover-img" src="<?php echo iuscanonicum_get_image_src("article-cover.jpg") ?>" alt="article cover" />
                    <div class="article__header">
                        <p class="article__overline-heading"><?php echo get_the_category()[0]->name; ?></p>
                        <h3 class="article__heading"><?php the_title(); ?></h3>
                    </div>
                    <span class="article__date"><?php echo get_the_date(); ?></span>
                    <a class="article__ref" href="<?php the_permalink(); ?>">Przeczytaj więcej</a>
                </article>
        <?php
            endwhile;
        else :
            _e('Brak postów.', 'iuscnanonicum');
        endif;
        ?>
    </div>
</main>
<?php get_footer() ?>