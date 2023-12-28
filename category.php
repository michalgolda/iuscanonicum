<?php
get_header();

$page_title = "Wpisy w kategorii ";

$category = get_the_category()[0];

$page_title = "Wpisy w kategorii ";
$page_title .= strtolower($category->name);
?>
<main class="container">
    <?php get_template_part('template-parts/page-bar', null, ['name' => 'Blog']); ?>
    <?php get_template_part('template-parts/page-title', null, ['title' => $page_title]); ?>

    <div class="article-list">
        <?php
        while (have_posts()) :
            the_post();

            get_template_part(
                'template-parts/article',
                null,
                [
                    'category-name' => $category->name,
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