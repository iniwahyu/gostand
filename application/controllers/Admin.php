<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	public function user()
	{
		$this->load->model('Admin_model');
		$user = $this->Admin_model->tampiluser('user');
		$user = array('user' => $user);
		$this->load->view('admin/user', $user);
	}

	public function viewuser($id)
	{
		$this->load->model('Admin_model');
		$where = array( 'id' => $id );
		$user = $this->Admin_model->GetWhere('user', $where);
		$data = array(
			'username' => $user[0]['username'],
		);
		$this->load->view('admin/viewuser', $data);
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
		redirect(base_url('admin/user'));
	}

	public function penjual()
	{
		$this->load->view('admin/penjual');
	}

	public function profilpenjual()
	{
		$this->load->view('admin/profilpenjual');
	}

	public function history()
	{
		$this->load->view('admin/history');
	}

	public function pembeli()
	{
		$this->load->view('admin/pembeli');		
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
