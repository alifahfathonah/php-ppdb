<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col-md-12">
          
          <div class="col-md-12">
            <h4><u>Nilai Ujian Nasional</u></h4>
            <form class="form-horizontal" action="<?php echo base_url('index.php/member/nilai/edit/'.$data->id); ?>" method="post">            

              <div class="row">
                <div class="col-md-12 form-group">
                <label class="control-label col-md-2">Nilai IPA</label>
                <div class="col-md-7 form-group">
                  <input type="NUMBER" class="form-control validate" name="ipa1" value="<?= $data->ipa1; ?>" size="3">
                  </div>
                </div>
                
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                <label class="control-label col-md-2">Nilai Matematika</label>
                <div class="col-md-7 form-group">
                  <input type="NUMBER" class="form-control validate" name="mtk1" value="<?= $data->mtk1; ?>">
                </div>  
                </div>
                
              </div>

              <div class="row">
                <div class="form-group col-md-12">
                  <label class="control-label col-md-2">Nilai B.Indonesia</label>
                  <div class="col-md-7 form-group">
                  <input type="NUMBER" class="form-control validate" name="indo1" value="<?= $data->indo1; ?>">
                </div>
                
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label class="control-label col-md-2">Nilai B.inggris</label>
                  <div class="col-md-7 form-group">
                  <input type="NUMBER" class="form-control validate" name="bing1" value="<?= $data->bing1; ?>">
                </div>
                
              </div>


              <div class="row">
                <div class="col-md-12 form-group">
                    <div class="col-md-7"></div>
                    <div class="col-md-2 form-group">
                    <input type="submit" name="simpan2" value="simpan" class="form-control btn btn-primary">
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
<?php include'footer.php'; ?>