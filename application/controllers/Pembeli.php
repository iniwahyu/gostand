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
        
        $this->load->view('home/home');
    }

    public function profile()
	{
		$this->load->view('pembeli/myprofile');
	}
    
     public function editprofile()
	{
		$this->load->view('pembeli/editprofile');
	}

	 public function riwayat()
	{
		$this->load->view('pembeli/riwayat');
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
