<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wberpack Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqvmap/jqvmap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/summernote/summernote-bs4.css'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="<?php echo base_url('assets/dist/img/favicon1.png" rel="icon'); ?>">
  < </head> <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="<?php echo base_url('assets/dist/img/favicon1.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Wberpack Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- <div class="image">
            <img src="<?php echo base_url('upload/') . $foto; ?>" class="img-circle elevation-2" alt="User Image">
          </div> -->
            <div class="info">
              <a href="#" class="d-block"><?php echo $username; ?></a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <!-- <li class="nav-item">
              <a href="<?php echo site_url('Welcome/DataDashboard'); ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li> -->
              <li class="nav-item">
                <a href="<?php echo site_url('Welcome/DataUser'); ?>" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>
                    User
                  </p>
                </a>
              </li>
              <!-- <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Product
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview"> -->
              <li class="nav-item">
                <a href="<?php echo site_url('Welcome/DataKategori'); ?>" class="nav-link">
                  <i class="nav-icon fa fa-bullseye"></i>
                  <p>
                    Data Kategori
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Welcome/DataJenisProduk'); ?>" class="nav-link">
                  <i class="nav-icon fa fa-bullseye"></i>
                  <p>
                    Data Jenis Produk
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Welcome/DataProduk'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Data Produk
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Welcome/DataSlide'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Data Slide
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('Welcome/DataQuotation'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Data Quotation
                  </p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="<?php echo site_url('Welcome/DataPrincipal'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Data Principal
                  </p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="<?php echo site_url('Welcome/DataCostumer'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Data Slide Client
                  </p>
                </a>
              </li>
              <!-- </ul>
            </li> -->
              <!-- <li class="nav-item">
              <a href="<?php echo site_url('Welcome/DataCostumer'); ?>" class="nav-link">
                <i class="nav-icon fa fa-bullseye"></i>
                <p>
                  Data Costumer
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('Welcome/DataPrincipal'); ?>" class="nav-link">
                <i class="nav-icon fa fa-bullseye"></i>
                <p>
                  Data Principal
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('Welcome/DataSlide'); ?>" class="nav-link">
                <i class="nav-icon fa fa-bullseye"></i>
                <p>
                  Data Slide
                </p>
              </a>
            </li> -->
              <li class="nav-item">
                <a href="<?php echo site_url('Welcome/Logout'); ?>" class="nav-link" onclick="Logout()">
                  <i class="nav-icon fa fa-arrow-left"></i>
                  <p>Logout</p>
                </a>
              </li>

            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <?php
      $this->load->view($content);
      ?>
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->

      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js'); ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('assets/plugins/sparklines/sparkline.js'); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('assets/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('assets/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url('assets/plugins/moment/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/dist/js/adminlte.js'); ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('assets/dist/js/pages/dashboard.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <!-- <script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script> -->
    <script>
      function Logout() {
        localStorage.clear();
      }
    </script>
    <script>
      $(function() {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
    <script>
      $(document).ready(function() {
        $('.sidebar-menu').tree()
      })
      $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
      })
      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })
    </script>
    <script>
      $(function() {
        // Summernote
        $('.textarea').summernote()
      })
    </script>
    </body>



    </body>

</html>