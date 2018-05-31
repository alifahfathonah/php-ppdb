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
    <h4 align="center"><u>Status</u></h4>
        <br>
        <div class="col-md-12">

          
          <br>
          <button type="button" class="btn btn-primary btn-md fa fa-plus" data-toggle="modal" data-target="#myModal"> Tambah data</button>
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title" align="center">Tambah data</h4>
            </div>
              <div class="modal-body">
                <form class="form-group" action="" method="post">
                    <label class="control-label">Nama Status</label>
                    <input type="text" name="nama" class="form-control" placeholder="Tambah status">
                    <input type="submit" name="submitstatus" value="simpan" class="btn btn-primary form-control">
                </form>
              </div>
          </div>
        </div>
        </div>
            <div class="col-md-12">
              <table class="table table-striped">
              <tbody>
                <thead>
              <tr>
                  <th>ID</th>
                  <th>Prodi</th>
                  <th>
                    Aksi
                  </th>
              </tr>
                </thead>
                <?php
                foreach ($data as $tampil) {
                ?>
              <tr>
                <td><?php echo $tampil->id; ?></td>
                <td><?php echo $tampil->nama; ?></td>
                <td>
                    <a href="<?php echo base_url('index.php/admin/delete2/').$tampil->id;?>" onclick="return confirm('Apakah anda ingin Menghapus Data ini?')" title="Hapus Data"><i class="material-icons prefix">delete</i></a>
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
</div>


<?php
$this->load->view('template/js');
?>
<?php
$this->load->view('template/foot');
?>
