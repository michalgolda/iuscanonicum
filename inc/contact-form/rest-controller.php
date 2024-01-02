<?php

class IuscanonicumRestContactController
{
    public function __construct()
    {
        $this->namespace = '/iuscanonicum';
        $this->endpoint = '/contact';
    }

    public function handle_request($req)
    {
        $nonce = $req->get_param('nonce');
        $verify_result = wp_verify_nonce($nonce, 'iuscanonicum-contact-form');
        if (!$verify_result) {
            return new WP_Rest_Response(['msg' => 'The nonce has invalid value.'], 400);
        }


        $params = $req->get_json_params();
        $validation_err = $this->validate_params($params);
        if ($validation_err) {
            return $validation_err;
        }

        $this->send_message($params);

        return new WP_Rest_Response(['msg' => 'The message was successfully sent.'], 200);
    }

    public function register_routes()
    {
        register_rest_route($this->namespace, $this->endpoint, [
            [
                'methods' => 'POST',
                'callback' => [$this, 'handle_request']
            ]
        ]);
    }

    private function validate_params($params)
    {
        $params_keys = array_keys($params);
        $required_params = ['firstName', 'lastName', 'topic', 'email', 'content'];

        foreach ($required_params as $required_param) {
            if (!in_array($required_param, $params_keys)) {
                return new WP_Rest_Response(['msg' => "The {$required_param} field is required."], 400);
            }

            if ($params[$required_param] == '') {
                return new WP_Rest_Response(['msg' => "The {$required_param} field value is required."], 400);
            }

            if ($required_param == 'email') {
                if (!is_email($params[$required_param])) {
                    return new WP_Rest_Response(['msg' => 'The email field has invalid value'], 400);
                }
            }
        }

        return NULL;
    }

    private function send_message($params)
    {
        $message = 'Imię: ' . $params['firstName'] . "\n";
        $message .= 'Nazwisko: ' . $params['lastName'] . "\n";
        $message .= 'E-mail: ' . $params['email'] . "\n\n";
        $message .= $params['content'] . "\n\n";
        $message .= "Wiadomość została wygenerowana automatycznie przez system na podstawie danych przesłanych przez formularz kontaktowy. Proszę na nią nie odpowiadać.";

        $to = $this->get_recipients();

        $result = wp_mail($to, $params['topic'], $message);
        if (!$result) {
            return new WP_Error('send_contact_message_error', 'Something went wrong while sending contact message.');
        }

        return $result;
    }

    public function get_recipients()
    {
        $option_value = get_option('iuscanonicum_contact_form_recipients');
        $recipients = explode("\n", $option_value);

        return $recipients;
    }
}
