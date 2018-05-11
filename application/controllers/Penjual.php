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
		function login()
		{
			$this->load->view('penjual/login');
		}
	}
?>