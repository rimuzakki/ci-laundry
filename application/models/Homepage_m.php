<?php
	
	class Homepage_m extends CI_Model {
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
		function count_rows() {
			return $this->db->count_all('tb_transactions');
		}
	}
?>