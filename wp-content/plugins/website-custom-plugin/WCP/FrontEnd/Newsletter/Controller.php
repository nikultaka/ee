<?php

class WCP_NewsLetter_Controller {
    public function get_newsletter_form(){
        require_once plugin_dir_path(dirname(__FILE__)) . 'Newsletter/HTML/news_letter_form.php';
        $s = ob_get_contents();
        ob_end_clean();
        return $s;
    }
}
$WCP_NewsLetter_Controller = new WCP_NewsLetter_Controller();
add_shortcode('wcp_NewsLetter_Form', array($WCP_NewsLetter_Controller, 'get_newsletter_form'));
