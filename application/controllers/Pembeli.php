<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli extends CI_Controller {

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

    	if($this->session->userdata('username'))
			{
			$this->load->model('home_model');
			$nama=$this->session->userdata('username');
			$where=array('nim'=>$nama);
			$cek=$this->home_model->login('pembeli',$where)->num_rows();
				if($cek==NULL){
					$this->load->view('pembeli/inputprofile');
					
				}
				if($cek!=NULL){
					
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

    public function profile()    		
	{
			$namadata=$this->session->userdata('username');
			$this->load->model('pembeli_model');
			$data=$this->pembeli_model->tampildata('pembeli',$namadata);
			$data=array('data'=> $data);
			$this->load->view('pembeli/myprofile',$data);	
	}
    
     public function editprofile()
	{
			$namadata=$this->session->userdata('username');
			$this->load->model('pembeli_model');
			$data=$this->pembeli_model->tampildata('pembeli',$namadata);
			$data=array('data'=> $data);
			$this->load->view('pembeli/editprofile',$data);
		
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

	function inputdataprofile()
	{
			$this->load->model('pembeli_model');
			$data = array
			(
				'nim' => $this->session->userdata('username'),
	        	'nama' => $this->input->post('namaorang'), // Yang kiri nama field di db
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

	public function updatedataprofile(){
			$this->load->model('pembeli_model');
			$data = array(				
	        	'nama' => $this->input->post('namaorang'), // Yang kiri nama field di db
				'email' => $this->input->post('email'), // yang kanan nama di form
				'nohape' => $this->input->post('nohape')
	        );
	        $user=$this->session->userdata('username');

	        $where=array(
	        	'nim'=>$user
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


}
