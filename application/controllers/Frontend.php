<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function blog()
    {
        $data['title'] = "Judul Blog";

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/content/blog');
        $this->load->view('frontend/footer');
    }

    public function pengumuman()
    {
        $data['title'] = "Judul Pengumuman";

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/content/pengumuman');
        $this->load->view('frontend/footer');
    }

    public function agenda()
    {
        $data['title'] = "Agenda";

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/content/agenda');
        $this->load->view('frontend/footer');
    }

    public function get_all_event()
    {
        header('Content-Type: application/json');

        $this->load->model(array('admin/m_agenda'));

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
}
