<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('auth'));
		}
		$this->load->model(array('admin/m_user', 'admin/m_galeri'));
		$this->load->library('dateformat');
	}

	// VIEW UNTUK GALERI
	public function add()
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
		);
		$this->load->view('admin/galeri/galeri_tambah', $data);
	}

	public function lists()
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
		);
		$this->load->view('admin/galeri/galeri_daftar', $data);
	}

	public function detail($id)
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
			'detail_blog' => $this->m_post->detail_post("blog", $id),
		);
		$this->load->view('admin/blog_detail', $data);
	}

	public function comment()
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
		);
		$this->load->view('admin/blog_komentar', $data);
	}

	// FUNCTION UNTUK GALERI
	public function add_photo()
	{
		$data = array();

		if (!empty($_FILES)) {
			$tempFile = $_FILES['file']['tmp_name'];
			$fileName = $_FILES['file']['name'];
			$fileType = $_FILES['file']['type'];
			$fileSize = $_FILES['file']['size'];
			$targetPath = './uploads/img/galery/';
			$targetFile = $targetPath . $fileName;

			move_uploaded_file($tempFile, $targetFile);

			$data = array(
				'filename' => $fileName,
				'categories' => $this->input->post('kategori'),
				'content' => $this->input->post('keterangan'),
				'created_by' => $this->session->id,
				'is_deleted' => 0
			);

			$query = $this->db->insert('galery', $data);

			if ($query) {
				$data = array(
					'status' => 200
				);
			} else {
				$data = array(
					'status' => 400
				);
			}
		}
		echo json_encode($data);
	}

	public function get_list_blog()
	{
		header('Content-Type: application/json');

		$query = $this->m_galeri->datatables_post();

		$data = array();
		$response = array();

		$x = 1;

		foreach ($query as $key => $value) {
			$data[] = array(
				'no' => $x++,
				'id' => $value->id,
				'filename' => $value->filename,
				'categories' => $value->categories,
				'content' => $value->content,
				'date' => $this->dateformat->tgl($value->date, true),
				'created_by' => $value->name,
			);
		}

		$response = array(
			"data" => $data,
		);
		echo json_encode($response);
	}

	public function get_info_photo($id)
	{
		header('Content-Type: application/json');
		$data = array();

		$query = $this->m_galeri->info_photo($id);

		foreach ($query as $key => $value) {
			$data = array(
				'id' => $value->id,
				'filename' => $value->filename,
				'categories' => $value->categories,
				'content' => $value->content,
				'date' => $this->dateformat->tgl($value->date, true),
				'created_by' => $value->name,
			);
		}

		echo json_encode($data);
	}

	public function update_post($id)
	{
		$config['encrypt_name'] = true;
		$config['upload_path'] = './uploads/img/galery/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '10480';
		$config['remove_space'] = true;

		$this->load->library('upload');
		$this->upload->initialize($config);

		if (!$this->upload->do_upload("photo_galery")) {

			$data = array(
				'categories' => $this->input->post('kategori_photo'),
				'content' => $this->input->post('keterangan_photo'),
				'updated_at' => date("Y-m-d H:i:s"),
				'updated_by' => $this->session->id,
				'is_deleted' => 0
			);

			$this->db->where('galery.id', $id);
			$query = $this->db->update('galery', $data);
//			var_dump($file);
			if ($query) {
				$this->session->set_flashdata('success', '<div class="alert alert-success notif">Photo Berhasil Diperbarui!</div>');
				redirect(base_url('galeri/lists'));
			} else {
				$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Photo Gagal Diperbarui!</div>');
				redirect(base_url('galeri/detail/' . $id));
			}
		} else {
			$file = array('upload_data' => $this->upload->data());

			$data = array(
				'filename' => $file['upload_data']['file_name'],
				'categories' => $this->input->post('kategori_photo'),
				'content' => $this->input->post('keterangan_photo'),
				'updated_at' => date("Y-m-d H:i:s"),
				'updated_by' => $this->session->id,
				'is_deleted' => 0
			);

			$this->db->where('galery.id', $id);
			$query = $this->db->update('galery', $data);

			if ($query) {
				$this->session->set_flashdata('success', '<div class="alert alert-success notif">Photo Berhasil Diperbarui!</div>');
				redirect(base_url('galeri/lists'));
			} else {
				$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Photo Gagal Diperbarui!</div>');
				redirect(base_url('galeri/detail/' . $id));
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
		$this->db->where('galery.id', $id);
		$query = $this->db->update('galery', $data);

		if ($query) {
			$this->session->set_flashdata('success', '<div class="alert alert-success notif">Photo Berhasil Dihapus!</div>');
			redirect(base_url('galeri/lists'));
		} else {
			$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Photo Gagal Dihapus!</div>');
			redirect(base_url('galeri/lists'));
		}
	}

}
