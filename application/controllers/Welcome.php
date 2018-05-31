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
		$data = $this->Home_model->GetWhereMakanan('produk');
		$data = array('data' => $data );
		$this->load->view('home/makanan', $data);
	}
	public function lihatmakanan($id)
	{
		$where = array('id' => $id );
		$data = $this->Home_model->GetWhere('produk', $where);
		$data = array('data' => $data);
		$this->load->view('home/lihatmakanan', $data);
	}

	public function minuman()
	{
		$data = $this->Home_model->GetWhereMinuman('produk');
		$data = array('data' => $data );
		$this->load->view('home/minuman', $data);
	}

	public function lihatminuman($id)
	{
		$where = array('id' => $id );
		$data = $this->Home_model->GetWhere('produk', $where);
		$data = array('data' => $data);
		$this->load->view('home/lihatminuman', $data);
	}

	public function toko()
	{
		$data = $this->Home_model->GetWhereToko('penjual');
		$data = array('data' => $data );
		$this->load->view('home/toko', $data);
	}

	// public function produkminuman()
	// {
	// 	$data = $this->Home_model->GetWhereMinuman('produk');
	// 	$data = array('data' => $data );
	// 	$this->load->view('home/produk', $data);
	// }

	public function produktoko()
	{
		$this->load->view('home/produktoko');
	}

	public function error()
	{
		$this->output->set_status_header('404');

        // Make sure you actually have some view file named 404.php
        $this->load->view('error');
	}

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

	//Search Engine
	
	// Tutup Search Engine

	public function formgambar()
	{
		$this->load->view('home/formgambar');
	}

	// Simulator Bugi
	public function minuman2()
	{

		$this->load->model('Home_model');
		$produk = $this->Home_model->tampilminuman('produk');
		$produk = array('produk' => $produk);
		$this->load->view('home/minuman2', $produk);		
	}


    //End Simulator

	
}
