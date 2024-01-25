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
        <div class="content__maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.948330434606!2d19.954871046591023!3d50.068529294720605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165bddbabe6521%3A0xe219c44c9567c684!2sJoanna%20Zbierzchowska-Ocha%C5%82ek!5e0!3m2!1spl!2spl!4v1706199474056!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.969117787877!2d19.926185888918788!3d50.0681399980926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b062a83df7f%3A0x53b315dd041874fc!2sJana%20Sobieskiego%2010%2F14%2C%2031-136%20Krak%C3%B3w!5e0!3m2!1spl!2spl!4v1706199599428!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
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