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
		$this->load->view('admin/user');
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
