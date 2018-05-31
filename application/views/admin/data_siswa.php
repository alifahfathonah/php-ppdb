<?php
$this->load->view('template/head');
include 'header.php';
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Data User
  </h1>
  <small>Control panel</small>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data User</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="container">
    <div class="row">

      <div class="col-md-12">
        <br>
        
        <div>
        <table class="table table-striped ">
        <tbody>
        <thead>
        <tr>
            <th>Nama</th>
            <th>NISN</th>
            <th>Pilihan Prodi 1</th>
            <th>Pilihan Prodi 2</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
      </thead>
          <?php

          foreach ($data as $tampil) { // $data di ambil dari home.php dan $tampil hanya sebuah variable baru

          ?>
        <tr>
          <td><?php echo $tampil->nama; ?></td>
          <td><?php echo $tampil->nisn; ?></td>
          <td><?php echo $tampil->prodi1; ?></td>
          <td><?php echo $tampil->prodi2; ?></td>
          <td><?php echo $tampil->status; ?></td>
          <td>
            <a href="<?php echo base_url('index.php/admin/lihat/').$tampil->id?>" title="Lihat Data"><i class="material-icons prefix">remove_red_eye</i></a>
            <a href="<?php echo base_url('index.php/admin/edit/').$tampil->id?>"  title="Edit Status"><i class="material-icons prefix">update</i></a>
            <a href="<?php echo base_url('index.php/admin/hapus/').$tampil->id?>" onclick="return confirm('Apakah anda ingin Menghapus Data ini?')" title="Hapus Data"><i class="material-icons prefix">delete</i></a>
          </td>
        </tr>
        <?php
            }

            ?>
      </tbody>
    </table>
  </div>
      </div>
      </div>

    </div>
</div>
    
</section><!-- /.content -->


<?php
$this->load->view('template/js');
?>
<?php
$this->load->view('template/foot');
?>

<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->


