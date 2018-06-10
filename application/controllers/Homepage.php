<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	public function __construct() {
		parent:: __construct();
		$this->load->model('Homepage_m');
	}

	public function index() {
		$this->load->view('index');
	}

	public function get_order_status() {
		$id_track = $this->input->post('id_track');
		$data =   $this->Homepage_m->get_records(array('id' => $id_track), null, null, null);
		foreach ($data->result() as $row) {
			echo $row->status;
		}
	}
}
