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
        $post = $this->input->post();
        $this->load->helper('url');
        $this->load->view('v_main', [
            'base_url' => base_url(),
            'body' => 'v_result',
            'first_name' => $post['first_name'],
            'last_name' => $post['last_name'],
            'age' => $post['age'],
            'mobilephone' => $post['mobilephone'],
            'address' => $post['address'],
            'email' => $post['email'],
            'u_id' => $post['u_id'],
            'u_password' => $post['u_password']
        ]);
    }
}

/* End of file Controllername.php */
