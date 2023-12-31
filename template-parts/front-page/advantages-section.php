<section id="advantages" class="section">
    <h2 class="section__heading">Zalety kancelarii</h2>
    <div class="advantages-block container">
        <?php
        wp_reset_query();

        $query_args = [
            'post_type' => 'advantage',
            'post_status' => 'private'
        ];
        $query = new WP_Query($query_args);

        while ($query->have_posts()) :
            $query->the_post();

            get_template_part(
                'template-parts/front-page/advantage-box',
                null,
                [
                    'name' => get_field('name'),
                    'description' => get_field('description'),
                    'icon-src' => iuscanonicum_get_image_src(get_field('icon-file-name'))
                ]
            );
        endwhile;

        wp_reset_postdata();
        ?>
    </div>
</section>