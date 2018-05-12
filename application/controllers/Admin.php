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
	public function index()
	{
		$this->load->view('admin/index');
	}

	public function penjual()
	{
		$this->load->view('admin/penjual');
	}

	public function pembeli()
	{
		$this->load->view('admin/pembeli');
	}

	// public function tambah_data_barang () {

	// 	if(isset($_POST[‘submit’])){
		
	// 	$nama_barang = $this->input->post(‘nama_barang’);
		
	// 	$stok = $this->input->post(‘stok’);
		
	// 	$status = $this->input->post(‘status’);
		
	// 	$data=array(‘nama_barang’ => $nama_barang,
		
	// 	‘stok’ =>$stok,
		
	// 	‘status’=>$status
		
	// 	);
		
	// 	$this->model_barang->input_data($data);
		
	// 	redirect(‘barang’);
		
	// 	}else{
		
	// 	$this->load->view(‘design/header’);
		
	// 	$this->load->view(‘barang/input_barang’);
		
	// 	$this->load->view(‘design/footer’);
		
	// 	}
		
	// 	}
}
