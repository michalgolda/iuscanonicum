<div class="swiper-wrapper">
    <?php
    wp_reset_query();

    $query_args = [
        'post_type' => 'slide'
    ];
    $query = new WP_Query($query_args);
    while ($query->have_posts()) :
        $query->the_post();

        get_template_part(
            'template-parts/slide',
            null,
            [
                'overline-text' => get_field('overline-text'),
                'title' => get_the_title(),
                'body' => get_the_content(),
                'image-url' => get_field('image')
            ]
        );
    endwhile;

    wp_reset_postdata();
    ?>
</div>
<div class="swiper-pagination"></div>