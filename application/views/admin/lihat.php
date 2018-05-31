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
      <div class="">
          
            <h4 align="center">Lihat Data Siswa Atas Nama <u><?php echo $tampil->nama; ?></u></h4>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-9">
            <h3><u>Data Diri</u></h5>
            <table class="table table-striped">
            <tbody>
            <tr>
                <th>Nama</th>
                <td><?php echo $tampil->nama; ?></td>
            </tr>
            <tr>
              <th>NISN</th>
              <td><?php echo $tampil->nisn; ?></td>
            </tr>
            <tr>
              <th>Tempat Lahir</th>
              <td><?php echo $tampil->tmp_lahir; ?></td>
            </tr>
            <tr>
              <th>Tanggal Lahir</th>
              <td><?php echo $tampil->tgl_lahir; ?></td>
            </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $tampil->kelamin; ?></td>
              </tr>
              <tr>
                <th>NIK</th>
                <td><?php echo $tampil->nik; ?></td>
              </tr>
              <tr>
                <th>Agama</th>
                <td><?php echo $tampil->agama; ?></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td><?php echo $tampil->alamat; ?></td>
              </tr>
              <tr>
                <th>Asal Sekolah</th>
                <td><?php echo $tampil->asal_sekolah; ?></td>
              </tr>
          </tbody>
        </table>
      </div>
          </div>
          <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-9">
            <h3><u>Prodi Yang Di Pilih</u></h5>
            <table class="table table-striped">
            <tbody>
            <tr>
                <th>Prodi Pertama</th>
                <td><?php echo $tampil->prodi1; ?></td>
            </tr>
            <tr>
              <th>Prodi Kedua</th>
              <td><?php echo $tampil->prodi2; ?></td>
            </tr>
          </tbody>
        </table>
          </div>
          </div>

          <div class="col-md-1"></div>
            <div class="col-md-9">
            <br><br>
            <h5><u>Nilai Ujian</u></h5>
            <table class="table table-striped">
            <tbody>
              <tr>
                <th>Ipa</th>
                <td><?php echo $tampil->ipa1; ?></td>
              </tr>
              <tr>
                  <th>Mtk</th>
                  <td><?php echo $tampil->mtk1; ?></td>
                </tr>
                <tr>
                    <th>Bahasa Indo</th>
                    <td><?php echo $tampil->indo1; ?></td>
                  </tr>
                  <tr>
                    <th>Bahasa inggris</th>
                    <td><?php echo $tampil->bing1; ?></td>
                  </tr>
            </tbody>
            </table>

            
          <div class="col s12">
            
            <h5><u>Status</u></h5>
            <table class="table table-striped">
            <tbody>
            <tr>
                <th>Status Lulus / Tidak Lulus</th>
                <td><i class="btn btn-pulse"><?php echo $tampil->status; ?></i></td>
            </tr>
          </tbody>
        </table>
        <br><br>
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
