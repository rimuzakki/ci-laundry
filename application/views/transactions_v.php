<?php
  $this->load->view('include/header'); 
?>
<section id="detail-pembayaran">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h2 class="page-title text-center">Detail Pemesanan</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 mx-auto">
                <h5 class="sub-title">Order Details</h5>
                <table class="table table-bordered">
                    <tbody>
                        <?php foreach($query_trx as $trx_data) { ?>
                        <tr>
                            <th>Id Pemesanan</th>
                            <td><?=$trx_data['id'];?></td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td><?=$trx_data['nama_lengkap'];?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?=$trx_data['email'];?></td>
                        </tr>
                        <tr>
                            <th>No HP</th>
                            <td><?=$trx_data['nohp'];?></td>
                        </tr>
                        <tr>
                            <th>Alamat tujuan</th>
                            <td><?=$trx_data['alamat'];?></td>
                        </tr>
                        <tr>
                            <th>Sub total</th>
                            <td>Rp. <?=$trx_data['sub_total'];?></td>
                        </tr>
                        <tr>
                            <th>Ongkos kirim</th>
                            <td>Rp. <?=$trx_data['ongkir'];?></td>
                        </tr>
                        <tr>
                            <th>Grand total</th>
                            <td>Rp. <?=$trx_data['grand_total'];?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <h5 class="sub-title">Order Items</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Item</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                            
                        </tr>
                        <?php
                        $i = 1;
                        foreach ($query_trx_items as $item) {
                            $product_id = $item['product_id'];
                            foreach($query_product as $product) { 
                                if($product['id']==$item['product_id']) {  
                        ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?=$product['nama_produk'];?></td>
                            <td>Rp. <?=$product['harga_produk'];?></td>
                            <td><?=$item['product_quantity'];?></td>
                            
                        </tr>
                        <?php
                            $i++;
                                }
                            }
                        }
                        ?>

                    </thead>
                </table>

                <div class="content">
                    <strong>Catatan :</strong>
                    <ol>
                        <li>Petugas akan mendatangi alamat yang tertera maksimal 1x24 jam pada jam kerja.</li>
                        <li>Pembayaran dilakukan ketika petugas sudah mengambil dan mengecek orderan.</li>
                        <li>Harga yang tertera diatas adalah harga estimasi, bisa terjadi perubahan harga setelah pengecekan orderan oleh petugas.</li>
                        <li>Harap simpan Order ID anda untuk Track Order yang dapat dilakukan pada halaman utama website.</li>
                    </ol>
                    <strong>Terimakasih telah menggunakan jasa kami.</strong>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('include/footer'); ?>