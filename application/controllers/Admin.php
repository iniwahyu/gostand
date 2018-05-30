<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$cek = $this->session->userdata('akses');
		if( $cek == 'Admin')
		{
			$this->load->view('admin/indexadmin');
		}
		else
		{
			redirect(base_url('/'));
		}
		
	}

	// SECTION ADMIN

	public function user()
	{
		$this->load->model('Admin_model');
		$user = $this->Admin_model->tampiluser('user');
		$user = array('user' => $user);
		$this->load->view('admin/user', $user);
	}

	public function lihatpenjual($id)
	{
		$where = array( 'id' => $id );
		$data = $this->Admin_model->GetWhere('penjual', $where);
		$data = array('data' => $data);
		$this->load->view('admin/lihatpenjual', $data);
	}

	public function tambahuser()
	{
		$this->load->view('admin/tambahuser');
	}

	public function edituser($id)
	{
		$this->load->model('Admin_model');
		$where = array(
			'id' => $id
		);
		$user = $this->Admin_model->GetWhere('user', $where);
		$data = array(
			'username' => $user[0]['username'],
			'nama' => $user[0]['nama'],
			'password' => $user[0]['password'] 
		);
		$this->load->view('admin/edituser', $data);
	}

	public function updateuser()
	{
		$username = $_POST['username'];
		$nama = $_POST['nama'];
		$password = $_POST['password'];

		$data = array(
			'nama' => $nama,
			'password' => $password
		);

		$where = array(
			'username' => $username,
		);

		$this->load->model('Admin_model');
		$query = $this->Admin_model->Update('user', $data, $where);
		if( $query > 0 )
		{
			redirect(base_url('admin/user'));
		}
		
	}

	public function deleteuser($id)
	{
		$id = array('id' => $id);
		$this->load->model('Admin_model');
		$this->Admin_model->Delete('user', $id);
		redirect(base_url('admin/user'), 'refresh');
	}

	// SECTION PENJUAL

	public function penjual()
	{
		$data = $this->Admin_model->tampilpenjual();
		$data = array('data' => $data);
		$this->load->view('admin/penjual', $data);
	}

	public function profilpenjual()
	{
		$this->load->view('admin/profilpenjual');
	}

	public function history()
	{
		$this->load->view('admin/history');
	}

	// SECTION PEMBELI

	public function pembeli()
	{
		$data = $this->Admin_model->tampilpembeli();
		$data = array('data' => $data);
		$this->load->view('admin/pembeli', $data);		
	}

	


	public function insert(){
		$this->load->model('mymodel');
		$data = array(
			'no_induk' => $this->input->post('nama'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat')
			 );
		$data = $this->mymodel->Insert('mahasiswa', $data);
		redirect(base_url(),'refresh');
	}

	


}
