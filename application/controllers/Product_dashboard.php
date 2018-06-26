<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_dashboard extends CI_Controller {

  var $data = array();

  function __construct() {
    parent:: __construct();

    $this->load->helper('form');
    $this->load->helper('url');

    $this->load->model('Product_m');
    // load lib form validation
    $this->load->library('form_validation');

    // load lib pagination
    $this->load->library('pagination');

  }

  public function index() {
    // pagination
    $config = array();
    $config["base_url"] = base_url() . "product_dashboard/index";
    $config["total_rows"] = $this->Product_m->jml_product();
    $config["per_page"] = 5;
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
    $this->data['query'] = $this->Product_m->get_records(null, null, $config["per_page"], $page);
    $this->load->view('admin/product_dashboard_v ', $this->data);
  }

  function add_new() {
    $this->data['is_update'] = 0;
    $this->data['kodeunik'] = $this->Product_m->code_otomatis_products();
    $this->load->view('admin/product_form_v', $this->data);
  }

  function save($is_update=0) {
    $config = [
      'upload_path' => base_url('assets\img\product'),
      'allowed_types' => 'gif|jpg|png',
      'max_size' => 2048
    ];

    $this->load->library('upload', $config);

    $data['id']    = $this->input->post('id', true);
    $data['nama_produk']    = $this->input->post('nama_produk', true);
    $data['desc_produk']   = $this->input->post('desc_produk', true);
    $data['harga_produk']   = $this->input->post('harga_produk', true);
    $data['gambar_produk']   = $this->input->post('gambar_produk', true);
    // $file = $this->upload->data(); 
    // $data['gambar_produk'] = $file['file_name'];
    
    // if (!$this->upload->do_upload()) //jika gagal upload
    // {
    //     $error = array('error' => $this->upload->display_errors()); //tampilkan error
    //     $this->load->view('admin/product_form_v', $error);
    //     //redirect('product_dashboard', $error);
    // } 
    // else {
      if($is_update == 0) {
        // jika tambah data baru
        if($this->Product_m->insert($data))
          redirect('product_dashboard');
      }
      else {
        // jika update data
        $id = $this->input->post('id');

        if ($this->Product_m->update_by_id($data, $id)) 
          redirect('product_dashboard');
      }
    //}
  }

  public function proses_input(){
    //membuat konfigurasi
    $config = [
      'upload_path' => $config['img'].'product/',
      'allowed_types' => 'gif|jpg|png',
      'max_size' => 2048
    ];
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload()) //jika gagal upload
    {
        $error = array('error' => $this->upload->display_errors()); //tampilkan error
        $this->load->view('product_dashboard', $error);
    } else
    //jika berhasil upload
    {
        $file = $this->upload->data();
        //mengambil data di form
        $data = ['gambar' => $file['file_name'],
         'nama' => set_value('nama'),
         'harga' => set_value('harga'),
         'stok' => set_value('stok')
       ];
        $this->M_produk->input($data); //memasukan data ke database
        redirect('product_dashboard'); //mengalihkan halaman

    }
  }

  function edit($id) {
    $this->data['query'] = $this->Product_m->get_records("id = '$id'");

    $this->data['is_update'] = 1;

    $this->load->view('admin/product_form_v', $this->data);
  }

  function delete($id) {
    if($this->Product_m->delete_by_id($id)) {
      redirect('product_dashboard');
    }
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
      $this->load->view('admin/product_form_v', $this->data);
    }
  }
  
}
