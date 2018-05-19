<?php
	/**
	 * 
	 */
	class penjual extends CI_Controller
	{
		
		function index()
		{
			# code...
			$this->load->view('penjual/index');
		}
		
		function profil()
		{
			$this->load->view('penjual/profil');
		}
		function editprofil()
		{
			$this->load->view('penjual/editprofil');
		}
		function produk()
		{
			$namadata=$this->session->userdata('nama');
			$this->load->model('penjual_model');
			$data=$this->penjual_model->tampilproduk('produk',$namadata);
			$data=array('data'=>$data);
			//$this->load->view('terserah',$data);
			$this->load->view('penjual/produk',$data);
		}
		function tambahproduk()
		{
			$this->load->view('penjual/tambahproduk');
		}
		function riwayatpemesanan()
		{
			$this->load->view('penjual/riwayatpemesanan');
		}

		public function prosestambahproduk()
		{
			$this->load->model('penjual_model');
			$data = array(
	        'nama_toko' => $this->input->post('namatoko'),
			'nama_produk' => $this->input->post('namaproduk'),
	        //'gambar' => $this->input->post('nama'),
	        'harga' => $this->input->post('harga'),
	        'deskripsi' => $this->input->post('deskripsi')
	         );

			$data = $this->penjual_model->Insertproduk('produk', $data);

			if( $data )
			{
				$this->session->set_flashdata('success', 'BERHASIL DITAMBAHKAN');
				redirect(base_url('penjual/tambahproduk'));
			}
			else
			{
				$this->session->set_flashdata('error', 'GAGAL MENAMBAHAN');
				redirect(base_url('penjual/tambahproduk'));
			}
		}
		/*public function tampilproduk()
		{
			$this->load->model('penjual_model');
			$data=$this->mymodel->tampilproduk('produk','');
		}*/
	}
?>