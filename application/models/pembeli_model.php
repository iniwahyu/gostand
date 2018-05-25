<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

/**
 * 
 */
class pembeli_model extends CI_Model
{
  public function insertdata($table,$data)
  {
    $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
    return $res; // Kode ini digunakan untuk mengembalikan hasil $res
  }
  
  public function tampilproduk($table,$username)
  {
		$res=$this->db->get_where($table,array('nama_toko'=>$username));//memilih tabel
		return $res->result_array();//mengembalikan hasil
  }
    
  public function hapus($table,$id)
  {
    $this->db->where($id);
		$res=$this->db->delete($table);
		return $res;
  }
  public function edit($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
	
}
	
?>