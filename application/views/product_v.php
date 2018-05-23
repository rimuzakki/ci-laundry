<head>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" >
</head>
<?php 
  echo anchor('product/add_new','Tambah Produk');
?>
  <table class="table table-bordered table-responsiv">
    <thead>
      <tr>
        <th>#</th>
        <th>ID Produk</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Gambar Produk</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $no = 0;
    foreach($query->result_array() as $row) {
      $no++;
      //$kategori = $row['kategori'];
      $photos = explode(',',$row['gambar_produk']);

      $link_edit = anchor('product/edit/'.$row['id'], 'Edit');
      $link_delete = anchor('product/delete/'.$row['id'], 'Hapus', "onclick='return confirm(\"Yakin?\")'");
    ?>
    
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nama_produk']; ?></td>
        <td><?php echo $row['harga_produk']; ?></td>
        <!--<td><?php //echo $row['gambar_produk']; ?></td>-->
        <td><img data-name="product_image" class="img-thumbnail" src="<?php  echo base_url('img/product/'. $photos[0]);?>" alt="<?=$row['nama_produk'];?>"></td>
        <td><?php echo $link_edit.' '.$link_delete; ?></td>
      </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
  <p><?php echo $links; ?></p>
  <br>
  <a href="<?php  echo base_url();?>">Kembali</a>