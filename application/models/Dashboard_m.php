<?php
  
  class Dashboard_m extends CI_Model {
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

    // fungsti hitung jml record
    function jml_data() {
      return $this->db->count_all('tb_transactions');
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

    function insert_checkout($data) {
        $query = $this->db->insert('tb_cart', $data);

        return $query;
    }

    function update_batch($id, $status) {
        $updateArray = array();

        for($x = 0; $x < sizeof($id); $x++){

            $updateArray[] = array(
                'id'=>$id[$x],
                'status' => $status[$x]
            );
        }      
        $query = $this->db->update_batch('tb_transactions',$updateArray, 'id');
        echo $this->db->last_query();
        echo $id;
        return $query;
    }

  }
?>