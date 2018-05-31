<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta ini sebagai responsive pada tampilan sajo lahh  -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Index</title>

  <!-- CSS ajo  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
  

</head>
<body>

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a href="<?php echo base_url() ?>" class="navbar-brand">Home</a>
          </div>
          <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><a href="<?php echo base_url('index.php/home/login') ?>">Login</a></li>
              <li><a href="<?php echo base_url('index.php/home/daftar') ?>">Daftar</a></li>
          </ul>
        </div>
      </nav>
        

</div>