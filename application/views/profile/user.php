<div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card shadow-sm border-bottom-primary">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-dark">
            <?= userdata('nama'); ?>
            </h5>
    </div>
    <div class="card-body">
                <div class="row form-group">
            <div class="col-md-10">
                <table class="table">
                    <tr>
                        <th width="200">Username</th>
                        <td><?= userdata('username'); ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= userdata('email'); ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?= userdata('alamat'); ?></td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td><?= userdata('no_telp'); ?></td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td class="text-capitalize"><?= userdata('role'); ?></td>
                    </tr>
                </table>
                </div>
            </div>
            <hr>
            <div class="row form-group">
              <div class="col-md-4 offset-md">
              <a href="<?= base_url('profile/setting'); ?>" class="btn btn-sm btn-block btn-success"><i class="fa fa-edit"></i> Edit Profile</a>
              <a href="<?= base_url('profile/ubahpassword'); ?>" class="btn btn-sm btn-block btn-secondary"><i class="fa fa-lock"></i> Ubah Password</a>
             </div>
            </div>
        </div>
        </div>
    </div>
</div>