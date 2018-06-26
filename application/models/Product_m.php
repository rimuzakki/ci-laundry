<?php
  
  class Product_m extends CI_Model {
    function __construct() {
      parent:: __construct();
    }

    function get_records($criteria='', $order='', $limit='', $offset=0) {
      $this->db->select('*');

      $this->db->from('tb_products');

      if($criteria !='')
        $this->db->where($criteria);

      if($order !='')
        $this->db->order_by($order);

      if($limit !='')
        $this->db->limit($limit, $offset);

      $query = $this->db->get();

      return $query;
    }

    function insert($data) {
      $query = $this->db->insert('tb_products', $data);

      return $query;
    }

    function update_by_id($data, $id) {
      $this->db->where("id = '$id'");

      $query = $this->db->update('tb_products', $data);

      return $query;
    }

    function delete_by_id($id) {
      $query = $this->db->delete('tb_products', "id = '$id'");

      return $query;
    }

    function opt_Buku() {
      $this->db->select('id, judul, pengarang');
      $this->db->from('tb_products');
      $query = $this->db->get();

      foreach ($query->result() as $row) {
        $rowBuku[$row->id_buku] = $row->judul." - ".$row->pengarang;
      }
      return $rowBuku;
    }

    // fungsti hitung jml record
    function jml_product() {
      return $this->db->count_all('tb_products');
    }

    function code_otomatis(){
      $this->db->select('Right(tb_cart.id,4) as kode ',false);
      $this->db->order_by('id', 'desc');
      $this->db->limit(1);
      $query = $this->db->get('tb_cart');
      if($query->num_rows()<>0){
          $data = $query->row();
          $kode = intval($data->kode)+1;
      }else{
          $kode = 1;

      }
      $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
      $kodejadi  = "P".$kodemax;
      return $kodejadi;
    }

    function code_otomatis_transaksi(){
      $this->db->select('Right(tb_transactions.id,4) as kode ',false);
      $this->db->order_by('id', 'desc');
      $this->db->limit(1);
      $query = $this->db->get('tb_transactions');
      if($query->num_rows()<>0){
          $data = $query->row();
          $kode = intval($data->kode)+1;
      }else{
          $kode = 1;

      }
      $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
      $kodejadi  = "T".$kodemax;
      return $kodejadi;
    }

    function code_otomatis_products(){
      $this->db->select('Right(tb_products.id,4) as kode ',false);
      $this->db->order_by('id', 'desc');
      $this->db->limit(1);
      $query = $this->db->get('tb_products');
      if($query->num_rows()<>0){
          $data = $query->row();
          $kode = intval($data->kode)+1;
      }else{
          $kode = 1;

      }
      $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
      $kodejadi  = "B".$kodemax;
      return $kodejadi;
    }

    function insert_checkout($data) {
			$query = $this->db->insert('tb_cart', $data);

			return $query;
    }
    
    public function upload(){
      $config['upload_path'] = $config['img'].'product/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size']  = '2048';
      $config['remove_space'] = TRUE;
    
      $this->load->library('upload', $config); // Load konfigurasi uploadnya
      if($this->upload->do_upload('gambar_produk')){ // Lakukan upload dan Cek jika proses upload berhasil
        // Jika berhasil :
        $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
        return $return;
      }else{
        // Jika gagal :
        $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
        return $return;
      }
    }
    
    // Fungsi untuk menyimpan data ke database
    public function save_gambar($upload){
      $data = array(
        //'deskripsi'=>$this->input->post('input_deskripsi'),
        'gambar_produk' => $upload['file']['file_name'],
        //'ukuran_file' => $upload['file']['file_size'],
        //'tipe_file' => $upload['file']['file_type']
      );
      
      $this->db->insert('tb_products', $data);
    }

  }
?>