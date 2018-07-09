<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_post extends CI_Model
{
	public $table = 'post';
	public $join = 'users';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('dateformat');
	}

	public function datatables_post($type_post)
	{
		$this->db->select('post.id, post.title , post.status, DATE(post.created_at) AS created_at , users.name');
		$this->db->from($this->table);
		$this->db->join($this->join, 'post.created_by = users.id');
		$this->db->where('post.type = "' . $type_post . '" AND post.is_deleted = 0');
		$this->db->order_by('post.id', 'desc');
		$query = $this->db->get()->result();
		return $query;
	}

	public function detail_post($type_post, $id)
	{
		$data = array();

		$this->db->select('post.id, post.title, post.content, post.image, post.categories, post.tags, post.status, post.comment_status, DATE(post.created_at) as created_at, users.name, users.username');
		$this->db->from($this->table);
		$this->db->join($this->join, 'post.created_by = users.id');
		$this->db->where('post.id = ' . $id . ' AND post.type = "' . $type_post . '" AND post.is_deleted = 0 AND users.is_deleted = 0');
		$query = $this->db->get()->result();

		foreach ($query as $row) {
			$data = array(
				'id' => $row->id,
				'title' => $row->title,
				'content' => $row->content,
				'categories' => $row->categories,
				'tags' => $row->tags,
				'status' => $row->status,
				'comment_status' => $row->comment_status,
				'created_at' => $this->dateformat->tgl($row->created_at, true),
				'name' => $row->name,
				'username' => $row->username
			);
		}
		return $data;
	}

	public function datatables_comment($type_post)
	{
		$this->db->select('comment.id, comment.name, comment.content, DATE(comment.created_at) AS created_at, comment.status, post.title');
		$this->db->from('comment');
		$this->db->join($this->table, 'comment.post_id = post.id');
		$this->db->where('post.type = "' . $type_post . '" AND post.is_deleted = 0 AND comment.is_deleted = 0');
		$this->db->order_by('comment.id', 'desc');
		$query = $this->db->get()->result();
		return $query;
	}

	public function get_comment_by($id)
	{
		$query = $this->db->select('comment.email, comment.name, comment.content, comment.ip_address, comment.status, comment.reply, DATE(comment.created_at) AS date, TIME(comment.created_at) AS time, post.title')
			->from('comment')
			->join($this->table, 'comment.post_id = post.id')
			->where('post.is_deleted = 0 AND comment.is_deleted = 0 AND comment.id = ' . $id)
			->get()->result();

		return $query;
	}
}
