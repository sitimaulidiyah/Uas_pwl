<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .bg-login-image {
            background-image: url("<?= base_url('assets/img/finance_0bdk.svg'); ?>");
            background-repeat: no-repeat;
            background-size: 80%;
        }
    </style>
</head>

<body class="bg-gradient-grey" style="background-color : #d6dce8">
<!-- <div class="parallax_background parallax-window" data-parallax="scroll"><img src="<?php echo base_url() ?>assets/depan/images/ananda.jpeg" width="100%" height="100%" style="position:absolute" class="img-responsive" data-speed="0.8"></div> -->

    <div class="container">

        <?= $contents; ?>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/myscript.js"></script>     

</body>

</html>