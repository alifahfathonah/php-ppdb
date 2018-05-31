<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
                <div class="panel panel-primary">
                <div class="panel-heading">Daftar</div>
                </div>
                <div class="panel-body">
                        <form action="<?php echo base_url('index.php/home/daftar'); ?>" method="post">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="kelamin" class="form-control">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <p>
                                    <input type="checkbox" id="test5" required>
                                    <label for="test5">Apakah data sudah benar.?</label>
                                </p>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" value="Simpan" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                </div>
        </div>
    </div>
</div>