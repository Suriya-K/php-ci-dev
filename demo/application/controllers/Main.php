<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function index($new_path = null)
    {
        $this->load->helper('url');
        $this->load->view('v_main', [
            
            'base_url' => base_url()
        ]);
    }
}

/* End of file Controllername.php */
