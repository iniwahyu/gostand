<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

/**
 * 
 */
class Home_model extends CI_Model
{

    
    
    public function Insert($table,$data)
    {
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
    public function login($table,$where)
    {
    	return $this->db->get_where($table,$where);
    }

    public function cek2($username, $password)
    {
        $res = $this->db->get_where('user', array(
            'username' => $username,
            'password' => md5($password),
        ));
        return $res;
    }
    
    // Fungsi untuk menampilkan semua data gambar
    public function gambar()
    {
        return $this->db->get('gambar')->result();
    }
  
  // Fungsi untuk melakukan proses upload file
    public function upload()
    {
        $config['upload_path']   = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']	     = '2048';
        $config['max_width']     = 1366;
	    $config['max_height']    = 768;
        $config['remove_space'] = TRUE;
    
        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('input_gambar')) // Lakukan upload dan Cek jika proses upload berhasil
        { 
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }
        else
        {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
  
    // Fungsi untuk menyimpan data ke database
    public function save($upload)
    {
        $data = array(
        'deskripsi'=>$this->input->post('input_deskripsi'), // Podo kan carane dewe?
        'nama_file' => $upload['file']['file_name'],
        'ukuran_file' => $upload['file']['file_size'],
        'tipe_file' => $upload['file']['file_type']
        );
        
        $this->db->insert('gambar', $data);
    }

    //Pagination
    function data($number,$offset)
    {
        return $query = $this->db->get('user',$number,$offset)->result();       
    }
 
    function jumlah_data(){
        return $this->db->get('user')->num_rows();
    }

    public function tampilminuman($table)
    {
        $res = $this->db->get('produk');
        return $res->result_array();
    }
    // Tutup Pagination

    // Fungsi Baru
    // function tampilproduk($table)
    // {
    //     $query = $this->db->get($table);
    //     return $query->result_array();
    // }
    // Tutup

    public function GetWhere($table){
        $res=$this->db->get_where($table,array('kategori'=>'Minuman'));//memilih tabel
		return $res->result_array();//mengembalikan hasil
    }


    
}


	
?>