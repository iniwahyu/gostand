<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli extends CI_Controller {

	public function index()
    {      
    	if($this->session->userdata('username'))
		{
			$this->load->model('Home_model');
			$nama=$this->session->userdata('username');
			$where=array('username'=>$nama);
			$cek=$this->Home_model->login('pembeli',$where)->num_rows();
			
			if($cek==NULL){
				redirect(base_url('pembeli/firstprofile'));
			}else{
				$this->load->view('home/home');
			}
				
		}
		else
		{
			redirect('login');
		}		      
    }

    public function firstprofile()
    {
    		$this->load->view('pembeli/inputprofile');
	}
	
	function inputdataprofile()
	{
			$this->load->model('pembeli_model');
			$data = array
			(
				'username' => $this->session->userdata('username'),
				'email' => $this->input->post('email'), // yang kanan nama di form
				'nohape' => $this->input->post('nohape')
	        );

			$data = $this->pembeli_model->insertdata('pembeli', $data);

			if( $data )
			{
				redirect(base_url('pembeli/profile'));
			}
			else
			{
				$this->session->set_flashdata('error', 'GAGAL MENAMBAHAN');
				redirect(base_url('pembeli/editprofile'));
			}
	}

    public function profile()    		
	{
			$namadata=$this->session->userdata('username');
			$this->load->model('Pembeli_model');
			$data=$this->Pembeli_model->tampildata('pembeli',$namadata);
			if( $data == NULL ){
				redirect(base_url('pembeli/firstprofile'));
			}else {
			$data=array('data'=> $data);
			$this->load->view('pembeli/myprofile',$data);
			}			
	}
    
     public function editprofile()
	{
			$namadata=$this->session->userdata('username');
			$this->load->model('Pembeli_model');
			$data=$this->Pembeli_model->tampildata('pembeli',$namadata);
			$data=array('data'=> $data);
			$this->load->view('pembeli/editprofile',$data);
		
	}

	public function updatedataprofile(){
		$this->load->model('pembeli_model');
		$data = array(				
			'email' => $this->input->post('email'), // yang kanan nama di form
			'nohape' => $this->input->post('nohape')
		);
		$user=$this->session->userdata('username');

		$where=array(
			'username'=>$user
		);

		$data=$this->pembeli_model->edit($where,$data,'pembeli');

		if($data){
			$this->session->set_flashdata('succes', 'BERHASIL UPDATE');
			redirect(base_url('pembeli/profile'));
		}
		else{
			$this->session->set_flashdata('error', 'GAGAL UPDATE');
			redirect(base_url('pembeli/profile'));
		}
}

	 public function history()
	{
		$this->load->view('pembeli/riwayatpembelian');
	}

	public function keranjang()
	{
		$this->load->view('pembeli/keranjangbelanja');
	}

	public function default()
	{
		$this->load->view('pembeli/default');
	}

	


}
