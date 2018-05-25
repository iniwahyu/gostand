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
        $config['max_width']     = 300;
	    $config['max_height']    = 250;
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
        'deskripsi'=>$this->input->post('input_deskripsi'),
        'nama_file' => $upload['file']['file_name'],
        'ukuran_file' => $upload['file']['file_size'],
        'tipe_file' => $upload['file']['file_type']
        );
        
        $this->db->insert('gambar', $data);
    }
    
}
	
?>