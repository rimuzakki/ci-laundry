<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  var $data = array();

  function __construct() {
    parent:: __construct();

    $this->load->helper('form');
    $this->load->helper('url');

    $this->load->model('Dashboard_m');
    // load lib form validation
    $this->load->library('form_validation');

    // load lib pagination
    $this->load->library('pagination');

  }

  public function index() {
    // pagination
    $config = array();
    $config["base_url"] = base_url() . "dashboard/index";
    $config["total_rows"] = $this->Dashboard_m->jml_data();
    $config["per_page"] = 10;
    $config["uri_segment"] = 3;

    // Membuat Style pagination untuk BootStrap v4
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';

    $this->pagination->initialize($config);
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $this->data["links"] = $this->pagination->create_links();



    // $this->add_new();
    $this->data['query'] = $this->Dashboard_m->get_records(null, null, $config["per_page"], $page);
    $this->load->view('admin/dashboard_v', $this->data);
    //$this->load->view('admin/dashboard_v');
  }

  function add_new() {
    $this->data['is_update'] = 0;
    $this->load->view('dashboard_form_v', $this->data);
  }

  function save($is_update=0) {
    $data['id']    = $this->input->post('id', true);
    $data['nama_produk']    = $this->input->post('nama_produk', true);
    $data['desc_produk']   = $this->input->post('desc_produk', true);
    $data['harga_produk']   = $this->input->post('harga_produk', true);
    $data['gambar_produk']   = $this->input->post('gambar_produk', true);

    if($is_update == 0) {
      // jika tambah data baru
      if($this->Dashboard_m->insert($data))
        redirect('dashboard');
    }
    else {
      // jika update data
      $id = $this->input->post('id');

      if ($this->Dashboard_m->update_by_id($data, $id)) 
        redirect('dashboard');
    }
  }

  function edit($id) {
    $this->data['query'] = $this->Dashboard_m->get_records("ID_Product = '$id'");

    $this->data['is_update'] = 1;

    $this->load->view('dashboard_form_v', $this->data);
  }

  function delete($id) {
    if($this->Dashboard_m->delete_by_id($id)) {
      redirect('dashboard');
    }
  }

  function update() {
        $id    = $this->input->post('id', true);
        $status    = $this->input->post('cmb_status', true);
        
        if($this->Dashboard_m->update_batch($id, $status))
            redirect('dashboard');
  }

  function check() {
    $this->form_validation->set_rules('id', 'ID', 'trim');
    $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required');
    $this->form_validation->set_rules('desc_produk', 'Deskripsi Produk', 'trim');
    $this->form_validation->set_rules('harga_produk', 'Harga Produk', 'trim|required');
    $this->form_validation->set_rules('gambar_produk', 'Gambar Produk', 'trim|required');

    $this->form_validation->set_message('required', 'Data {field} harus diisi.');
    $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div></br>');

    if ($this->form_validation->run()==true) {
      $this->save($this->input->post('is_update', true));
    } else {
      $this->data['is_update'] = $this->input->post('is_update', true);
      $this->load->view('dashboard_form_v', $this->data);
    }
  }  
}
