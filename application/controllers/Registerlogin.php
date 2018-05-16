<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

/**
 * 
 */
class Registerlogin extends CI_Controller
{
	public function register()
	{
		$this->load->model('home_model');
		$data = array(
        'nim' => $this->input->post('nim'),
        'nama' => $this->input->post('nama'),
        'password' => $this->input->post('password'),
        //'level' => $this->input->post('')
         );

		$data = $this->home_model->Insert('user', $data);
    	//redirect(base_url(),'refresh');
	}
}

	

?>