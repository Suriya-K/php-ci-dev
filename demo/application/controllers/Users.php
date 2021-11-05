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
        $users_data = $this->user_model->get_all();

        $this->load->helper('url');
        $this->load->view('v_main', [
            'base_url' => base_url(),
            'body' => 'v_users',
            'users_data' => $users_data
        ]);
    }

    public function insert_data_table()
    {
        $post = $this->input->post();
        $data = array(
            "name" => $post['name'],
            "email" => $post['email'],
            "head_position" => $post['head_position'],
            "sub_position" => $post['sub_position'],
            "salary" => $post['salary'],
            "status" => $post['status']
        );
        $this->load->helper('url');
        $this->user_model->insert($data);
        redirect("http://[::1]/www/php-ci-dev/demo/Users/");
    }

    public function update_data_table($id)
    {
        $post = $this->input->post();
        $data = array(
            "name" => $post['name'],
            "email" => $post['email'],
            "head_position" => $post['head_position'],
            "sub_position" => $post['sub_position'],
            "salary" => $post['salary'],
            "status" => $post['status']
        );
        $this->load->helper('url');
        $this->user_model->update($id, $data);
        redirect("http://[::1]/www/php-ci-dev/demo/Users/");
    }

    public function update_data_open($id)
    {
        $user_data = $this->user_model->get($id);
        $this->load->helper('url');
        $this->load->view('v_main', [
            'base_url' => base_url(),
            'body' => 'v_users_edit',
            'user_data' => $user_data
        ]);
    }

    public function search_data_table()
    {
        $this->load->helper('url');
        $search = $this->input->post('search');
        $search_result = $this->user_model->search($search);
        var_dump($search_result);
        $this->load->view('v_main', [
            'base_url' => base_url(),
            'body' => 'v_users',
            'user_data' => $search_result
        ]);
    }

    public function delete_data_table($id)
    {
        $this->load->helper('url');
        $this->user_model->delete($id);
        redirect("http://[::1]/www/php-ci-dev/demo/Users/");
    }
}

/* End of file Users.php */

//http://[::1]/www/php-ci-dev/demo/Users/
