<!-- Footer -->
    <footer>
      <div class="container text-center">
        <p><?php echo config_item('web_footer'); ?></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo config_item('vendor'); ?>jquery/jquery.min.js"></script>
    <script src="<?php echo config_item('bootstrap'); ?>js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo config_item('vendor'); ?>jquery-easing/jquery.easing.min.js"></script>

    <!-- Include SmartCart -->
    <script src="<?php echo config_item('js'); ?>jquery.smartCart.min.js" type="text/javascript"></script>
    
    <!-- Custom scripts for this template -->
    <script src="<?php echo config_item('js'); ?>style.js"></script>

    <script>
    var baseurl = "<?php echo base_url(); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
    </script>
   

    <script>
        $(document).ready(function(){
  $("#btn-track").click(function(){ // Ketika tombol simpan di klik
    // Ubah text tombol search menjadi SEARCHING... 
    // Dan tambahkan atribut disable pada tombol nya agar tidak bisa diklik lagi
    //$(this).html("SEARCHING...").attr("disabled", "disabled");
    
    $.ajax({
      url: '<?php echo base_url(); ?>homepage/get_order_status', // File tujuan
      dataType: 'text',
      type: 'POST', // Tentukan type nya POST atau GET
      data: {id_track: $("#track").val()}, // Set data yang akan dikirim
      // dataType: "json",
      // beforeSend: function(e) {
      //   if(e && e.overrideMimeType) {
      //     e.overrideMimeType("application/json;charset=UTF-8");
      //   }
      // },
      /*//success: function(response){ // Ketika proses pengiriman berhasil
        // Ubah kembali text button search menjadi SEARCH
        // Dan hapus atribut disabled untuk meng-enable kembali button search nya
        //$("#btn-track").html("SEARCH").removeAttr("disabled");
        
        // Ganti isi dari div view dengan view yang diambil dari controller siswa function search
        //$("#track-content").html(response.hasil);
      //},
      error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
        alert(xhr.responseText); // munculkan alert
      }*/
      success: function(data) {
        //alert(msg);
        var html = data.status;

        $('#track-content').html(data);
        $('#myModal').modal('show');
      },
      error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
        alert(xhr.responseText); // munculkan alert
      }
    });
  });
});
    </script>

  </body>

</html>
