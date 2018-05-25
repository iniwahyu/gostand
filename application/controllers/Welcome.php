<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}
	
	public function index()
	{
		$this->load->view('home/home');
	}

	public function produk()
	{
		$this->load->view('home/produk');
	}

	public function makanan()
	{
		$this->load->view('home/makanan');
	}

	public function minuman()
	{
		$this->load->view('home/minuman');
	}

	public function toko()
	{
		$this->load->view('home/toko');
	}

	public function coba()
	{
		$this->load->view('home/coba');
	}




	// public function gambar()
	// {
	// 	$this->load->view('home/gambar');
	// }

	public function gambar()
	{
		$data['gambar'] = $this->Home_model->gambar();
		$this->load->view('home/gambar', $data);
	}
	  
	public function tambah()
	{
		$data = array();
		
		if($this->input->post('submit')) // Jika user menekan tombol Submit (Simpan) pada form
		{ 
		  // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
		  $upload = $this->Home_model->upload();
		  
		  if($upload['result'] == "success") // Jika proses upload sukses
		  { 
			 // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
			$this->Home_model->save($upload);
			
			redirect('welcome/gambar'); // Redirect kembali ke halaman awal / halaman view data
		  }else{ // Jika proses upload gagal
			$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
		  }
		}
		
		$this->load->view('home/formgambar', $data);
	}
	public function formgambar()
	{
		$this->load->view('home/formgambar');
	}

	
}
