<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
    public function is_valid($table, $username)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('email = "' . $username . '" OR username = "' . $username . '"');
        $query = $this->db->get();
        return $query->row();
    }
}
