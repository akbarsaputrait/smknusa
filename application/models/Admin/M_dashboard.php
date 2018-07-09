<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function count_post()
	{
		return $this->db->count_all('post');
	}

	public function new_post($type)
	{
		$this->db->select('post.title, post.content, post.slug')
				 ->from('post')
				 ->where('post.type = "'. $type .'" AND post.is_deleted = 0')
				 ->limit(3);
		$query = $this->db->get()->result();
		return $query;

	}
}
