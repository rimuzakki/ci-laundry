<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

  var $data = array();

  function __construct() {
    parent:: __construct();

    $this->load->helper('form');
    $this->load->helper('url');

    $this->data['opt_kategori'] = array('' => '-Pilih salah satu -',
                      'novel' => 'Novel',
                      'komik' => 'Komik',
                      'kamus' => 'Kamus',
                      'Teknologi' => 'Teknologi');

    $this->load->model('Product_m');
    // load lib form validation
    $this->load->library('form_validation');

    // load lib pagination
    $this->load->library('pagination');
    
  }

  public function index() {
    // pagination
    $config = array();
    $config["base_url"] = base_url() . "product/index";
    $config["total_rows"] = $this->Product_m->jml_product();
    $config["per_page"] = 5;
    $config["uri_segment"] = 3;

    $this->pagination->initialize($config);
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $this->data["links"] = $this->pagination->create_links();

    // $this->add_new();
    $this->data['query'] = $this->Product_m->get_records(null, null, $config["per_page"], $page);
    $this->load->view('product_v', $this->data);
  }

  function add_new() {
    $this->data['is_update'] = 0;
    $this->load->view('product_form_v', $this->data);
  }

  function save($is_update=0) {
    $data['id']    = $this->input->post('id', true);
    $data['nama_produk']    = $this->input->post('nama_produk', true);
    $data['desc_prduk']   = $this->input->post('desc_prduk', true);
    $data['harga_prduk']   = $this->input->post('harga_prduk', true);
    $data['gambar_prduk']   = $this->input->post('gambar_prduk', true);

    if($is_update == 0) {
      // jika tambah data baru
      if($this->Product_m->insert($data))
        redirect('product');
    }
    else {
      // jika update data
      $id = $this->input->post('id');

      if ($this->Product_m->update_by_id($data, $id)) 
        redirect('product');
    }
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
    $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required');
    $this->form_validation->set_rules('desc_prduk', 'Deskripsi Produk', 'trim');
    $this->form_validation->set_rules('harga_prduk', 'Harga Produk', 'trim|required');
    $this->form_validation->set_rules('gambar_prduk', 'Gambar Produk', 'trim|required');

    $this->form_validation->set_message('required', 'Data {field} harus diisi.');
    $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div></br>');

    if ($this->form_validation->run()==true) {
      $this->save($this->input->post('is_update', true));
    } else {
      $this->data['is_update'] = $this->input->post('is_update', true);
      $this->load->view('product_form_v', $this->data);
    }
  }
  
}
