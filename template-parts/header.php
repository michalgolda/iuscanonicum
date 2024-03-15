<header id="header" class="header container">
    <a class="header__home-link" href="<?php echo get_home_url(); ?>">
        <img class="header__logo" width="318" height="56" src="<?php echo iuscanonicum_get_image_src('logo.svg'); ?>" alt="logo" />
    </a>
    <div id="hamburger-btn" class="hamburger">
        <span class="hamburger__slice"></span>
        <span class="hamburger__slice"></span>
    </div>
    <nav id="navigation" class="header__nav">
        <?php
        wp_nav_menu(
            array(
                'theme_location'  => 'header-menu',
                'menu_class'      => 'header__menu',
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                'fallback_cb'     => false,
                'container' => false
            )
        );
        ?>
    </nav>
</header>