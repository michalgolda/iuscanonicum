<?php get_header(); ?>
<main class="not-found container">
    <h1 class="not-found__code">404</h1>
    <h3 class="not-found__description">Strona, której szukasz nie istnieje lub została przeniesiona.</h3>
    <a class="button button--primary" href="<?php echo get_home_url(); ?>">
        Strona główna
    </a>
</main>
<?php get_footer(); ?>