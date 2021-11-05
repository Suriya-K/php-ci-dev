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

    public function search($search_word)
    {
        $this->db->from('users');
        $this->db->like('name', $search_word);
        $this->db->or_like('email', $search_word);
        $this->db->or_like('head_position', $search_word);
        $this->db->or_like('sub_position', $search_word);
        $this->db->or_like('salary', $search_word);
        $this->db->or_like('status', $search_word);
        $query = $this->db->get()->result();
        return $query;
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
