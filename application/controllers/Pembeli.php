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
			
			if($cek==NULL)
			{
				redirect(base_url('pembeli/firstprofile'));
			}

			else
			{
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

			$data = $this->pembeli_model->insertprofile('pembeli', $data);

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
			$data=$this->Pembeli_model->tampilprofile('pembeli',$namadata);
			
			if( $data == NULL )
			{
				redirect(base_url('pembeli/firstprofile'));
			}
			
			else 
			{
				$data=array('data'=> $data);
				$this->load->view('pembeli/myprofile',$data);
			}			
	}
    
     public function editprofile()
	{
			$namadata=$this->session->userdata('username');
			$this->load->model('Pembeli_model');
			$data=$this->Pembeli_model->tampilprofile('pembeli',$namadata);
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

		$data=$this->pembeli_model->editprofile($where,$data,'pembeli');

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
			$namadata=$this->session->userdata('username');
			$this->load->model('pembeli_model');
			$data=$this->pembeli_model->tampilkeranjang('keranjang',$namadata);
			$data=array('data'=> $data);
			$this->load->view('pembeli/keranjangbelanja',$data);
	}

	public function default()
	{
		$this->load->view('pembeli/default');
	}

	public function inputkeranjang()
	{

		$this->load->model('pembeli_model');
		$napem=$this->input->post('napem');
        $nabar=$this->input->post('nabar');
        $harga=$this->input->post('harga');
        $data=$this->pembeli_model->inputkeranjang($napem,$nabar,$harga);
        echo json_encode($data);
    }

    public function deletekeranjang($id)
	{
		$id = array('id' => $id);
		$this->load->model('pembeli_model');
		$this->pembeli_model->deletekeranjang('keranjang', $id);
		redirect(base_url('pembeli/keranjang'));
	}

	


}
