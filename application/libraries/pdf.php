<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once(dirname(__FILE__) . '/dompdf/dompdf_config.inc.php');

class Pdf extends DOMPDF {

    protected function ci() {
        return get_instance();
    }

    public function load_view($view, $data = array()) {
        
        $html = $this->ci()->load->view($view, $filename = '', $stream = TRUE, $paper = 'A4', $orientation = "landscape");
        $this->load_html($html);
    }

}