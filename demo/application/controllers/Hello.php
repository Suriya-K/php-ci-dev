<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{
    public function show()
    {
        $sets = ['one', 'two', 'three', 'four', 'five'];
        $hello = ['ez', 1, 2, 3, 4, 5];
        $this->load->view('v_hello', [
            'sets' => $sets,
            'hello' => $hello
        ]);
    }
    public function get_uri2($id = null)
    {
        var_dump($id);
        $this->load->view('v_show', ['id' => $id]);
    }
}

/* End of file Hello.php */
