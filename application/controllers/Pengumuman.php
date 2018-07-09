<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/froala/wysiwyg-editor-php-sdk/lib/FroalaEditor.php';

class Pengumuman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('auth'));
		}
		$this->load->model(array('admin/m_user', 'admin/m_post'));
		$this->load->library('dateformat');
	}

	// VIEW UNTUK BLOG
	public function add()
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
		);
		$this->load->view('admin/pengumuman/pengumuman_tambah', $data);
	}

	public function lists()
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
		);
		$this->load->view('admin/pengumuman/pengumuman_daftar', $data);
	}

	public function detail($id)
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
			'detail_blog' => $this->m_post->detail_post("pengumuman", $id),
		);
		$this->load->view('admin/pengumuman/pengumuman_detail', $data);
	}

	public function comment()
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
		);
		$this->load->view('admin/pengumuman/pengumuman_komentar', $data);
	}

	// FUNCTION UNTUK PENGUMUMAN
	public function add_post()
	{
		$this->form_validation->set_rules('judul_pengumuman', 'Judul pengumuman', 'trim|required');
		$this->form_validation->set_rules('konten_pengumuman', 'Konten pengumuman', 'trim|required');
		$this->form_validation->set_rules('kategori_pengumuman', 'Kategori', 'required');
		$this->form_validation->set_rules('tags_pengumuman', 'Tags', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger notif">', '</div>');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('failed', validation_errors());
			redirect(base_url('pengumuman/add'));
		} else {
			$data = array(
				'title' => $this->input->post('judul_pengumuman'),
				'content' => $this->input->post('konten_pengumuman'),
				'categories' => $this->input->post('kategori_pengumuman'),
				'tags' => $this->input->post('tags_pengumuman'),
				'type' => 'pengumuman',
				'slug' => url_title($this->input->post('judul_pengumuman'), '-', TRUE),
				'status' => $this->input->post('post_status'),
				'comment_status' => $this->input->post('post_comment_status'),
				'created_by' => $this->session->id,
				'is_deleted' => 0
			);

			$query = $this->db->insert('post', $data);

			if ($query) {
				$this->session->set_flashdata('success', '<div class="alert alert-success notif">Blog Berhasil Disimpan!</div>');
				redirect(base_url('pengumuman/lists'));
			} else {
				$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Blog Gagal Disimpan!</div>');
				redirect(base_url('pengumuman/add_post'));
			}
		}
	}

	public function get_list_blog()
	{
		header('Content-Type: application/json');

		$query = $this->m_post->datatables_post("pengumuman");

		$data = array();
		$response = array();

		$x = 1;

		foreach ($query as $key => $value) {
			$data[] = array(
				'no' => $x++,
				'id' => $value->id,
				'title' => $value->title,
				'status' => $value->status,
				'created_at' => $this->dateformat->tgl($value->created_at, true),
				'created_by' => $value->name,
			);
		}

		$response = array(
			"data" => $data,
		);
		echo json_encode($response);
	}

	public function update_post($id)
	{
		$this->form_validation->set_rules('judul_blog', 'Judul Blog', 'trim|required');
		$this->form_validation->set_rules('konten_blog', 'Konten Blog', 'trim|required');
		$this->form_validation->set_rules('kategori_blog', 'Kategori', 'required');
		$this->form_validation->set_rules('tags_blog', 'Tags', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger notif">', '</div>');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('failed', validation_errors());
			redirect(base_url('blog/add'));
		} else {
			$data = array(
				'title' => $this->input->post('judul_blog'),
				'content' => $this->input->post('konten_blog'),
				'categories' => $this->input->post('kategori_blog'),
				'tags' => $this->input->post('tags_blog'),
				'type' => 'pengumuman',
				'slug' => url_title($this->input->post('judul_blog'), '-', TRUE),
				'status' => $this->input->post('post_status'),
				'comment_status' => $this->input->post('post_comment_status'),
				'updated_at' => date("Y-m-d H:i:s"),
				'updated_by' => $this->session->id,
				'is_deleted' => 0
			);

			$this->db->where('post.id', $id);
			$query = $this->db->update('post', $data);

			if ($query) {
				$this->session->set_flashdata('success', '<div class="alert alert-success notif">Pengumuman Berhasil Diperbarui!</div>');
				redirect(base_url('pengumuman/lists'));
			} else {
				$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Pengumuman Gagal Diperbarui!</div>');
				redirect(base_url('pengumuman/detail/' . $id));
			}
		}
	}

	public function delete_post($id)
	{
		$data = array(
			'is_deleted' => 1,
			'deleted_at' => date("Y-m-d H:i:s"),
			'deleted_by' => $this->session->id
		);
		$this->db->where('post.id', $id);
		$query = $this->db->update('post', $data);

		if ($query) {
			$this->session->set_flashdata('success', '<div class="alert alert-success notif">Pengumuman Berhasil Dihapus!</div>');
			redirect(base_url('pengumuman/lists'));
		} else {
			$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Pengumuman Gagal Dihapus!</div>');
			redirect(base_url('pengumuman/lists'));
		}
	}


	//	FUNCTION UNTUK COMMENT
	public function get_list_comment()
	{
		header('Content-Type: application/json');

		$query = $this->m_post->datatables_comment("pengumuman");

		$data = array();

		$x = 1;

		foreach ($query as $key => $value) {
			$data[] = array(
				'no' => $x++,
				'id' => $value->id,
				'name' => $value->title,
				'content' => $value->content,
				'status' => $value->status,
				'created_at' => $this->dateformat->tgl($value->created_at, true),
				'post' => $value->title,
			);
		}

		$response = array(
			"data" => $data,
		);
		echo json_encode($response);
	}

	public function get_comment($id)
	{
		header('Content-Type: application/json');
		$data = array();

		$query = $this->m_post->get_comment_by($id);

		foreach ($query as $item) {
			$data = array(
				'email' => $item->email,
				'name' => $item->name,
				'content' => $item->content,
				'ip_address' => $item->ip_address,
				'status' => $item->status,
				'date' => $this->dateformat->tgl($item->date, true),
				'time' => $item->time,
				'post' => $item->title
			);
		}

		echo json_encode($data);
	}

	public function reply_comment($id)
	{
		$this->form_validation->set_rules('balas_komentar', 'Komentar', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger notif">', '</div>');

		if ($this->form_validation->run() == false) {
			$data = array(
				'status' => $this->input->post('post_status'),
				'updated_by' => $this->session->id,
				'updated_at' => date("Y-m-d H:i:s")
			);

			$this->db->where('comment.id', $id);
			$query = $this->db->update('comment', $data);

			if ($query) {
				$this->session->set_flashdata('success', '<div class="alert alert-success notif">Komentar Berhasil Diperbarui!</div>');
				redirect(base_url('blog/comment'));
			} else {
				$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Komentar Gagal Diperbarui!</div>');
				redirect(base_url('blog/comment'));
			}
		} else {
			$data = array(
				'status' => $this->input->post('post_status'),
				'updated_by' => $this->session->id,
				'updated_at' => date("Y-m-d H:i:s"),
				'reply' => $this->input->post('balas_komentar'),
				'replied_by' => $this->session->id,
				'replied_at' => date("Y-m-d H:i:s")
			);

			$this->db->where('comment.id', $id);
			$query = $this->db->update('comment', $data);

			if ($query) {
				$this->session->set_flashdata('success', '<div class="alert alert-success notif">Komentar Berhasil Dibalas!</div>');
				redirect(base_url('blog/comment'));
			} else {
				$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Komentar Gagal Dibalas!</div>');
				redirect(base_url('blog/comment'));
			}
		}
	}


	public function delete_comment($id)
	{
		$data = array(
			'is_deleted' => 1,
			'deleted_at' => date("Y-m-d H:i:s"),
			'deleted_by' => $this->session->id
		);
		$this->db->where('comment.id', $id);
		$query = $this->db->update('comment', $data);

		if ($query) {
			$this->session->set_flashdata('success', '<div class="alert alert-success notif">Komentar Berhasil Dihapus!</div>');
			redirect(base_url('blog/comment'));
		} else {
			$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Komentar Gagal Dihapus!</div>');
			redirect(base_url('blog/comment'));
		}
	}
}
