<?php $this->load->view('include/header'); ?>
<section id="checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h2 class="page-title text-center">Checkout Page</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 mx-auto">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Item</th>
                            <th>Harga</th>
                            <th>Quantity</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $sub_total = 0;
                        $item_count = 0;
                        foreach($query_decode as $item) { 
                            $product_id = $item['product_id'];
                            // echo $product_id;
                            foreach($query_product as $product) { 
                                if($product['id']==$item['product_id']) {

                                //$productQ = $mysqli->query("SELECT * FROM tb_products WHERE id = '{$product_id}'");
                                //$product = mysqli_fetch_assoc($productQ);
                            
                        ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?=$product['nama_produk'];?></td>
                            <td>Rp. <?=$product['harga_produk'];?></td>
                            <td><?=$item['product_quantity'];?></td>
                            <td>Rp. <?=$item['product_quantity'] * $product['harga_produk'];?></td>
                        </tr>

                        <?php
                            $i++;
                            $item_count += $item['product_quantity'];
                            $sub_total += ($product['harga_produk'] * $item['product_quantity']);
                            }}}
                            $tax = 0.1 * $sub_total;
                            $grand_total = $tax + $sub_total;
                        ?>
                    </tbody>
                </table>

                <table class="table table-bordered">
                    <legend>Total</legend>
                    <thead>
                        <th>Total Item</th>
                        <th>Sub Total</th>
                        <th>Shipping</th>
                        <th>Grand Total</th>
                    </thead>
                    <tbody>
                        <td><?=$item_count;?></td>
                        <td>Rp. <?=$sub_total;?></td>
                        <td>Rp. <?=$tax;?></td>
                        <td>Rp. <?=$grand_total;?></td>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mx-auto">
                <h2 class="page-title text-center">Form Checkout</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="<?php echo site_url('transactions/save');?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="txt_nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="nama">Email</label>
                        <input type="email" name="txt_email" class="form-control" id="email" placeholder="Alamat Email">
                    </div>
                    <div class="form-group">
                        <label for="nama">No. Hp</label>
                        <input type="text" name="txt_nohp" class="form-control" id="nohp" placeholder="08xxxxxx">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <textarea name="txt_alamat" class="form-control" id="alamat" rows="3"></textarea>
                    </div>
                    <input type="hidden" name="txt_sub_total" value="<?= $sub_total; ?>">
                    <input type="hidden" name="txt_ongkir" value="<?php echo $tax; ?>">
                    <input type="hidden" name="txt_sub_total" value="<?php echo $sub_total; ?>">
                    <input type="hidden" name="txt_grand_total" value="<?php echo $grand_total; ?>">
                    <input type="hidden" name="txt_cart_id" value="<?php echo $id; ?>">
                    <input type="hidden" name="trx_id" value="<?php echo $kodeunik_transaksi; ?>">
                    <input type="hidden" name="action" value="create" />
                    <button type="submit" class="btn btn-default">Checkout</button>
                </form>
            </div>
        </div>
    </div>
</section>  
<?php $this->load->view('include/footer'); ?>