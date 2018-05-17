<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

/**
 * 
 */
class Home_model extends CI_Model
{
	public function Insert($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
    public function login($table,$where){
    	return $this->db->get_where($table,$where);
    }
	
}
	
?>