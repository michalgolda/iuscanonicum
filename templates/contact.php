<?php
/*
Template Name: Kontakt
*/

get_header();

wp_enqueue_script(
    'iuscanonicum-contact-form',
    get_template_directory_uri() . '/assets/scripts/contact-form.js',
    [],
    false,
    true
);
?>

<main class="container">
    <?php get_template_part('template-parts/page-bar', null, ['name' => 'Kontakt']); ?>
    <?php dynamic_sidebar('iuscanonicum-contact-details'); ?>
    <div class="content">
        <img src="<?php echo iuscanonicum_get_image_src('google-map.jpg'); ?>" alt="google map" />
        <div class="form-wrapper">
            <?php dynamic_sidebar('iuscanonicum-contact-page-text-area'); ?>
            <form id="contact-form" class="form" autocomplete="off">
                <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('iuscanonicum-contact-form'); ?>" />
                <div class="form__group">
                    <input type="text" name="firstName" placeholder="Imię" required />
                    <input type="text" name="lastName" placeholder="Nazwisko" required />
                </div>
                <input type="email" name="email" placeholder="E-mail" required />
                <input type="text" name="topic" placeholder="Temat wiadomości" required />
                <textarea placeholder="Treść wiadomości" name="content" required></textarea>
                <p class="form__message form__message--hidden"></p>
                <div class="form__group form__group--agreement">
                    <div class="form__agreement">
                        <input type="checkbox" name="agreement" required />
                        <p>Wyrażam zgodę na przetwarzanie danych na potrzeby konwersacji*</p>
                    </div>
                    <button class="button button--primary-outlined button--block" type="submit">Wyślij</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php get_footer(); ?>