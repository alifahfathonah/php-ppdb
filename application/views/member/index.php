<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col-md-12">
          <div id="right" class="section scrollspy">
            <h1>Selamat Datang Siswa <u><?= $data->nama; ?></u></h1>
            <p>
              Hello semuanya, selamat datang di Website Penerimaan Perserta siswa baru Smkn 1 Dlanggu,
              di mohon kepada semua siswa yang ingin mendaftar agar segera melengkapi data diri yang telah di camtumkan di
              bawah ini agar cepat di isi :
            </p>
            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Tutorial mengisi data</button>
            <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" align="center">Tutorial Daftar</h4>
              </div>
                <div class="modal-body">
                  <table class="table">
                  
                    <thead>
                  <tr>
                      <th>Halaman</th>
                      <th>Keterangan</th>
                  </tr>
                    </thead>
                  <tr>
                    <th>Home</th>
                    <td>Halaman Depan Pada Menu Siswa</td>
                  </tr>
                  <tr>
                    <th>Data diri</th>
                    <td>Anda Bisa Mengisi Semua Data Diri anda Di halaman ini</td>
                  </tr>
                  <tr>
                    <th>Jurusan </th>
                    <td>Anda Menentukan Jurusan Didalam menu ini </td>
                  </tr>
                    <tr>
                      <th>nilai</th>
                      <td>Di gunakan untuk mengisi Nilai Anda</td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td>didalam menu ini anda bisa Melihat status anda(apakah diterima atau tidak)</td>
                    </tr>
                    
                    <tr>
                      <th>Setting Akun</th>
                      <td>Di gunakan untuk mengubah informasi akun ex(ubah,username,email,password dll)</td>
                    </tr>
                    <tr>
                      <th></th>
                      <td>
                        <div class="modal-footer" >
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                        </div></td>
                    </tr>
                    
                </tbody>
                
              </table>
                </div>
              </div>
              </div>  
            </div>
          </div>
          <div class="col-md-12">
            <h5><u>Data Diri</u></h5>
            <table class="table table-striped">
            <tbody>
            <tr>
                <th>Nama</th>
                <td><?= $data->nama; ?></td>
            </tr>
            <tr>
              <th>NISN</th>
              <td><?= $data->nisn; ?></td>
            </tr>
            <tr>
              <th>Tempat Lahir</th>
              <td><?= $data->tmp_lahir; ?></td>
            </tr>
            <tr>
              <th>Tanggal Lahir</th>
              <td><?= $data->tgl_lahir; ?></td>
            </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td><?= $data->kelamin; ?></td>
              </tr>
              <tr>
                <th>NIK</th>
                <td><?= $data->nik; ?></td>
              </tr>
              <tr>
                <th>Agama</th>
                <td><?= $data->agama; ?></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td><?= $data->alamat; ?></td>
              </tr>
              <tr>
                <th>Asal Sekolah</th>
                <td><?= $data->asal_sekolah; ?></td>
              </tr>
          </tbody>
        </table>
          </div>

          <div class="col-md-12">
            <br><br>
            <h5><u>Prodi Yang Di Pilih</u></h5>
            <table class="table table-striped">
            <tbody>
            <tr>
                <th>Jurusan Pertama</th>
                <td><?= $data->prodi1; ?></td>
            </tr>
            <tr>
              <th>Jurusan Kedua</th>
              <td><?= $data->prodi2; ?></td>
            </tr>
          </tbody>
        </table>
          </div>

          <div class="col-md-12">
            <br><br>
            <h5><u>Nilai Ujian</u></h5>
            <table class="table table-striped">
            <tbody>
            <tr>
                <th>Nilai Ipa</th>
                <td><?= $data->ipa1; ?></td>
            </tr>
            <tr>
              <th>Nilai Mtk</th>
              <td><?= $data->mtk1; ?></td>
            </tr>
            <tr>
                <th>Nilai Bahasa Indonesia</th>
                <td><?= $data->indo1; ?></td>
            </tr>
            <tr>
                <th>Nilai Bahasa Inggris</th>
                <td><?= $data->bing1; ?></td>
            </tr>
          </tbody>
        </table>
          </div>

          

        </div>
    </div>
</div>

</div>
                
<?php include 'footer.php'; ?>