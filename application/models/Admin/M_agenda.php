<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_agenda extends CI_Model
{
	public $table = 'event';
	public $join = 'users';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('dateformat');
	}

	public function get_agenda()
	{
		$this->db->select('event.id, event.title, event.start_date, event.end_date, event.background_color, event.text_color, event.url');
		$this->db->from($this->table);
		$this->db->where('event.is_deleted = 0');
		$query = $this->db->get()->result();
		return $query;
	}

	public function info_photo($id)
	{
		$this->db->select('galery.id, galery.filename, galery.categories, galery.content, DATE(galery.created_at) AS date, TIME(galery.created_at) AS time, users.name');
		$this->db->from($this->table);
		$this->db->join($this->join, 'galery.created_by = users.id');
		$this->db->where('galery.is_deleted = 0 AND galery.id = ' . $id . '');
		$this->db->order_by('galery.id', 'desc');
		$query = $this->db->get()->result();
		return $query;
	}
}
