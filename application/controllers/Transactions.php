<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions extends CI_Controller {

  var $data = array();

  function __construct() {
    parent:: __construct();

    $this->load->helper('form');
    $this->load->helper('url');

    $this->load->model('Transactions_m');
    // load lib form validation
    $this->load->library('form_validation');

    // load lib pagination
    $this->load->library('pagination');

  }

  public function index() {
    // $this->add_new();
    $this->data['query'] = $this->Product_m->get_records(null, null, $config["per_page"], $page);
    $this->load->view('product_v', $this->data);
  }

  function add_new() {
    $this->data['is_update'] = 0;
    $this->load->view('product_form_v', $this->data);
  }

  function save() {
    $data['id']    = $this->input->post('trx_id', true);
    $data['nama_lengkap']    = $this->input->post('txt_nama', true);
    $data['email']   = $this->input->post('txt_email', true);
    $data['nohp']   = $this->input->post('txt_nohp', true);
    $data['alamat']   = $this->input->post('txt_alamat', true);
    $data['sub_total']   = $this->input->post('txt_sub_total', true);
    $data['ongkir']   = $this->input->post('txt_ongkir', true);
    $data['grand_total']   = $this->input->post('txt_grand_total', true);
    $data['cart_id']   = $this->input->post('txt_cart_id', true);

    $data['query'] = $this->Transactions_m->insert($data);

    $data['query_trx'] = $this->Transactions_m->get_transactions($data['id']);

    $data['query_trx_items'] = $this->Transactions_m->get_trx_items($data['id']);

    $data['query_product'] = $this->Transactions_m->get_product();

    $this->load->view('transactions_v', $data);
  }

  function edit($id) {
    $this->data['query'] = $this->Product_m->get_records("ID_Product = '$id'");

    $this->data['is_update'] = 1;

    $this->load->view('product_form_v', $this->data);
  }

  function delete($id) {
    if($this->Product_m->delete_by_id($id)) {
      redirect('product');
    }
  }

  function check() {
    $this->form_validation->set_rules('id', 'ID', 'trim');
    $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim');
    $this->form_validation->set_rules('nohp', 'Nomor Hp', 'trim|required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

    $this->form_validation->set_message('required', 'Data {field} harus diisi.');
    $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div></br>');

    if ($this->form_validation->run()==true) {
      $this->save($this->input->post('is_update', true));
    } else {
      $this->data['is_update'] = $this->input->post('is_update', true);
      $this->load->view('checkout_v', $this->data);
    }
  }
  
}
