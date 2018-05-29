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

		// pagingnation
		// $this->load->database();
		// $jumlah_data = $this->Home_model->jumlah_data();
		// $this->load->library('pagination');
		// $config['base_url'] = base_url().'makanan';
		// $config['total_rows'] = $jumlah_data;
		// $config['per_page'] = 3;
		// $from = $this->uri->segment(3);
		// $this->pagination->initialize($config);		
		// $data['produk'] = $this->m_data->data($config['per_page'],$from);
		// $this->load->view('makanan',$data);
		// tutup pagination
	}

	// public function minuman()
	// {
	// 	$minuman = $this->Home_model->tampilproduk('produk');
	// 	$produk = array('produk' => $produk);
	// 	$this->load->view('home/minuman', $produk);		
	// }

	public function minuman()
	{
		$where = array( 'kategori' => 'Minuman' );
		$minuman = $this->Home_model->GetWhere('produk', $where);
		$data = array(
			'nama_file' => $minuman[0]['nama_file'],
			'nama_produk' => $minuman[0]['nama_produk'],
			'harga' => $minuman[0]['harga'],
			'nama_toko' => $minuman[0]['nama_toko'],
		);
		$this->load->view('home/minuman', $data);
	}

	public function toko()
	{
		$this->load->view('home/toko');
	}

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

	public function simpan_barang(){
        $napem=$this->input->post('kobar');
        $nabar=$this->input->post('nabar');
        $harga=$this->input->post('harga');
        $data=$this->Home_model->simpan_barang($kobar,$nabar,$harga);
        echo json_encode($data);
    }
 
    //End Simulator

	
}
