<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

/**
 * 
 */
class penjual_model extends CI_Model
{
	public function Insertproduk($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
    public function tampilproduk($table,$username){
		$res=$this->db->get_where($table,array('nama_toko'=>$username));//memilih tabel
		return $res->result_array();//mengembalikan hasil
    }
	
}
	
?>