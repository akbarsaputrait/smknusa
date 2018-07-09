<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/m_auth');
        if ($this->session->has_userdata('logged_in')) {
            redirect(base_url('dashboard'));
        }
    }

    public function index()
    {
        $this->load->view('admin/auth');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('failed', validation_errors());
            redirect(base_url('auth'));
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = $this->m_auth->is_valid('users', $username);
            if ($data) {
                if (password_verify($password, $data->password)) {

                    $update_data_db = array(
                        'is_login' => 1,
                        'last_login' => date("Y-m-d H:i:s"),
                        'ip_address' => $this->input->ip_address(),
                    );

                    $this->db->where('id', $data->id);
                    $update = $this->db->update('users', $update_data_db);

                    if ($update) {

                        $userdata = array(
                            'id' => $data->id,
                            'logged_in' => true,
                        );

                        $this->session->set_userdata($userdata);
                        redirect(base_url('dashboard'));
                    } else {
                        $this->load->view('admin/auth');
                    }
                } else {
                    $this->session->set_flashdata('failed', 'Password anda salah.');
                    redirect(base_url('auth'));
                }
            } else {
                $this->session->set_flashdata('failed', 'Username atau Email anda salah.');
                redirect(base_url('auth'));
            }
        }
    }

}
