<?php
$this->load->view('template/head');
include 'header.php';
?>


<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>


<script src="<?php echo base_url('ckeditor/ckeditor.js'); ?>">
  </script>
<div class="container">
    <div class="row">
      <div class="col-md-12">
              <h4>Edit Config Setting website</h4> <br>
          <form class="form-horizontal" action="" method="post">
            <div class="row">
              <div class="form-group col-md-12">
              <label class="control-label col-md-2" for="icon_prefix" data-success="Benar!">Judul Website</label>
                <div class="form-group col-md-5">
                <input id="icon_prefix" class="form-control validate" type="text"  name="judul" value="<?php echo $data->judul ?>">
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-md-2"></div>
              <div class="form-group col-md-8">
  	             <textarea name="text_home" class="ckeditor" name="editor"><?php echo $data->text_home ?></textarea>
              </div>
            </div>

            <div class="row">
            <div class="col-md-2"></div>
              <div class="col-md-8">
  	             <textarea name="text_pengumuman" class="ckeditor" name="editor"><?php echo $data->text_pengumuman ?></textarea>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-12">
                <label class="control-label col-md-2" for="icon_prefix">About</label>  
                <div class="col-md-5">
                <textarea class="form-control" name="about" id="icon_prefix" required=""><?php echo $data->about ?></textarea>
              </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-12">
                <label for="icon_prefix" class="control-label col-md-2">Informasi</label>  
                <div class="col-md-5">
                <textarea class="form-control" name="informasi" id="icon_prefix" required=""><?= $data->informasi; ?></textarea>
              </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-12">
                <label class="control-label col-md-2" for="icon_prefix">Alamat</label>
                <div class="col-md-5">
                <textarea class="form-control" name="alamat" id="icon_prefix" required=""><?= $data->alamat; ?></textarea>
              </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-12">
                <label class="control-label col-md-2" for="icon_prefix">Pemilik</label>
                <div class="col-md-5">
                <input id="icon_prefix" type="text" class="form-control validate" name="pemilik" value="<?= $data->pemilik; ?>" required="">
              </div>
              </div>
            </div>




              <div class="col-md-9"></div>
              <div class="form-group col-md-2">
              <input type="submit" name="submit00" value="Simpan" class="form-control btn btn-primary">
            </div>
          </form>


      </div>
    </div>
</div>


<?php
$this->load->view('template/js');
?>
<?php
$this->load->view('template/foot');
?>
