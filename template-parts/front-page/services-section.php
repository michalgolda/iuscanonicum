<section id="services" class="section">
    <h2 class="section__heading">Usługi</h2>
    <div class="services-block container">
        <?php
        wp_reset_query();

        $query_args = [
            'post_type' => 'service',
        ];
        $query = new WP_Query($query_args);

        while ($query->have_posts()) :
            $query->the_post();

            get_template_part(
                'template-parts/front-page/service-box',
                null,
                [
                    'name' => get_the_title(),
                    'description' => get_field('description'),
                    'permalink' => get_the_permalink()
                ]
            );
        endwhile;

        wp_reset_postdata();
        ?>
    </div>
</section>