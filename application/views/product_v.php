<?php
  $this->load->view('include/header'); 
?>

<section id="order">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <h2 class="page-title text-center">Product</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <?php foreach ($produk as $item) : ?>
          <div class="col-md-4 col-sm-6">
            <div class="card sc-product-item">
              <div class="card-image">
                <?php $photos = explode(',',$item['gambar_produk']); ?>
                <img data-name="product_image" class="img-fluid" src="img/product/<?=$photos[0];?>" alt="<?=$item['nama_produk'];?>">
              </div>
              <div class="card-content">
                <div class="card-title">
                  <p data-name="product_name"><?=$item['nama_produk'];?></p>
                </div>
                <!-- <p class="product-desc" data-name="product_desc"><?=$item['desc_produk'];?></p> -->
                <strong class="price">Rp. <?=$item['harga_produk'];?></strong>

                <input name="product_price" value="<?=$item['harga_produk'];?>" type="hidden" />
                            <input name="product_id" value="<?=$item['id'];?>" type="hidden" />
              </div>
              <div class="card-action">
                            <button class="sc-add-to-cart btn btn-primary">Add to cart</button>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="col-md-4">
        <!-- Cart submit form -->
          <form action="results.php" method="POST"> 
              <!-- SmartCart element -->
              <div id="smartcart"></div>
              <input name="cart_id" value="<?php echo $kode_otomatis ?>" type="hidden" />
          </form>
      </div>
    </div>
  </div>
</section>



<?php
//echo anchor('product/add_new','Tambah Produk');
?>
  <table class="table table-bordered table-responsiv">
    <thead>
      <tr>
        <th>#</th>
        <th>ID Produk</th>
        <th>Nama Produk</th>
        <th>Deskripsi Produk</th>
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
        <td><?php echo $row['desc_produk']; ?></td>
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
<?php $this->load->view('include/footer'); ?>