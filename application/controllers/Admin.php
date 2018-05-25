<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        // memuat model
        $this->load->model('Admin_Model');
        $this->model = $this->Admin_Model;
 
        $this->load->database();
        // memuat helper url
        $this->load->helper('url'); // sebagai redirect
	}
	
	public function index()
	{
		$this->load->view('admin/indexadmin');
	}

	public function user()
	{
		$this->load->model('Admin_model');
		$user = $this->Admin_model->tampiluser('user');
		$user = array('user' => $user);
		$this->load->view('admin/user', $user);
	}

	public function deleteuser($id)
	{
		$id = array('id' => $id);
		$this->load->model('Admin_model');
		$this->Admin_model->Delete('user', $id);
		redirect('admin/user');
		// $noinduk = array('no_induk' => $noinduk);
		// $this->load->model('mymodel');
		// $this->mymodel->Delete('mahasiswa', $noinduk);
		// redirect(base_url(),'refresh');
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

	public function tambahpenjual()
	{
		$this->load->view('admin/tambahpenjual');
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
