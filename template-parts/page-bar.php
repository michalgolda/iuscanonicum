<div class="page-bar">
    <div class="page-bar__box page-bar__box--title">
        <h2><?php echo $args['name']; ?></h2>
    </div>
    <div class="page-bar__box page-bar__box--breadcrumbs">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
    </div>
</div>