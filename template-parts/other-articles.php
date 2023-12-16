<section id="other-articles" class="section">
    <h2 class="section__heading">Inne artykuły, które mogą Cię zainteresować</h2>
    <div class="articles-block container">
        <?php
        $current_post_id = get_the_id();

        wp_reset_query();
        $query_args = [
            'posts_per_page' => 3,
            'order_by' => 'date',
            'order' => 'DESC',
            'post__not_in' => [$current_post_id]
        ];
        $query = new WP_Query($query_args);

        while ($query->have_posts()) {
            $query->the_post();

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