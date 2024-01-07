<a id="scroll-top-btn" href="#top" class="button button--primary button--scroll-top button--scroll-top--hidden">
    <img src="<?php echo iuscanonicum_get_image_src('up-arrow-icon.svg'); ?>" alt="up arrow icon" />
</a>
<footer class="footer">
    <div class="footer__primary">
        <div class="footer__primary-content container">
            <div class="footer__box">
                <a class="footer__home-link" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo iuscanonicum_get_image_src('footer-logo.svg'); ?>" width="271" height="48" alt="logo" />
                </a>
                <?php dynamic_sidebar('iuscanonicum-footer-text-area'); ?>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'social-links',
                        'walker' => new IuscanonicumSocialWalker(),
                        'container' => false,
                        'menu_class' => 'footer__social'
                    )
                );
                ?>
            </div>
            <div class="footer__box">
                <h5>Kontakt</h5>
                <?php dynamic_sidebar('iuscanonicum-footer-contact-details'); ?>
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
            <p class="footer__copyright"><?php echo date('Y'); ?> © Iuascanonicum.pl | <span>Realizacja <a href="https://michalgolda.com">michalgolda.com</a></span></p>
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