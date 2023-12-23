<div class="contact-block">
    <div class="contact-block__content container">
        <?php
        wp_reset_query();

        $query_args = [
            'post_type' => 'contact',
            'post_status' => 'private'
        ];
        $query = new WP_Query($query_args);

        while ($query->have_posts()) :
            $query->the_post();

            get_template_part(
                'template-parts/contact-block-box',
                null,
                [
                    'name' => get_field('name'),
                    'details' => str_replace('\n', '<br/>', get_field('details')),
                    'icon-src' => iuscanonicum_get_image_src(get_field('icon-file-name'))
                ]
            );
        endwhile;

        wp_reset_postdata();
        ?>
    </div>
</div>