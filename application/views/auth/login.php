<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?= site_url('image/default.png') ?>" type="image/gif">

  <title>ngeApple - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets-admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets-admin/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-light">

  <div class="container">

    <!-- Outer Row -->
    <div class="row">
      <div class="col">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_ft0cqvpu.json" class="my-5" mode="bounce" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
      </div>

      <div class="col-xl-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body ">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang di Web ngeApple</h1>
                  </div>

                  <?= $this->session->flashdata('message') ?>

                  <span id="failed-message"></span>
                  <form action="<?= base_url('admin/login') ?>" method="post" class="user" id="login-form">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" style="margin-top: 5vh;" id="exampleInputEmail" placeholder="Masukkan username..." name="username">
                      <?= form_error('text', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <span id="text-error" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" style="margin-top: 5vh;" id="exampleInputPassword" placeholder="Masukkan password..." name="password">
                      <?= form_error('password', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
                      <span id="password-error" class="text-danger"></span>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block" id="submit" name="submit" style="margin-top: 10vh;" value="Login">
                    Login
                    </button>
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
  <script src="<?= base_url('assets-admin/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets-admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets-admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets-admin/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>