<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col-md-12">
          
          <div class="col-md-12">
            <h5><u>Pengaturan Setting</u></h5>
            <p>
              Disini Anda Bisa Ubah Username, Email Dan Password
            </p>
            <br>
            <form class="form-horizontal" action="<?php echo base_url('index.php/member/setting/edit/'.$data->id); ?>" method="post">
              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="control-label col-md-2">*Username</label>
                  <div class="col-md-7 form-group">
                  <input type="text" class="form-control validate" name="username" value="<?= $data->username; ?>">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                    <label class="control-label col-md-2">Email</label>
                    <div class="col-md-7 form-group">
                    <input class="form-control" type="email" name="email" value="<?= $data->email; ?>">
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label class="control-label col-md-2">Password</label>
                  <div class="col-md-7 form-group">
                    <input class="form-control" type="password" name="password" value="" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-7"></div>
                  <div class="col-md-2 form-group">
                    <input type="submit" name="simpan3" value="Simpan" class="btn btn-primary form-control">
                </div>
                </div>
              </div>
            </div>


            </div>

            </form>
          </div>

        </div>
    </div>
</div>
<?php include 'footer.php'; ?>