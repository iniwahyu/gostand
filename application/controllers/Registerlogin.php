<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');


class Registerlogin extends CI_Controller
{
	public function register()
	{
		$this->load->model('home_model');
		$data = array(
        'nim' => $this->input->post('nim'),
        'nama' => $this->input->post('nama'),
        'password' => md5($this->input->post('password')),
        //'level' => $this->input->post('')
        'level' => 'Pembeli'
         );

		$data = $this->home_model->Insert('user', $data);
		return "berhasil";
    	//redirect(base_url(),'refresh');
	}
	public function login()
	{
		$this->load->model('home_model');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$where=array(
			'nim'=>$username,
			'password'=>md5($password)
		);
		$cek=$this->home_model->login('user',$where)->num_rows();
		if($cek>0){
			$data_session=array(
				'nama'=>$username,
				'status'=>"login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('penjual/index'));
		}else{
			echo "Salah Anjing";
		}
	}
}

	

?>