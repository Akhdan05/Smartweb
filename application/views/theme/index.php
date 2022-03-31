<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=""> 

  <title>Knowledge++ - <?php echo $list;;?></title>

  <!-- css yang digunakan theme -->
  <link href="<?php echo base_url('assets-admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css"> 
  <link href="<?php echo base_url('assets-admin/css/sb-admin-2.min.css');?>" rel="stylesheet">

  <!-- css yang digunakan datatables -->
  <link href="<?php echo base_url('assets-admin/vendor/datatables/jquery.dataTables.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets-admin/vendor/datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <style type="text/css">
    .dataTables_filter {
      color: red;
    }
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- load sidebar -->
    <?php $this->load->view('theme/sidebar');?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- load header -->
        <?php $this->load->view('theme/header');?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- load halaman sesuai controller yang dipilih dari sidebar -->
          <?php $this->load->view($theme_page);?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- load footer -->
      <?php $this->load->view('theme/footer');?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- js yang digunakan theme -->
  <script src="<?php echo base_url('assets-admin/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('assets-admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
  <script src="<?php echo base_url('assets-admin/js/sb-admin-2.min.js');?>"></script>

  <!-- js yang digunakan datatables -->
  <script src="<?php echo base_url('assets-admin/vendor/datatables/jquery.dataTables.min.js')?>"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
      let tgl_acara = $('#acara_id option:selected').attr('tanggal_acara');
      $('#tanggal_daftar').attr('max', tgl_acara);
      $("#acara_id").on('change', function(){
        tgl_acara = $('#acara_id option:selected').attr('tanggal_acara');
        let dtToday = new Date();
        let month = dtToday.getMonth() + 1;
        let day = dtToday.getDate();
        let year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();

        let maxDate = tgl_acara;    
        $('#tanggal_daftar').attr('max', maxDate);
      });
      $('#jml_beli').on('keyup', function(){
        let harga_beli = $('#acara_id option:selected').attr('harga');
        let jml_beli = $(this).val();
        let total_harga = $('#total_harga');
        let hitung = jml_beli * harga_beli;
        total_harga.val(hitung);
      })

      $('#datatables').DataTable({
        "lengthChange": false,
        "pageLength": 5,
      });
    });
  </script>

</body>

</html>
