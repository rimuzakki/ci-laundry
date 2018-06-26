<?php
  $this->load->view('admin/include/header'); 
  if (!empty($query)) {
    $row = $query->row_array();
  } 
  else {
    $row['id'] =  $kodeunik;
    $row['nama_produk'] = '';
    $row['desc_produk'] = '';
    $row['harga_produk'] = '';
    $row['gambar_produk'] = '';
  }

  // echo form_open('buku/save/'.$is_update);

  // echo form_hidden('id',$row['id_buku']);
?>
<div class="content-wrapper">
  <section id="add-product" style="margin-top: 100px;">
    <div class="container-fluid">
      <!-- Breadcrumbs-->

      <div class="row">
        <div class="col-md-4 mx-auto">
          <h2 class="page-title text-center">Add Product</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 mx-auto">
          <?php
            echo validation_errors();
            echo form_open('product_dashboard/check');
            echo form_hidden('id', set_value('id', $row['id']));
            echo form_hidden('is_update', $is_update);
          ?>
            
            <div class="form-group">
              <label for="id_produk">ID Produk</label>
              <?php echo form_input('id', set_value('id', $row['id']),"class='form-control' id='id_produk' size='50' maxlength='100' readonly"); ?>
            </div> 
            
            <div class="form-group">
              <label for="nama_produk">Nama Produk </label>
              <?php echo form_input('nama_produk', set_value('nama_produk', $row['nama_produk']),"class='form-control' id='nama_produk' size='50' maxlength='150'"); ?>
            </div> 

            <div class="form-group">
              <label for="deskripsi_produk">Deskripsi Produk </label>
              <?php echo form_input('desc_produk', set_value('desc_produk', $row['desc_produk']),"class='form-control' id='deskripsi_produk' size='50' maxlength='150'"); ?>
            </div> 

            <div class="form-group">
              <label for="harga">Harga Produk</label>
              <?php echo form_input('harga_produk', set_value('harga_produk', $row['harga_produk']),"class='form-control' id='harga' size='50' maxlength='150'"); ?>
            </div> 

            <div class="form-group">
              <label for="gambar_produk">Gambar Produk</label>
              <?php echo form_upload('gambar_produk', set_value('gambar_produk', $row['gambar_produk']),"class='form-control' id='gambar_produk' size='50' maxlength='150'"); ?>
            </div> 

          <?php

            echo form_submit('btn_simpan', 'Simpan', "class='btn btn-default'");

            echo form_close();
            

          ?>
        </div>
      </div> 

    </div>
  </section>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
<?php $this->load->view('admin/include/footer'); ?>