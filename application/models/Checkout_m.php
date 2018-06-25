<?php
  
  class Checkout_m extends CI_Model {
    function __construct() {
      parent:: __construct();
    }

    function get_records($criteria='', $order='', $limit='', $offset=0) {
      $this->db->select('*');

      $this->db->from('tb_transactions');

      if($criteria !='')
        $this->db->where($criteria);

      if($order !='')
        $this->db->order_by($order);

      if($limit !='')
        $this->db->limit($limit, $offset);

      $query = $this->db->get();

      return $query;
    }

    function get_records_cart($criteria='', $order='', $limit='', $offset=0) {
        $this->db->select('*');
  
        $this->db->from('tb_cart');
  
        if($criteria !='')
          $this->db->where($criteria);
  
        if($order !='')
          $this->db->order_by($order);
  
        if($limit !='')
          $this->db->limit($limit, $offset);
  
        $query = $this->db->get();
  
        return $query;
    }

    function get_records_product($criteria='', $order='', $limit='', $offset=0) {
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
      $query = $this->db->insert('tb_transactions', $data);

      return $query;
    }

    function update_by_id($data, $id) {
      $this->db->where("id = '$id'");

      $query = $this->db->update('tb_transactions', $data);

      return $query;
    }

    function delete_by_id($id) {
      $query = $this->db->delete('tb_transactions', "id = '$id'");

      return $query;
    }

    function opt_Buku() {
      $this->db->select('id, judul, pengarang');
      $this->db->from('tb_transactions');
      $query = $this->db->get();

      foreach ($query->result() as $row) {
        $rowBuku[$row->id_buku] = $row->judul." - ".$row->pengarang;
      }
      return $rowBuku;
    }

    // fungsti hitung jml record
    function jml_product() {
      return $this->db->count_all('tb_transactions');
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

    function insert_cart($data) {
      
        $query = $this->db->insert('tb_cart', $data);

        return $query;
    }

    function decode_cart($id) {
      $query = $this->get_records_cart("id = '$id'");
      $result = $query->row_array();
      $items = json_decode($result['items'],true);
      return $items;
    }

    function get_product() {
      $query = $this->get_records_product();
      $result = $query->result_array();

      return $result;
    }

  }
?>