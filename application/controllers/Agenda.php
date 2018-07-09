<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('auth'));
		}
		$this->load->model(array('admin/m_user', 'admin/m_agenda'));
		$this->load->library('dateformat');
	}

//	VIEW
	public function index()
	{
		$data = array(
			'info_user' => $this->m_user->where($this->session->id),
		);
		$this->load->view('admin/agenda', $data);
	}

//	DATA
	public function get_all_event()
	{
		header('Content-Type: application/json');

		$data = array();

		$query = $this->m_agenda->get_agenda();

		foreach ($query as $item) {
			$data[] = array(
				'id' => $item->id,
				'title' => $item->title,
				'url' => $item->url,
				'start' => $item->start_date,
				'end' => $item->end_date,
				'color' => $item->background_color,
				'textColor' => $item->text_color,
			);
		}

		echo json_encode($data);
	}

	public function add_event()
	{
		$this->form_validation->set_rules('title', 'Judul', 'trim|required');
		$this->form_validation->set_rules('start_date', 'Tanggal Mulai', 'trim|required');
		$this->form_validation->set_rules('end_date', 'Tanggal Berakhir', 'trim|required');
		$this->form_validation->set_rules('background_color', 'Warna Latar', 'trim|required');
		$this->form_validation->set_rules('text_color', 'Warna Text', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger notif">', '</div>');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('failed', validation_errors());
			redirect(base_url('agenda'));
		} else {
			$data = array(
				'title' => $this->input->post('title'),
				'url' => $this->input->post('url'),
				'start_date' => date('Y-m-d H:i:s', strtotime($this->input->post('start_date'))),
				'end_date' => date('Y-m-d H:i:s', strtotime($this->input->post('end_date'))),
				'background_color' => $this->input->post('background_color'),
				'text_color' => $this->input->post('text_color'),
				'created_by' => $this->session->id,
				'is_deleted' => 0
			);

			$query = $this->db->insert('event', $data);

			if ($query) {
				$response = array(
					'status' => 200
				);
			} else {
				$response = array(
					'status' => 400
				);
			}

			echo json_encode($response);
		}
	}

	public function update_event($id)
	{
		$this->form_validation->set_rules('info_title', 'Judul', 'trim|required');
		$this->form_validation->set_rules('info_start_date', 'Tanggal Mulai', 'trim|required');
		$this->form_validation->set_rules('info_end_date', 'Tanggal Berakhir', 'trim|required');
		$this->form_validation->set_rules('info_background_color', 'Warna Latar', 'trim|required');
		$this->form_validation->set_rules('info_text_color', 'Warna Text', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger notif">', '</div>');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('failed', validation_errors());
			redirect(base_url('agenda'));
		} else {
			$data = array(
				'title' => $this->input->post('info_title'),
				'url' => $this->input->post('info_url'),
				'start_date' => date('Y-m-d H:i:s', strtotime($this->input->post('info_start_date'))),
				'end_date' => date('Y-m-d H:i:s', strtotime($this->input->post('info_end_date'))),
				'background_color' => $this->input->post('info_background_color'),
				'text_color' => $this->input->post('info_text_color'),
				'updated_at' => date('Y-m-d H:i:s'),
				'updated_by' => $this->session->id,
			);

			$this->db->where('event.id', $id);
			$query = $this->db->update('event', $data);

			if ($query) {
				$response = array(
					'status' => 200
				);
			} else {
				$response = array(
					'status' => 400
				);
			}

			echo json_encode($response);
		}
	}

	public function delete_event($id)
	{
		$response = array();

		$data = array(
			'deleted_at' => date('Y-m-d H:i:s'),
			'deleted_by' => $this->session->id,
			'is_deleted' => 1
		);

		$query = $this->db->where('event.id', $id)->update('event', $data);

		if($query) {
			$response = array(
				 'status' => 200
			);
		} else {
			$response = array(
				'status' => 400
			);
		}

		echo json_encode($response);
	}
}

