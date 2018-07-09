<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/froala/wysiwyg-editor-php-sdk/lib/FroalaEditor.php';

class Blog extends CI_Controller
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
		$this->load->view('admin/blog/blog_tambah', $data);
	}

	public function lists()
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
		);
		$this->load->view('admin/blog/blog_daftar', $data);
	}

	public function detail($id)
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
			'detail_blog' => $this->m_post->detail_post("blog", $id),
		);
		$this->load->view('admin/blog/blog_detail', $data);
	}

	public function comment()
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
		);
		$this->load->view('admin/blog/blog_komentar', $data);
	}

	// FUNCTION UNTUK BLOG
	public function add_post()
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
			$config['encrypt_name'] = true;
			$config['upload_path'] = './uploads/img/cover_post/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['remove_space'] = true;

			$this->load->library('upload');
			$this->upload->initialize($config);

			if (!$this->upload->do_upload("cover_post")) {

				$data = array(
					'title' => $this->input->post('judul_blog'),
					'content' => $this->input->post('konten_blog'),
					'categories' => $this->input->post('kategori_blog'),
					'tags' => $this->input->post('tags_blog'),
					'type' => 'blog',
					'slug' => url_title($this->input->post('judul_blog'), '-', TRUE),
					'status' => $this->input->post('post_status'),
					'comment_status' => $this->input->post('post_comment_status'),
					'created_by' => $this->session->id,
					'is_deleted' => 0
				);

				$query = $this->db->insert('post', $data);

				if ($query) {
					$this->session->set_flashdata('success', '<div class="alert alert-success notif">Blog Berhasil Disimpan!</div>');
					redirect(base_url('blog/lists'));
				} else {
					$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Blog Gagal Disimpan!</div>');
					redirect(base_url('blog/add_post'));
				}
			} else {
				$file = array('upload_data' => $this->upload->data());

				$data = array(
					'title' => $this->input->post('judul_blog'),
					'content' => $this->input->post('konten_blog'),
					'image' => $file['upload_data']['file_name'],
					'categories' => $this->input->post('kategori_blog'),
					'tags' => $this->input->post('tags_blog'),
					'type' => 'blog',
					'slug' => url_title($this->input->post('judul_blog'), '-', TRUE),
					'status' => $this->input->post('post_status'),
					'comment_status' => $this->input->post('post_comment_status'),
					'created_by' => $this->session->id,
					'is_deleted' => 0
				);

				$query = $this->db->insert('post', $data);
				if ($query) {
					$this->session->set_flashdata('success', '<div class="alert alert-success notif">Blog Berhasil Disimpan!</div>');
					redirect(base_url('blog/lists'));
				} else {
					$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Blog Gagal Disimpan!</div>');
					redirect(base_url('blog/add_post'));
				}
			}
		}
	}

	public function get_list_blog()
	{
		header('Content-Type: application/json');

		$query = $this->m_post->datatables_post("blog");

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
			$config['encrypt_name'] = true;
			$config['upload_path'] = './uploads/img/cover_post/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['remove_space'] = true;

			$this->load->library('upload');
			$this->upload->initialize($config);

			if (!$this->upload->do_upload("cover_post")) {

				$data = array(
					'title' => $this->input->post('judul_blog'),
					'content' => $this->input->post('konten_blog'),
					'categories' => $this->input->post('kategori_blog'),
					'tags' => $this->input->post('tags_blog'),
					'type' => 'blog',
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
					$this->session->set_flashdata('success', '<div class="alert alert-success notif">Blog Berhasil Diperbarui!</div>');
					redirect(base_url('blog/lists'));
				} else {
					$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Blog Gagal Diperbarui!</div>');
					redirect(base_url('blog/detail/' . $id));
				}
			} else {
				$file = array('upload_data' => $this->upload->data());

				$data = array(
					'title' => $this->input->post('judul_blog'),
					'content' => $this->input->post('konten_blog'),
					'image' => $file['upload_data']['file_name'],
					'categories' => $this->input->post('kategori_blog'),
					'tags' => $this->input->post('tags_blog'),
					'type' => 'blog',
					'slug' => url_title($this->input->post('judul_blog'), '-', TRUE),
					'status' => $this->input->post('post_status'),
					'comment_status' => $this->input->post('post_comment_status'),
					'created_by' => $this->session->id,
					'is_deleted' => 0
				);

				$this->db->where('post.id', $id);
				$query = $this->db->update('post', $data);

				if ($query) {
					$this->session->set_flashdata('success', '<div class="alert alert-success notif">Blog Berhasil Diperbarui!</div>');
					redirect(base_url('blog/lists'));
				} else {
					$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Blog Gagal Diperbarui!</div>');
					redirect(base_url('blog/detail/' . $id));
				}
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
			$this->session->set_flashdata('success', '<div class="alert alert-success notif">Blog Berhasil Dihapus!</div>');
			redirect(base_url('blog/lists'));
		} else {
			$this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Blog Gagal Dihapus!</div>');
			redirect(base_url('blog/lists'));
		}
	}


	//	FUNCTION UNTUK COMMENT
	public function get_list_comment()
	{
		header('Content-Type: application/json');

		$query = $this->m_post->datatables_comment("blog");

		$data = array();

		$x = 1;

		foreach ($query as $key => $value) {
			$data[] = array(
				'no' => $x++,
				'id' => $value->id,
				'name' => $value->name,
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
				'reply' => $item->reply,
				'post' => $item->title,
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


	// FROALA SERVER SIDE
	public function froala_uploads()
	{
		try {
			// File Route.
			$fileRoute = "uploads/img/post/";

			$fieldname = "file";

			// Get filename.
			$filename = explode(".", $_FILES[$fieldname]["name"]);

			// Get temp file name.
			$tmpName = $_FILES[$fieldname]["tmp_name"];

			// Get extension.
			$extension = end($filename);

			// Generate new random name.
			$name = sha1(microtime()) . "." . $extension;
			$fullNamePath = $_SERVER['DOCUMENT_ROOT'] . '/smknusa/' . $fileRoute . $name;

			// Save file in the uploads folder.
			move_uploaded_file($tmpName, $fullNamePath);

			// Generate response.
			$response = new \StdClass;
			$response->link = base_url() . $fileRoute . $name;

			// Send response.
			echo stripslashes(json_encode($response));

		} catch (Exception $e) {
			// Send error response.
			echo $e->getMessage();
			http_response_code(404);
		}
	}

	public function froala_manager()
	{
		try {
			$response = FroalaEditor_Image::getList('/smknusa/uploads/img/post/');
			echo stripslashes(json_encode($response));
		} catch (Exception $e) {
			http_response_code(404);
		}
	}

	public function froala_delete()
	{
		// Get src.
		$src = $_POST["src"];

		// Check if file exists.
		if (file_exists(getcwd() . $src)) {
			// Delete file.
			unlink(getcwd() . $src);
		}
	}

	public function froala_file()
	{
		try {
			// File Route.
			$fileRoute = "uploads/file/";

			$fieldname = "file";

			// Get filename.
			$filename = explode(".", $_FILES[$fieldname]["name"]);

			// Get temp file name.
			$tmpName = $_FILES[$fieldname]["tmp_name"];

			// Get extension.
			$extension = end($filename);

			// Generate new random name.
			$name = sha1(microtime()) . "." . $extension;
			$fullNamePath = $_SERVER['DOCUMENT_ROOT'] . '/smknusa/' . $fileRoute . $name;

			// Save file in the uploads folder.
			move_uploaded_file($tmpName, $fullNamePath);

			// Generate response.
			$response = new \StdClass;
			$response->link = base_url() . $fileRoute . $name;

			// Send response.
			echo stripslashes(json_encode($response));

		} catch (Exception $e) {
			// Send error response.
			echo $e->getMessage();
			http_response_code(404);
		}
	}

	public function froala_video()
	{
		try {
			// File Route.
			$fileRoute = "uploads/file/";

			$fieldname = "file";

			// Get filename.
			$filename = explode(".", $_FILES[$fieldname]["name"]);

			// Get temp file name.
			$tmpName = $_FILES[$fieldname]["tmp_name"];

			// Get extension.
			$extension = end($filename);

			// Generate new random name.
			$name = sha1(microtime()) . "." . $extension;
			$fullNamePath = $_SERVER['DOCUMENT_ROOT'] . '/smknusa/' . $fileRoute . $name;

			// Save file in the uploads folder.
			move_uploaded_file($tmpName, $fullNamePath);

			// Generate response.
			$response = new \StdClass;
			$response->link = base_url() . $fileRoute . $name;

			// Send response.
			echo stripslashes(json_encode($response));

		} catch (Exception $e) {
			// Send error response.
			echo $e->getMessage();
			http_response_code(404);
		}
	}

}
