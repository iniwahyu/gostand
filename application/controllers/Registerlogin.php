<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');


class Registerlogin extends CI_Controller
{
	
	
	function registrasi()
	{
		$this->load->view('home/registrasi');
	}
	
	public function prosesregister()
	{
		$this->load->model('home_model');
		$data = array(
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'password' => md5($this->input->post('password')),
			//'level' => $this->input->post('')
			'level' => 'Pembeli'
        );

		$data = $this->home_model->Insert('user', $data);

		if( $data )
		{
			$this->session->set_flashdata('success', 'Selamat! Anda Berhasil Melakukan Pendaftaran. Silahkan Login!');
			redirect('registrasi');
		}
		else
		{
			$this->session->set_flashdata('error', 'Mohon Maaf Pendaftaran Gagal. Silahkan Ulangi Kembali');
			redirect('registrasi');
		}
    	//redirect(base_url(),'refresh');
	}
	
	public function prosesregisterpenjual()
	{
		$this->load->model('Home_model');
		$data = array(
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'password' => md5($this->input->post('password')),
			'level' => 'Penjual'
		);

		$data = $this->Home_model->Insert('user', $data);

		if( $data )
		{
			$this->session->set_flashdata('success', 'BERHASIL DAFTAR');
			redirect('admin/tambahpenjual');
		}
		else
		{
			$this->session->set_flashdata('error', 'GAGAL MENDAFTAR');
			redirect('admin/tambahpenjual');
		}

	}

	function login()
	{
		$this->load->view('home/login');
	}

	public function proseslogin()
	{
		$this->load->model('home_model');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$where=array(
			'username'=> $username,
			'password'=> md5($password)
		);
		$cek=$this->home_model->login('user',$where)->num_rows();
		
		if($cek>0){
			$data_session=array(
				'username' => $username,				
				'status'=> 'login'
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('/'));
		}else{
			echo "Salah Password/Username";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}

	

?>