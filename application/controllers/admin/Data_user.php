<?php

class Data_user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Model_user');

		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
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
		$data['user'] = $this->Model_user->tampil_user()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_user', $data);
		$this->load->view('templates_admin/footer');
	}

  public function tambah_aksi()
  {
    //var_dump($this->input->post());
    $nama = $this->input->post('nama');
    $usn 	= $this->input->post('username');
    $pw 	= $this->input->post('password');
    $role = $this->input->post('role_id');
    $data = [
      'nama'     => $nama,
      'username' => $usn,
      'password' => $pw,
      'role_id' => $role
    ];
    $this->Model_user->tambah_user($data, 'tbl_user');
    redirect('admin/data_user/index');
  }

	public function edit($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->Model_user->edit_user($where, 'tbl_user')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_user', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id		= $this->input->post('id');
		$nama = $this->input->post('nama');
		$usn 	= $this->input->post('username');
		$pw 	= $this->input->post('password');
		$role = $this->input->post('role_id');

		$data = array(
			'nama'  	 => $nama,
			'username' => $usn,
			'password' => $pw,
			'role_id'	 => $role
		);

		$where = array(
			'id' => $id
		);
		$this->Model_user->update_user($where, $data, 'tbl_user');
		redirect('admin/data_user/index');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->Model_user->hapus_user($where, 'tbl_user');
		redirect('admin/data_user/index');
	}
}
