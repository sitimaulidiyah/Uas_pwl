<div class="row justify-content-center mt-5 pt-lg-5">

    <div class="col-xl-5 col-lg-5 col-md-9">
        <div class="card o-hidden border-5 shadow-lg">
            <div class="card-body p-lg-5 p-5">
                <!-- Nested Row within Card Body -->
                        <div class="col-lg">
                            <div class="text-center mb-4">
                            <div class="logo_image "><div><img src="<?php echo base_url() ?>assets/img/adminn.png" height="75" alt=""></div></div>
                                <h1 class="h4 text-gray-900">Ananda Computindo</h1>
                                <span class="text-muted">Login</span>
                            </div>
                            <!-- <div class="pesan-data" data-pesandata="<?= $this->session->flashdata('pesan');?>"></div> -->
                            <?= $this->session->flashdata('pesan'); ?>
                            <?= form_open('', ['class' => 'user']); ?>
                            <div class="form-group">
                                <input autofocus="autofocus" autocomplete="off" value="<?= set_value('username'); ?>" type="text" name="username" class="form-control form-control-user" placeholder="Username">
                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-warning btn-user btn-block" style="background-color : #ef8022">
                                Login
                            </button>
                            <div class="text-center mt-4">
                                <a class="small" href="<?= base_url('penjual/auth/register') ?>">Buat Akun!</a>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>