 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="col-sm-6">
                 <h1 class="m-0 text-dark">Data Quotation</h1>
             </div>
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="box">
                 <div class="box-header with-border">
                     <div class="row">
                         <div class="col-12">
                             <div class="card">
                                 <div class="card-header">
                                     <!-- <a href="<?php echo site_url('Welcome/VFormAddJenisProduk'); ?>" class="btn btn-success">
                                         Tambah data
                                     </a> -->
                                 </div>
                                 <!-- /.card-header -->

                                 <table class="table table-head-fixed text-nowrap">
                                     <thead>
                                         <tr>
                                             <th>No</th>
                                             <th>Nama</th>
                                             <th>Perusahaan</th>
                                             <th>Email</th>
                                             <th>Number</th>
                                             <th>Subject</th>
                                             <th>Message</th>

                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php
                                            if (!empty($DataQuotation)) {
                                                foreach ($DataQuotation as $index => $ReadDS) {
                                                    $index = $index + 1;
                                            ?>
                                                 <tr>
                                                     <td><?php echo $index; ?></td>
                                                     <td><?php echo $ReadDS->nama; ?></td>
                                                     <td><?php echo $ReadDS->perusahaan; ?></td>
                                                     <td><?php echo $ReadDS->email; ?></td>
                                                     <td><?php echo $ReadDS->number; ?></td>
                                                     <td><?php echo $ReadDS->subject; ?></td>
                                                     <td><?php echo $ReadDS->message; ?></td>
                                                     <td>
                                                         <!-- <a href="<?php echo site_url('Welcome/DataQuotation/' . $ReadDS->kd_jenis . '/view'); ?>" class="btn btn-xs btn-info">
                                                             Edit
                                                         </a>
                                                         <a href="<?php echo site_url('Welcome/DeleteDataQuotation/' . $ReadDS->kd_jenis); ?>" class="btn btn-xs btn-danger">
                                                             Delete
                                                         </a> -->

                                                     </td>
                                                 </tr>
                                         <?php
                                                }
                                            } ?>

                                     </tbody>
                                 </table>

                                 <!-- /.card-body -->
                             </div>
                             <!-- /.card -->
                         </div>
                     </div>
                 </div>
     </section>
 </div>
 <script>
     window.onload = function() {
         /** Your code here. **/

         if (localStorage.getItem("user_id") != null) {
             var userID = document.getElementsByName("user_id");
             var username = document.getElementsByName("username");
             for (var x = 0; x < userID.length; x++) // comparison should be "<" not "<="
             {
                 userID[x].value = localStorage.getItem("user_id");
             }

             for (var x = 0; x < username.length; x++) // comparison should be "<" not "<="
             {
                 username[x].value = localStorage.getItem("username");
             }

         }


     }
 </script>