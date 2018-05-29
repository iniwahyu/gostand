<?php
	/**
	 * 
	 */
	class penjual extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Home_model');
			$this->load->model('penjual_model');
		}
		
		function index()
		{
			
			if($this->session->userdata('akses'))
			{
			$this->load->model('home_model');
			$nama=$this->session->userdata('username');
			$where=array('username'=>$nama);
			$cek=$this->home_model->login('penjual',$where)->num_rows();
				if($cek==NULL){
					$this->load->view('penjual/profil1');
					
				}
				else{
					
					$this->load->view('penjual/index');
				}
				
			}
			else
			{
				redirect('login');
			}		
		}
		
		function profil()
		{
			$username= $this->session->userdata('username');
			$data=$this->penjual_model->tampilpenjual($username);
			$data=array('data'=> $data);
			$this->load->view('penjual/profil',$data);
		}

		function profil1()
		{
			$this->load->view('penjual/profil1');
		}

		function editprofil()
		{
			$namadata=$this->session->userdata('username');
			$this->load->model('penjual_model');
			$data=$this->penjual_model->tampilproduk('penjual',$namadata);
			$data=array('data'=> $data);
			$this->load->view('penjual/editprofil',$data);
		}

		function produk()
		{
			$namadata=$this->session->userdata('username');
			$this->load->model('penjual_model');
			$data=$this->penjual_model->tampilproduk('produk',$namadata);
			$data=array('data'=> $data);
			//$this->load->view('terserah',$data);
			$this->load->view('penjual/produk',$data);
		}

		function tambahproduk()
		{
			$username=$this->session->userdata('username');
			$data=$this->penjual_model->takename('penjual',$username);
			$data=array('data'=> $data);
			$this->load->view('penjual/tambahproduk',$data);
		}
		
		function prosestambahproduk(){
			//$this->load->model('penjual_model');
			// $data = array(
	  //       	'nama_toko' => $this->session->userdata('username'),
			// 	'nama_produk' => $this->input->post('namaproduk'),
			// 	'harga' => $this->input->post('harga'),
			// 	'deskripsi' => $this->input->post('deskripsi')
	  //       );

			// $data = $this->penjual_model->Insertproduk('produk', $data);

			// if( $data )
			// {
			// 	$this->session->set_flashdata('success', 'berhasil MENAMBAHAN');
			// 	redirect(base_url('penjual/tambahproduk'));
			// }
			// else
			// {
			// 	$this->session->set_flashdata('error', 'GAGAL MENAMBAHAN');
			// 	redirect(base_url('penjual/tambahproduk'));
			// }

			$data = array();
		
			if($this->input->post('submit')) // Jika user menekan tombol Submit (Simpan) pada form
			{ 
			  // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
			  $upload = $this->penjual_model->upload();
			  
			  if($upload['result'] == "success") // Jika proses upload sukses
			  { 
				 // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
				$this->penjual_model->save($upload);
				
				redirect('penjual'); // Redirect kembali ke halaman awal / halaman view data
			  }else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			  }
			}
			
			$this->load->view('penjual/tambahproduk', $data);

		}
		function riwayatpemesanan()
		{
			$this->load->view('penjual/riwayatpemesanan');
		}

		public function inptdatadiri()
		{
			$this->load->model('penjual_model');
			$data = array(
	        	'username' => $this->session->userdata('username'),
				'nama_toko' => $this->input->post('namatoko'),
				'no_hp' => $this->input->post('nomorhp'),
				'email' => $this->input->post('email'),
				'lokasi' => $this->input->post('lokasi'),
				'deskripsi_penjual' => $this->input->post('deskripsi'),
	        	'jam_buka' => $this->input->post('jambuka'),
	        	'jam_tutup' => $this->input->post('jamtutup')
	        );

			$data = $this->penjual_model->Insertproduk('penjual', $data);

			if( $data )
			{
				redirect(base_url('penjual/index'));
			}
			else
			{
				$this->session->set_flashdata('error', 'GAGAL MENAMBAHAN');
				redirect(base_url('penjual/profil1'));
			}
		}

		public function hapusproduk($id)
		{
			$this->load->model('penjual_model');
			$where = array('id' => $id);
			$data=$this->penjual_model->hapus('produk',$where);
			if($data){
				$this->session->set_flashdata('success', 'BERHASIL MENGHAPUS');
				redirect(base_url('penjual/produk'));
			}
			else{
				$this->session->set_flashdata('error', 'GAGAL MENGHAPUS');
				redirect(base_url('penjual/produk'));
			}
		}

		public function updateprofil(){
			$this->load->model('penjual_model');
			$data = array(
				'nama_toko' => $this->input->post('namatoko'),
				'nama_pemilik' => $this->input->post('namapemilik'),
				'no_hp' => $this->input->post('nomorhp'),
				'email' => $this->input->post('email'),
				'lokasi' => $this->input->post('lokasi'),
				'deskripsi_penjual' => $this->input->post('deskripsi'),
	        	'jam_buka' => $this->input->post('jambuka'),
	        	'jam_tutup' => $this->input->post('jamtutup')
	        );
	        $user=$this->session->userdata('nama');

	        $where=array(
	        	'username'=>$user
	        );

	        $data=$this->penjual_model->edit($where,$data,'penjual');

	        if($data){
				$this->session->set_flashdata('succes', 'BERHASIL UPDATE');
				redirect(base_url('penjual/profil'));
			}
			else{
				$this->session->set_flashdata('error', 'GAGAL UPDATE');
				redirect(base_url('penjual/profil'));
			}
		}

		function formupdateproduk($id){
			$this->load->model('penjual_model');
			$data=$this->penjual_model->editproduk('produk',$id);
			$data=array('data'=> $data);
			$this->load->view('penjual/editproduk',$data);
		}

		function prosesupdateproduk($id){
			$this->load->model('penjual_model');
			$data = array(
				'nama_toko' => $this->input->post('namatoko'),
				'nama_produk' => $this->input->post('namaproduk'),
				'harga' => $this->input->post('harga'),
				'deskripsi' => $this->input->post('deskripsi')
	        );

	        $where=array(
	        	'id'=>$id
	        );

	        $this->penjual_model->edit($where,$data,'produk');
	        
				redirect(base_url('penjual/produk'));
		}

		public function gambar()
		{
			
		}
}
?>