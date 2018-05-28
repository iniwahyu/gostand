<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

/**
 * 
 */
class penjual_model extends CI_Model
{
  public function Insertproduk($table,$data)
  {
    $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
    return $res; // Kode ini digunakan untuk mengembalikan hasil $res
  }

  public function upload()
  {
    $config['upload_path']   = './asset/img/produk';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = '2048';
        $config['max_width']     = 200;
      $config['max_height']    = 200;
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

  public function save($upload)
    {
        $data = array(
        'nama_toko' => $this->input->post('username'),
        'nama_produk' => $this->input->post('namaproduk'),
        'harga' => $this->input->post('harga'),
        'deskripsi' => $this->input->post('deskripsi'),
        'nama_file' => $upload['file']['file_name'],
        'tipe_file' => $upload['file']['file_type'],
        'ukuran' => $upload['file']['file_size']
        
        );
        
        $this->db->insert('produk', $data);
    }


  public function tampilproduk($table,$username)
  {
		$res=$this->db->get_where($table,array('nama_toko'=>$username));//memilih tabel
		return $res->result_array();//mengembalikan hasil
  }
   public function takename($table,$username)
  {
    $res=$this->db->get_where($table,array('username'=>$username));//memilih tabel
    return $res->result_array();//mengembalikan hasil
  }

  public function tampilpenjual($table)
  {
    $res = $this->db->get('penjual');
    return $res->result_array();
  }

  public function editproduk($table,$id)
  {
    $res=$this->db->get_where($table,array('id'=>$id));//memilih tabel
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
  public function prosesupdateproduk()
  {

  }
	
}
	
?>