<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

/**
 * 
 */
class Pembeli_model extends CI_Model
{
    public function insertdata($table,$data)
    {
      $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
      return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
    
    public function tampildata($table,$username)
    {
      $res=$this->db->get_where($table,array('username'=>$username));//memilih tabel
      return $res->result_array();//mengembalikan hasil
    }

    public function edit($where,$data,$table) /// Fungsi Untuk Edit data
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }
      
    public function hapus($table,$id)
    {
      $this->db->where($id);
      $res=$this->db->delete($table);
      return $res;
    }
  
	
}
	
?>