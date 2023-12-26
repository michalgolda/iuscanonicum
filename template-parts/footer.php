<a id="scroll-top-btn" href="#top" class="button button--primary button--scroll-top hidden">
    <img src="<?php echo iuscanonicum_get_image_src('up-arrow-icon.svg'); ?>" alt="up arrow icon" />
</a>
<footer class="footer">
    <div class="footer__primary">
        <div class="footer__primary-content container">
            <div class="footer__box">
                <a class="footer__home-link" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo iuscanonicum_get_image_src('footer-logo.svg'); ?>" width="271" height="48" alt="logo" />
                </a>
                <p>Kancelaria specjalizuje się w świadczeniu profesjonalnych usług prawnych zgodnie z normami prawa kanonicznego. Nasza misja to zapewnienie kompleksowego wsparcia prawnego, z poszanowaniem wartości etycznych i tradycji Kościoła. </p>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'social-links',
                        'walker' => new SocialWalker(),
                        'container' => false,
                        'menu_class' => 'footer__social'
                    )
                );
                ?>
            </div>
            <div class="footer__box">
                <h5>Kontakt</h5>
                <ul class="footer__list">
                    <?php
                    wp_reset_query();

                    $query_args = [
                        'post_type' => 'contact',
                        'post_status' => 'private',
                        'meta_query' => [
                            'relation' => 'OR',
                            [
                                'key' => 'name',
                                'value' => 'Lokalizacja'
                            ],
                            [
                                'key' => 'name',
                                'value' => 'Numer telefonu'
                            ],
                            [
                                'key' => 'name',
                                'value' => 'E-mail'
                            ]
                        ]
                    ];
                    $query = new WP_Query($query_args);

                    while ($query->have_posts()) :
                        $query->the_post();

                        $field_value = get_field('details');
                        $field_value = str_replace('\n', '<br/>', $field_value);

                        echo '<li><p>' . $field_value . '</p></li>';

                    endwhile;


                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <div class="footer__box">
                <h5>Nasze specjalizacje</h5>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-specializations',
                        'menu_class' => 'footer__list',
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                        'fallback_cb'     => false,
                        'container' => false
                    )
                )
                ?>
            </div>
            <div class="footer__box">
                <h5>Menu</h5>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'footer__list',
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                        'fallback_cb'     => false,
                        'container' => false
                    )
                )
                ?>
            </div>
        </div>
    </div>
    <div class="footer__secondary">
        <div class="footer__secondary-content container">
            <p class="footer__copyright">2023 © Iuascanonicum.pl</p>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-links',
                    'menu_class' => 'footer__links',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                    'fallback_cb'     => false,
                    'container' => false
                )
            )
            ?>
        </div>
    </div>
</footer>