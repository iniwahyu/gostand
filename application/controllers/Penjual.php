<?php
	/**
	 * 
	 */
	class penjual extends CI_Controller
	{
		
		function index()
		{
			
			if($this->session->userdata('nama'))
			{
			$this->load->model('home_model');
			$nama=$this->session->userdata('nama');
			$where=array('username'=>$nama);
			$cek=$this->home_model->login('penjual',$where)->num_rows();
				if($cek>0){
					//$this->load->view('penjual/profil1');
					$this->load->view('penjual/index');
				}
				if($cek==NULL){
					$this->load->view('penjual/profil1');
					//$this->load->view('penjual/index');
				}
				
			}
			else
			{
				redirect('login');
			}		
		}
		
		function profil()
		{
			$namadata=$this->session->userdata('nama');
			$this->load->model('penjual_model');
			$data=$this->penjual_model->tampilproduk('penjual',$namadata);
			$data=array('data'=> $data);
			//$this->load->view('terserah',$data);
			$this->load->view('penjual/profil',$data);
		}
		function profil1()
		{
			$this->load->view('penjual/profil1');
		}
		function editprofil()
		{
			$namadata=$this->session->userdata('nama');
			$this->load->model('penjual_model');
			$data=$this->penjual_model->tampilproduk('penjual',$namadata);
			$data=array('data'=> $data);
			$this->load->view('penjual/editprofil',$data);
		}
		function produk()
		{
			$namadata=$this->session->userdata('nama');
			$this->load->model('penjual_model');
			$data=$this->penjual_model->tampilproduk('produk',$namadata);
			$data=array('data'=> $data);
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

		public function inptdatadiri()
		{
			$this->load->model('penjual_model');
			$data = array(
	        	'username' => $this->session->userdata('nama'),
				'nama_toko' => $this->input->post('namatoko'),
				'nama_pemilik' => $this->input->post('namapemilik'),
				'no_hp' => $this->input->post('nomorhp'),
				'email' => $this->input->post('namatoko'),
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
				//redirect(base_url('penjual/produk');
			}
			else{
				
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
	        $this->penjual_model->edit($where,$data,'penjual');
		}
}
?>