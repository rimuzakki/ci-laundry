<?php
  
  if (!empty($query)) {
    $row = $query->row_array();
  } 
  else {
    $row['id'] = '';
    $row['nama_produk'] = '';
    $row['desc_produk'] = '';
    $row['harga_produk'] = '';
    $row['gambar_produk'] = '';
  }

  // echo form_open('buku/save/'.$is_update);

  // echo form_hidden('id',$row['id_buku']);

  echo validation_errors();
  echo form_open('product/check');
  echo form_hidden('id', set_value('id', $row['id']));
  echo form_hidden('is_update', $is_update);

  echo "ID : ".form_input('id', set_value('id', $row['id']),"size='50' maxlength='100'");
  echo "<br><br>";

  echo "Nama Produk : ".form_input('nama_produk', set_value('nama_produk', $row['nama_produk']),"size='50' maxlength='150'");
  echo "<br><br>";

  echo "Deskripsi Produk : ".form_input('desc_produk', set_value('desc_produk', $row['desc_produk']),"size='50' maxlength='150'");
  echo "<br><br>";

  echo "Harga Produk : ".form_input('harga_produk', set_value('harga_produk', $row['harga_produk']),"size='50' maxlength='150'");
  echo "<br><br>";

  echo "Gambar Produk : ".form_input('gambar_produk', set_value('gambar_produk', $row['gambar_produk']),"size='50' maxlength='150'");
  echo "<br><br>";


  echo form_submit('btn_simpan', 'Simpan');

  echo form_close();
  

?>