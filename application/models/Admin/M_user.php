<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    private $table = 'users';
    private $field = 'name, username, email, photo';

    public function where($id)
    {
        $sql = "SELECT $this->field FROM $this->table WHERE id = ?";
        $query = $this->db->query($sql, array($id));
        return $query->row();
    }

    public function check_id($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
}
