<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col-md-12">
          
          <div class="col-md-12">
            <h5><u>Jurusan</u></h5>
            <br>
            <form class="form-horizontal" action="<?php echo base_url('index.php/member/prodi/edit/'.$data->id); ?>" method="post">
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="control-label col-md-2">Pilih jurusan 1</label>
                  <?php
                  include 'database.php';
                  echo "
                  <div class='col-md-7 form-group'>
                  <select name='prodi1' id='pilih'  required class='form-control'>
                  <option value='' selected  >Pilih Jurusan Pertama</option>";
                  $pil2=mysqli_query($koneksi,"select * from prodi");
                  while($j=mysqli_fetch_array($pil2)){
                  echo "<option value='$j[nama]'>$j[nama]</option>";
                  }
                  echo "</select>";
                  ?>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="control-label col-md-2">Pilih Jurusan 2</label>
                  <?php
                  include 'database.php';
                  echo "
                  <div class='form-group col-md-7'>
                  <select name='prodi2' id='pilih'  class='form-control' required>
                  <option value='' selected disabled >Pilih Jurusan Kedua</option>";
                  $pil2=mysqli_query($koneksi,"select * from prodi");
                  while($j=mysqli_fetch_array($pil2)){
                  echo "<option value='$j[nama]'>$j[nama]</option>";
                  }
                  echo "</select>";
                  ?>
                </div>
              </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <div class="col-md-7"></div>
                    <input type="submit" name="simpan1" value="simpan" class="btn btn-primary col-md-2">


                </div>
              </div>
            </div>


            </div>

            </form>
          </div>

        </div>
    </div>
</div>
<?php include'footer.php'; ?>
