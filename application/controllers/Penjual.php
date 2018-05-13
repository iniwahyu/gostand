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
		function editprofil()
		{
			$this->load->view('penjual/editprofil');
		}
		function produk()
		{
			$this->load->view('penjual/produk');
		}
		function tambahproduk()
		{
			$this->load->view('penjual/tambahproduk');
		}
		function riwayatpemesanan()
		{
			$this->load->view('penjual/riwayatpemesanan');
		}
	}
?>