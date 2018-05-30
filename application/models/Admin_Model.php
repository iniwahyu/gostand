<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class Admin_Model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function Insert($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
 
    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }
 
    public function Delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }

    public function GetWhere($table, $data){
        $res=$this->db->get_where($table, $data);
        return $res->result_array();
    }

    public function tampiluser($table)
    {
        $res = $this->db->get('user');
        return $res->result_array();
    }

    public function userid($table, $id)
    {
        $res = $this->db->get_where($table, $data);
    }

    // SECTION ADMIN


    // SECTION PENJUAL
    public function tampilpenjual($table)
    {
        //$query = $this->db->get('user');
        // $this->db->select('*');
        // $this->db->from('penjual');
        // $this->db->join('user', 'user.username = penjual.username');
        // $this->db->where('user.username', $where);

        $query = $this->db->get($table);
        return $query->result_array();
    }

    // SECTION PEMBELI
    public function tampilpembeli($table)
    {
        $query = $this->db->get($table);
        return $query->result_array();
    }

}


?>