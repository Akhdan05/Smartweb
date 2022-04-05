<!DOCTYPE html>
<html lang="en">

<head>
    <title>ngeApple</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="icon" href="<?php echo base_url() ?>assets/images/aaa.png" type="image/png">

</head>

<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php $this->load->view('templates/header'); ?>
                <div class="container-fluid">
                    <?php $this->load->view($theme_page); ?>
                </div>
            </div>
            <?php $this->load->view('templates/footer'); ?>
        </div>
    </div>
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/aos.js"></script>

<script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>

</html>