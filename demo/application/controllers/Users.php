<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('v_main', [
            'base_url' => base_url(),
            'body' => 'v_users'
        ]);
    }

    public function insert_data_table()
    {
        $data = array(
            "name" => "Supak Pudkam",
            "email" => "Jack Supak @hotmail.com",
            "head_position" => "CEO",
            "sub_position" => "Founder",
            "salary" => "999999",
            "status" => "active"
        );
        $this->user_model->insert($data);
    }
}

/* End of file Users.php */
