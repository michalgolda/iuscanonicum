<p><label for="iuscanonicum_contact_form_recipients">
        Wygenerowana wiadomość na podstawie danych przesłanych przez formularz zostanie wysłana na adresy email odbiorców podanych w ponniższym polu tekstowym. Wprowadzaj adresy w oddzielnych liniach.
    </label></p>

<textarea name="iuscanonicum_contact_form_recipients" id="iuscanonicum_contact_form_recipients" class="large-text code" rows="3"><?php echo esc_textarea(get_option('iuscanonicum_contact_form_recipients')); ?></textarea>