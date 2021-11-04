<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function insert($data)
    {
        $this->db->insert("users", $data);
    }

    public function get_all()
    {
        $users_data = $this->db->get("users")->result();
        return $users_data;
    }

    public function get($id)
    {
        $user_data = $this->db->get_where("users", ["id" => $id])->row();
        return $user_data;
    }
    public function update($id, $data)
    {
        $update_user = $this->db->update('users', $data, ["id" => $id]);
        return $update_user;
    }

    public function delete($id)
    {
        $this->db->delete("users", ["id" => $id]);
        return "Delete Successfuly";
    }
}

/* End of file Form_model.php */
