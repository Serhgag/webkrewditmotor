<?php

class Userinvoice extends CI_Controller
{

	public function index()
	{
		//$this->load->model('model_invoice');
		$data['userinvoice'] = $this->model_userinvoice->tampil_datauser();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('userinvoice', $data);
		$this->load->view('templates/footer');
	}
}
