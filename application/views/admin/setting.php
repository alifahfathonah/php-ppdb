<?php
$this->load->view('template/head');
include 'header.php';
?>

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<div class="container">
    <div class="row">
      <div class="col s12 offset-m1 l12 offset-l2">
          
          <div class="col-md-12">
            <h5><u>Pengaturan Setting</u></h5>
            <p>
              Disini Anda Bisa Ubah Username, Email Dan Password
            </p>
            <br>
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/setting/edit/'.$data->id); ?>" method="post">
              <div class="row">
                <div class="col-md-12 form-group">
                <label for="icon_prefix" data-success="Benar!" class="control-label col-md-2">*Username</label>
                  <div class="form-group col-md-7">
                    <input class="form-control" id="icon_prefix" type="text" class="validate" name="username" value="<?= $data->username; ?>">
                  </div>
                  
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-12">
                <label class="control-label col-md-2" for="icon_prefix" data-success="Benar!" data-error="Email Salah!">Email</label>
                  <div class="form-group col-md-7">
                    <input  class="form-control" type="email" name="email" value="<?= $data->email; ?>" class="validate" id="icon_prefix">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-12">
                    <label class="control-label col-md-2" for="icon_prefix" data-success="Benar!">Password</label>
                    <div class="form-group col-md-7">
                      <input class="form-control" type="password" name="password" value="" class="validate" id="icon_prefix" required="">
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-2">
                    <input class="form-control btn btn-primary" type="submit" name="simpan3" value="Simpan">
                </div>
              </div>
            </div>


            </div>

            </form>
          </div>

        </div>
    </div>
</div>


<?php
$this->load->view('template/js');
?>
<?php
$this->load->view('template/foot');
?>
