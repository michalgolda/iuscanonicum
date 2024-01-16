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
    <?php dynamic_sidebar('iuscanonicum-contact-page-title'); ?>
    <?php dynamic_sidebar('iuscanonicum-contact-details'); ?>
    <div class="content">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.7181230474357!2d19.932848076462644!3d50.05411147151916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b6d053619f5%3A0xacb9dfc4d67fa598!2sZamek%20Kr%C3%B3lewski%20na%20Wawelu!5e0!3m2!1spl!2spl!4v1705395304118!5m2!1spl!2spl" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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