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
		function registrasi()
		{
			$this->load->view('penjual/registrasi');
		}
		function profil()
		{
			$this->load->view('penjual/profil');
		}
	}
?>