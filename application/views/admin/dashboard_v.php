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
                <li class="breadcrumb-item active">My Dashboard</li>
            </ol>

            <div class="row">
                <div class="col-md-4 mx-auto">
                    <h2 class="page-title text-center">Order Dashboard</h2>
                </div>
            </div>

            <div class="row">
                <form action="<?php echo site_url('dashboard/update');?>" method="POST" style="width:100%;">
                    <div class="col-md-12 mx-auto">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID Order</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Sub Total</th>
                                    <th>Ongkir</th>
                                    <th>Grand Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i = 1;
                                    foreach($query->result_array() as $item) {

                                    //$link_edit = anchor('buku/edit/'.$row['id_buku'], 'Edit');
                                    $link_delete = anchor('dashboard/delete/'.$item['id'], '<i class="fa fa-trash-o" aria-hidden="true"></i>', "onclick='return confirm(\"Yakin?\")' class='btn btn-primary'");
                                ?>
                                <tr>
                                    <td><?=$i;?></td>
                                    <td><?=$item['id'];?></td>
                                    <td><?=$item['nama_lengkap'];?></td>
                                    <td><?=$item['email'];?></td>
                                    <td><?=$item['nohp'];?></td>
                                    <td><?=$item['alamat'];?></td>
                                    <td><?=$item['sub_total'];?></td>
                                    <td><?=$item['ongkir'];?></td>
                                    <td><?=$item['grand_total'];?></td>
                                    <td>
                                        <div class="form-group">
                                            <select name="cmb_status[]" class="form-control" id="cmb_status" style="width: 140px;">
                                            <option value="pengambilan" <?php if ($item['status'] == "pengambilan") echo 'selected="selected"'; ?>>Pengambilan</option>
                                            <option value="pencucian" <?php if ($item['status'] == "pencucian") echo 'selected="selected"'; ?>>Pencucian</option>
                                            <option value="pengeringan" <?php if ($item['status'] == "pengeringan") echo 'selected="selected"'; ?>>Pengeringan</option>
                                            <option value="pengantaran" <?php if ($item['status'] == "pengantaran") echo 'selected="selected"'; ?>>Pengantaran</option>
                                            <option value="selesai" <?php if ($item['status'] == "selesai") echo 'selected="selected"'; ?>>Selesai</option>
                                            </select>
                                        </div>  
                                    </td>
                                    <td class="text-center"><?php echo $link_delete; ?></td>
                                    <input type="hidden" name="id[]" value="<?=$item['id'];?>">
                                </tr>
                                <?php 
                                    $i++; 
                                    }
                                ?>
                            </tbody>
                        </table>
                    
                    </div>
                    <div class="col-md-12 mx-auto">
                        <button type="submit" class="btn btn-default">Update</button>
                        <?php echo $links; ?>
                    </div>
                </form>
            </div> 
        </div>
    </section>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->

<?php $this->load->view('admin/include/footer'); ?>