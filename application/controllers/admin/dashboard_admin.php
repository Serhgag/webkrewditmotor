<?php

class Dashboard_admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata('pesam', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 			 Anda belum login
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
			redirect('auth/login');
		}
	}
	public function index()
	{
		//$data['user'] = $this->model_user->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates_admin/footer');
	}

	public function data_user()
	{
		$data['user'] = $this->model_user->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/datauser', $data);
		$this->load->view('templates_admin/footer');
	}
}
