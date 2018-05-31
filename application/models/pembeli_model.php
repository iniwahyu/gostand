<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

/**
 * 
 */
class Pembeli_model extends CI_Model
{

    
    public function insertprofile($table,$data)
    {
      $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
      return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }

    public function insertdata($table,$data)
    {
      $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
      return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
    
    public function tampilprofile($table,$username)
    {
          $this->db->select('*');
          $this->db->from('pembeli');
          $this->db->join('user', 'user.username = pembeli.username');
          $this->db->where('user.username', $username);
    
          $query = $this->db->get();
          return $query->result_array();
          
    }

    public function editprofile($where,$data,$table) /// Fungsi Untuk Edit data
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }
      
 

    public function inputkeranjang($napem,$nabar,$harga)
    {
        $hasil=$this->db->query("INSERT INTO keranjang (nama_pembeli,nama_produk, jumlah_produk)VALUES('$napem','$nabar','$harga')");
        return $hasil;
    }

    public function tampilkeranjang($table,$username)
    {
      $res=$this->db->get_where($table,array('nama_pembeli'=>$username));//memilih tabel
      return $res->result_array();//mengembalikan hasil
    }

    public function deletekeranjang($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }
	
}
	
?>