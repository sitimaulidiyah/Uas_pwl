<div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card shadow-sm border-bottom-primary">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-dark">
            <?= userdata('username'); ?>
            </h5>
    </div>
    <!-- <br>
    <img class="img-profile rounded-circle" width="130px"  height="130px" style="display: block; margin: auto;" src="<?php echo base_url() ?>assets/img/admin.jpg" />
    <div class="text-align:center"
    <br style="text-align:center">
    <?= userdata('nama'); ?>
    <br>
    <?= userdata('email'); ?>
    <br>
    </div> -->
    <div class="card-body">
                <div class="row form-group">
            <div class="col-md-10">
                <table class="table">
                    <tr>
                        <th width="200">Nama</th>
                        <td><?= userdata('nama'); ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= userdata('email'); ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td><?= userdata('no_telp'); ?></td>
                    </tr>
                    
                </table>
                </div>
            </div>
            <div class="row form-group">
              <div class="col-md-4 offset-md">
              <a href="<?= base_url('penjual/profile/setting'); ?>" class="btn btn-sm btn-block btn-success"><i class="fa fa-edit"></i> Edit Profile</a>
              <a href="<?= base_url('penjual/profile/ubahpassword'); ?>" class="btn btn-sm btn-block btn-secondary"><i class="fa fa-lock"></i> Ubah Password</a>
             </div>
            </div>