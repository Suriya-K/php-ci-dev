<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function index($new_path = null)
    {
        $this->load->helper('url');
        $this->load->view('v_main', [
            'base_url' => base_url(),
            'body' => 'v_details'
        ]);
    }

    public function get_form()
    {
        $this->input->post();
        var_dump($_POST);
    }
}

/* End of file Controllername.php */
