<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
      <div class="col-md-12">
          <div id="right" class="section scrollspy">
            <h1>Hello <u><?= $data->nama; ?></u></h1>
            <p>
              Di halaman ini anda bisa bisa meng-cek apa kah anda di terima atau tidaknya <br>
              Tunggu Proses Admin 1-6 hari.

            </p>
          </div>
          <div class="col-md-12">
            <h5><u>Data Diri</u></h5>
            <table class="table table-stripped">
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
                <th>NIK</th>
                <td><?= $data->nik; ?></td>
              </tr>
              <tr>
                <th>Status Diterima / Tidak</th>
                <td><i class="btn btn-primary"><?= $data->status; ?></i></td>
              </tr>



          </tbody>
        </table>
          </div>





        </div>
    </div>
</div>

<?php include'footer.php'; ?>