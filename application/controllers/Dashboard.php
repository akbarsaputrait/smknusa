<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata('logged_in')) {
            redirect(base_url('auth'));
        }
        $this->load->model(array('admin/m_user', 'admin/m_dashboard'));
    }

    public function index()
    {

        $data = array(
            'info_user' => $this->m_user->where($this->session->id),
			'total_blog' => $this->m_dashboard->count_post(),
			'news_blog' => $this->m_dashboard->new_post("blog"),
			'news_pengumuman' => $this->m_dashboard->new_post("pengumuman"),
        );
        $this->load->view('admin/dashboard', $data);
    }

    public function logout()
    {
        $update_data_db = array(
            'is_login' => 0,
        );

        $this->db->where('id', $this->session->id);
        $update = $this->db->update('users', $update_data_db);

        if ($update) {

            session_destroy();
            redirect(base_url('auth'));
        } else {
            $this->load->view('admin/dashboard');
        }
    }
}
