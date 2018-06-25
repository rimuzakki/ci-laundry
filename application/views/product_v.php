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
                    <?php 
                        foreach($query->result_array() as $row) { 
                        $photos = explode(',',$row['gambar_produk']);

                        $link_edit = anchor('product/edit/'.$row['id'], 'Edit');
                        $link_delete = anchor('product/delete/'.$row['id'], 'Hapus', "onclick='return confirm(\"Yakin?\")'");
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="card sc-product-item">
                            <div class="card-image">
                                <img data-name="product_image" class="img-fluid" src="<?php  echo base_url('img/product/'. $photos[0]);?>" alt="<?php  echo base_url('img/product/'. $photos[0]);?>">
                            </div>
                            <div class="card-content">
                                <div class="card-title">
                                    <p data-name="product_name"><?php echo $row['nama_produk']; ?></p>
                                </div>
                                <!-- <p class="product-desc" data-name="product_desc"><?php echo $row['desc_produk']; ?></p> -->
                                <strong class="price">Rp. <?php echo $row['harga_produk']; ?></strong>

                                <input name="product_price" value="<?php echo $row['harga_produk']; ?>" type="hidden" />
                                <input name="product_id" value="<?php echo $row['id']; ?>" type="hidden" />
                            </div>
                            <div class="card-action">
                                <button class="sc-add-to-cart btn btn-primary">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-md-4">
                <!-- Cart submit form -->
                <form action="<?php echo site_url('checkout/checkout');?>" method="POST"> 
                <!-- SmartCart element -->
                <div id="smartcart"></div>
                <input type="hidden" name="cart_id" value="<?= $kodeunik; ?>" />
                </form>
            </div>
        </div>
    </div>
</section>

<p><?php echo $links; ?></p>


<?php $this->load->view('include/footer'); ?>

<script type="text/javascript">
    $(document).ready(function(){
        // Initialize Smart Cart    	
        $('#smartcart').smartCart({
        	// Language variables
			  lang: {  
			    cartTitle: "Laundry Basket",
			    checkout: 'Checkout',
			    clear: 'Clear',
			    subtotal: 'Subtotal:',
			    cartRemove:'×',
			    cartEmpty: 'Basket is Empty!<br />Choose your products'
			  },
			  // currency settings
			  currencySettings: {
			    locales: 'id', // A string with a BCP 47 language tag, or an array of such strings
			    currencyOptions:  {
			        style: 'currency', 
			        currency: 'IDR', 
			        currencyDisplay: 'symbol'
			      } // extra settings for the currency formatter. Refer: https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Number/toLocaleString
			  }
        });
	});
</script>