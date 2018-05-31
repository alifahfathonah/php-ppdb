<?php include 'header.php'; ?>



<div class="container">
  <div class="row">
  <br><br>
  <div class="col s12 m1 offset-m2 l12">
   <div class="card-panel grey lighten-5 z-depth-5 ">
     <div class="row valign-wrapper">
       <div class="col s12">
         <span class="black-text">
  <center><h1>Regsiter</h1></center>
  <form class="" action="<?php echo base_url('index.php/home/daftar');?>" method="post">
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">person</i>
        <input id="icon_prefix" type="text" class="validate" name="nama" required="">
        <label for="icon_prefix">Nama</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input type="email" name="email" value="" class="validate" id="icon_prefix" required="">
        <label for="icon_prefix" data-success="Email Benar" data-error="Email Salah">Email</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="username" value="" class="validate" id="icon_prefix" required="">
        <label for="icon_prefix" data-success="Benar!">Username</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">lock</i>
        <input type="password" name="password" value="" class="validate" id="icon_prefix" required="">
        <label for="icon_prefix" data-success="Password Benar!">Password</label>
      </div>
    </div>


    <div class="row">
      <div class="radio-field col s6" style="margin-left:2px;">
          <span><i class="material-icons prefix">people  </i>   </span>
        <input type="radio" name="kelamin" value="Laki-Laki" id="laki">
        <label for="laki">Laki-Laki</label>

        <input type="radio" name="kelamin" value="Perempuan" id="perempuan">
        <label for="perempuan">Perempuan</label>
      </div>
    </div>

    <div class="row">
      <div class="col s12 l5 offset-m2">
      <p>
        <input type="checkbox" id="test5" required=""/>
        <label for="test5">Apakah Data Anda Sudah Benar.?</label>
      </p>
      </div>
    </div>



    <div class="row">
      <div class="input-filed col s12">

          <input type="submit" name="submit" value="Simpan" class="btn waves-effect waves light-blue">


      </div>
    </div>
  </div>


  </div>

  </form>
</span>
</div>
</div>
</div>
</div>
</div>


</div>




<?php include 'footer.php'; ?>
