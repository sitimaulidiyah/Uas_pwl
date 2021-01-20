<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_loginp extends CI_Model
{

    public function cek_username($username)
    {
        $query = $this->db->get_where('supplier', ['username' => $username]);
        return $query->num_rows();
    }

    public function get_password($username)
    {
        $data = $this->db->get_where('supplier', ['username' => $username])->row_array();
        return $data['password'];
    }

    public function userdata($username)
    {
        return $this->db->get_where('supplier', ['username' => $username])->row_array();
    }
}
