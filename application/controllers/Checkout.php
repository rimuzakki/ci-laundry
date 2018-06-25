<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

  var $data = array();

  function __construct() {
    parent:: __construct();

    $this->load->helper('form');
    $this->load->helper('url');

    $this->load->model('Checkout_m');
    // load lib form validation
    $this->load->library('form_validation');

    // load lib pagination
    $this->load->library('pagination');

  }

  public function index() {
    // $this->add_new();
    //$this->data['kodeunik'] = $this->Product_m->code_otomatis();
    $this->data['kodeunik_transaksi'] = $this->Checkout_m->code_otomatis_transaksi();
    //$this->data['query'] = $this->Product_m->get_records(null, null, $config["per_page"], $page);
    $this->load->view('checkout_v', $this->data);
  }

  function checkout() {
    $data['id']    = $this->input->post('cart_id', true);
    //$id = $data['id'];
    // Get the results as JSON string
    $data['items'] = filter_input(INPUT_POST, 'cart_list');
    // Convert JSON to array
    $product_list_array = json_decode($data['items']);

    $result_html = '';
    if($product_list_array) {
        foreach($product_list_array as $p) {
            foreach($p as $key => $value) {
                //var_dump($key, $value);
                $result_html .= $key.": ".$value."<br />";
            }
            $result_html .= '------------------------------------------<br />';
        }
    } else {	
      $result_html .= "<strong>Cart is Empty</strong>";
    }

    
    $data['query'] = $this->Checkout_m->insert_cart($data);

    $data['kodeunik_transaksi'] = $this->Checkout_m->code_otomatis_transaksi();

    $data['query_decode'] = $this->Checkout_m->decode_cart($data['id']);

    $data['query_product'] = $this->Checkout_m->get_product();

    $this->load->view('checkout_v', $data);
  }

  function decode_items() {

  }
  
}
