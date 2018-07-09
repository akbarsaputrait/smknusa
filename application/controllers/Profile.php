<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata('logged_in')) {
            redirect(base_url('auth'));
        }
        $this->load->model('admin/m_user');
    }

    public function index()
    {
        $data = array(
            'info_user' => $this->m_user->where($this->session->id),
        );
        $this->load->view('admin/profile', $data);
    }

    public function update_users()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger notif">', '</div>');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('failed', validation_errors());
            redirect(base_url('profile'));
        } else {
            $config['encrypt_name'] = true;
            $config['upload_path'] = './uploads/img/photo_profile/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['remove_space'] = true;

            $this->load->library('upload');
            $this->upload->initialize($config);

            $id = $this->session->id;

            if (!$this->upload->do_upload("photo")) {

                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'name' => $this->input->post('name'),
                    'updated_at' => date("Y-m-d H:i:s"),
                    'updated_by' => $id,
                );

                $this->db->where('id', $id);
                $update = $this->db->update('users', $data);
                if ($update) {
                    $this->session->set_flashdata('success', '<div class="alert alert-success notif">Update Berhasil!</div>');
                    redirect(base_url('profile'));
                } else {
                    $this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Update Gagal!</div>');
                    redirect(base_url('profile'));
                }

            } else {
                $file = array('upload_data' => $this->upload->data());

                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'name' => $this->input->post('name'),
                    'photo' => $file['upload_data']['file_name'],
                    'updated_at' => date("Y-m-d H:i:s"),
                    'updated_by' => $id,
                );

                $this->db->where('id', $id);
                $update = $this->db->update('users', $data);
                if ($update) {
                    $this->session->set_flashdata('success', '<div class="alert alert-success notif">Update Berhasil!</div>');
                    redirect(base_url('profile'));
                } else {
                    $this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Update Gagal!</div>');
                    redirect(base_url('profile'));
                }
            }
        }
    }

    public function update_password()
    {
        $this->form_validation->set_rules('current_password', 'Password Sekarang', 'required|trim');
        $this->form_validation->set_rules('new_password', 'Password Baru', 'required|trim');
        $this->form_validation->set_rules('confirm_password', 'Password Konfirmasi', 'required|trim|matches[new_password]');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger notif">', '</div>');

        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('failed', validation_errors());
            redirect(base_url('profile'));
        } else {
            $id = $this->session->id;

            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');
            $confirm_password = $this->input->post('confirm_password');

            $data = $this->m_user->check_id($id);
            if ($data) {
                $valid_password = password_verify($current_password, $data->password);
                if ($valid_password) {
                    $data = array(
                        'password' => password_hash($new_password, PASSWORD_DEFAULT),
                    );
                    $this->db->where('id', $id);
                    $query = $this->db->update('users', $data);
                    if ($query) {
                        $this->session->set_flashdata('success', '<div class="alert alert-success notif">Update Berhasil!</div>');
                        redirect(base_url('profile'));
                    } else {
                        $this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Update Gagal!</div>');
                        redirect(base_url('profile'));
                    }
                } else {
                    $this->session->set_flashdata('failed', '<div class="alert alert-danger notif">Password yang anda masukan salah.</div>');
                    redirect(base_url('profile'));
                }
            }
        }
    }
}
