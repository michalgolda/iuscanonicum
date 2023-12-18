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
                <p>Donec risus justo, euismod id volutpat at, accumsan at nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                <div class="footer__social">
                    <a href="#" class="footer__social-icon">
                        <img src="<?php echo iuscanonicum_get_image_src('facebook-icon.svg'); ?>" alt="facebook icon" />
                    </a>
                    <a href="#" class="footer__social-icon">
                        <img src="<?php echo iuscanonicum_get_image_src('linkedin-icon.svg'); ?>" alt="linkedin icon" />
                    </a>
                </div>
            </div>
            <div class="footer__box">
                <h5>Kontakt</h5>
                <ul class="footer__list">
                    <li>
                        <p>al. Beliny Prażmowskiego, 9/331-514 Kraków</p>
                    </li>
                    <li>
                        <p>Tel. +48 322 322 322</p>
                    </li>
                    <li>
                        <p>kontakt@iuascanonicum.pl</p>
                    </li>
                </ul>
            </div>
            <div class="footer__box">
                <h5>Nasze specjalizacje</h5>
                <ul class="footer__list">
                    <li>
                        <p>Prawo rodzinne</p>
                    </li>
                    <li>
                        <p>Prawo kanoniczne</p>
                    </li>
                </ul>
            </div>
            <div class="footer__box">
                <h5>Menu</h5>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
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
            <ul class="footer__links">
                <li><a class="footer__link" href="#">Polityka prywatności</a></li>
                <li><a class="footer__link" href="#">Polityka ciasteczek</a></li>
            </ul>
        </div>
    </div>
</footer>