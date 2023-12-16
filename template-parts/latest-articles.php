<section id="latest-articles" class="section">
    <h2 class="section__heading">Najnowsze artykuły, które mogą Cię zainteresować</h2>
    <div class="latest-articles-block container">
        <?php
        wp_reset_query();
        $recent_posts_query_args = [
            'posts_per_page' => 3,
            'order_by' => 'date',
            'order' => 'DESC',
        ];
        $recent_posts_query = new WP_Query($recent_posts_query_args);

        while ($recent_posts_query->have_posts()) {
            $recent_posts_query->the_post();

            get_template_part(
                'template-parts/article',
                null,
                ['category-name' => get_the_category()[0]->name, 'title' => get_the_title(), 'date' => get_the_date(), 'permalink' => get_the_permalink()]
            );
        }

        wp_reset_postdata();
        ?>
    </div>
</section>