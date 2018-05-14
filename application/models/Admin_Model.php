<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class Admin_Model extends CI_Model{
    public function __construct() {
        parent::__construct();
 
        
        $this->load->database();
    }
    
    public function simpanpenjual($data)
    {
	    $this->db->insert('hello', $data);
    }

    public function GetPenjual()
    {
        // $query = $this->db->get('hello');
        // return $query->result_array();
		// foreach ($query->result() as $row)
		// {
        // 	echo $row->nama;
        // 	echo $row->alamat ."<br/>";
		// }
    }
}


?>