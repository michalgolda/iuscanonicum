<?php

class IuscanonicumContactFormSettings
{
    public function __construct()
    {
        $this->section_name = 'iuscanonicum_contact_form_settings';
    }

    public function init()
    {
        add_settings_section(
            $this->section_name,
            'Formularz kontaktowy',
            [$this, 'section_callback'],
            'general'
        );

        add_option('iuscanonicum_contact_form_recipients', get_option('admin_email'), '', 'yes');

        register_setting(
            'general',
            'iuscanonicum_contact_form_recipients',
            [
                'string' => 'text',
                'default' => get_option('admin_email')
            ]
        );
    }

    public function section_callback()
    {
        require_once __DIR__ . '/settings-callback.php';
    }
}
