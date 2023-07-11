<?php

class Kategori extends CI_Controller
{
    public function metik()
    {
        $data['metik'] = $this->model_kategori->data_metik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('metik', $data);
        $this->load->view('templates/footer');
    }

    public function sport()
    {
        $data['sport'] = $this->model_kategori->data_sport()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sport', $data);
        $this->load->view('templates/footer');
    }
    public function bebek()
    {
        $data['bebek'] = $this->model_kategori->data_bebek()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bebek', $data);
        $this->load->view('templates/footer');
    }
}
