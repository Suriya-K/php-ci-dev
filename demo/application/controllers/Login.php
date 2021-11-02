<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Global_Model');
    }

    public function login()
    {
        $select_user = $this->Global_Model->select('users', [
            ['username' => $this->input->post('username')],
            ['status' => 'active']
        ])->result();
    }

    
}

/* End of file Login.php */
