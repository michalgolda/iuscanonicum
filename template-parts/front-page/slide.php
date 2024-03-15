<div class="swiper-slide container hero">
    <div class="hero__container">
        <div class="hero__heading">
            <p class="hero__overline-heading"><?php echo $args['overline-text']; ?></p>
            <h1><?php echo $args['title']; ?></h1>
        </div>
        <div>
            <?php echo $args['body'] ?>
        </div>
        <a class="button button--primary" href="<?php echo iuscanonicum_get_permalink('/kontakt'); ?>">Skontaktuj się</a>
    </div>
    <img class="hero__img" src="<?php echo $args['image-url']; ?>" width="512" height="480" alt="hero image" />
</div>