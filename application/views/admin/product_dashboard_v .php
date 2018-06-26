<?php
  $this->load->view('admin/include/header'); 
?>

<div class="content-wrapper">
    <section id="dashboard">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Product</li>
            </ol>

            <div class="row">
                <div class="col-md-4 mx-auto">
                    <h2 class="page-title text-center">Product Dashboard</h2>
                </div>
            </div>
            
            <div class="row">
              <div class="col-md-12 mx-auto">
                <?php
                  echo anchor('product_dashboard/add_new','<i class="fa fa-plus" aria-hidden="true"></i> Tambah Produk', 'class="btn btn-primary" style="margin-bottom: 10px;"');
                ?>
                <br>
              </div>
              <div class="col-md-12 mx-auto">
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

                    $link_edit = anchor('product_dashboard/edit/'.$row['id'], '<i class="fa fa-pencil" aria-hidden="true"></i>', 'class="btn btn-primary"');
                    $link_delete = anchor('product_dashboard/delete/'.$row['id'], '<i class="fa fa-trash-o" aria-hidden="true"></i>', "onclick='return confirm(\"Yakin?\")' class='btn btn-primary'");
                  ?>
                  
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['nama_produk']; ?></td>
                      <td><?php echo $row['desc_produk']; ?></td>
                      <td><?php echo $row['harga_produk']; ?></td>
                      <!--<td><?php //echo $row['gambar_produk']; ?></td>-->
                      <td><img data-name="product_image" class="img-thumbnail" src="<?php  echo base_url('img/product/'. $photos[0]);?>" alt="<?=$row['nama_produk'];?>"></td>
                      <td class="text-center"><?php echo $link_edit.' '.$link_delete; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <div class="col-md-12 mx-auto">
                <?php echo $links; ?>
                <!-- <a href="<?php  echo base_url();?>">Kembali</a> -->
              </div>
            </div>
          </div>
        </section>

  
<?php $this->load->view('admin/include/footer'); ?>