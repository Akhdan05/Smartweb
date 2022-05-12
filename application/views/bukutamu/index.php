<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ngeApple</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/images/aaa.png" type="image/png">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets-admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-2">ngeApple</h1>
                                        <h1 class="h5 text-gray-900 mb-4">Harap isi buku tamu dulu yaa</h1>
                                    </div>
                                    <form class="user" method="post"
                                        action="<?php echo site_url('buku_tamu/submit'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="nama"
                                                name="nama" value="" required="" placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email"
                                                name="email_pengunjung" value="" required=""
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="telepon" class="form-control form-control-user"
                                                id="exampleInputTelepon" aria-describedby="teleponHelp" name="no_telp"
                                                value="" required="" placeholder="No. Telepon">
                                        </div>
                                        <input class="btn btn-primary btn-user btn-block" type="submit" name="Submit"
                                            value="Submit" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets-admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets-admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets-admin/js/sb-admin-2.min.js"></script>

</body>

</html>