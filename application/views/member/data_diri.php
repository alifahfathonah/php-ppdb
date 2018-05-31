<?php include 'header.php'; ?>


<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'); ?>" />

<div class="container">
    <div class="row">
      <div class="col-md-11">
          <div class>
            <h5><u>Data Diri</u></h5>
            <br><br>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('index.php/member/datadiri/edit/'.$data->id); ?>" method="post">
              
              <div class="row">
                <div class="form-group">
                <label class="control-label col-md-2">*Username</label>
                  <div class="form-group col-md-7">
                    <input type="text" class="form-control validate" name="nama" value="<?= $data->nama; ?>" required="">
                  </div>
                  
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="control-label col-md-2">NISN</label>
                  <div class="form-group col-md-7">
                  <input type="text" name="nisn" value="<?= $data->nisn; ?>" class="form-control validate" required>
                </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="control-label col-md-2">Tempat Lahir</label>
                  <div class="form-group col-md-7">
                  <input type="text" name="tmp_lahir" value="<?= $data->tmp_lahir; ?>" class=" form-control validate" id="icon_prefix" required="">
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-md-2">Tanggal Lahir</label>
                    <div class='input-group date col-md-7 form-group' id='datetimepicker1'>
                        <input type="text" name="tgl_lahir" value="<?= $data->tgl_lahir; ?>" class="form-control" required>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                <div class="col-md-12 form-group">
                  <label class="control-label col-md-2">Jenis Kelamin</label>
                  <div class="form-group col-md-7">
                  <input  type="radio" name="kelamin" value="Laki-Laki" id="laki" required>
                  <label for="laki">Laki-Laki</label>

                  <input type="radio" name="kelamin" value="Perempuan" id="perempuan">
                  <label for="perempuan">Perempuan</label>
                </div>
                </div>
              </div>
              

              <div class="row">
                <div class="col-md-12 form-group">
                    <label class="control-label col-md-2" >Nik</label>
                  <div class="form-group col-md-7">
                  <input type="text" name="nik" value="<?= $data->nik; ?>" class="form-control validate" id="icon_prefix" required="">
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="control-label col-md-2">Agama</label>
                  <?php
                  include 'database.php';
                  echo "
                  <div class='col-md-7 form-group'>
                  <select name='agama' id='pilih'  required class='form-control'>
                  <option value='' selected  >Pilih Agama</option>";
                  $pil2=mysqli_query($koneksi,"select * from agama");
                  while($j=mysqli_fetch_array($pil2)){
                  echo "<option value='$j[nama]'>$j[nama]</option>";
                  }
                  echo "</select>";
                  ?>
                </div>
               </div>
                <div class="col-md-12 form-group">
                <label class="control-label col-md-2">Asal Sekolah</label>
                  <div class="form-group col-md-7">
                    <input type="text" name="asal_sekolah" value="<?= $data->asal_sekolah; ?>" class="validate form-control" required="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label class="control-label col-md-2">Alamat</label>  
                  <div class="form-group col-md-7">
                  <textarea class="form-control" name="alamat" required><?= $data->alamat; ?></textarea>
                </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-2 form-group">
                      
                  <input type="submit" name="simpan" value="simpan" class="btn btn-primary form-control">



                </div>
              </div>
            


            

            </form>
            </div>
          

        </div>
    </div>

<?php include'footer.php'; ?>

<script type="text/javascript">
  $(function () {
      $('#datetimepicker1').datetimepicker({
        format: 'DD/MM/YYYY'
      });
  });
  </script>

