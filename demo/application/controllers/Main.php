<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function index($new_path = null)
    {
        $this->load->view('v_main');
    }
}

/* End of file Controllername.php */
