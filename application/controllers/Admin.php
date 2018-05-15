<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->library('form_validation');
		$this->load->view('admin/tambahpenjual');
	}

	public function simpanpenjual()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = array(
			'username' => $username,
			'password' => $password,
		);

		// INI VALIDASI	
		if( $username == null ){
			$this->session->set_flashdata('error', 'USERNAME SALAH');
			redirect('admin/penjual');
		}  

		if( $password == null ){
			$this->session->set_flashdata('error', 'SALAH');
			redirect('admin/penjual');
		}

		$query = $this->db->insert('hello', $data);
		
		if( $query )
		{
			$this->session->set_flashdata('success', 'BERHASIL MENAMBAHKAN');
			redirect('admin/penjual');
		}
		else
		{
			$this->session->set_flashdata('error', 'SALAH');
			redirect('admin/penjual');
		}
	}

	public function updatepenjual()
	{
		$this->load->view('admin/updatepenjual');
	}

	public function updatepenjuals($id)
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = array(
			'username' => $username,
			'password' => $password,
		);
		$this->db->replace('hello', $data);
	}


}
