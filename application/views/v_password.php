<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPD DISKOMINFO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
  <script src="<?php echo base_url()?>assets/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url()?>assets/bootstrap/dist/js/bootstrap.min.js"></script>    
    <script>

    function myFunction() {
        var x = document.getElementById("myInput");
        if(x.type === "password") {
            x.type = "text";
        }else{
            x.type = "password";
        }
    }
  </script>
   <title>   
 
   </title>   
 </head>   
 <body style="background-image: url(assets/gambar/bglogin.jpg); background-size: cover;" class="background hold-transition login-page">
<div class="login-box" style="margin-top:60px;">
  <div style="color: black;" class="login-logo"><br>

    <center><b>SPD</b>DISKOMINFO</center>
  </div>  
    <center><div class="login-box-body" style="background: rgba(0,0,0,0.2)">
    <p class="login-box-msg" style="color: black"><b>Hello <span><?php echo $nama; ?></span>, Silakan isi password baru anda.</b></p> 
   <?php echo form_open('lupa_password/reset_password/token/'.$token); ?>  
    <form class="" action="<?php echo base_url(); ?>" method="post">
      <div class="form-group has-feedback">
     <input type="password" class="form-control" name="password" placeholder="Password Baru" value="<?php echo set_value('password'); ?>"/> 
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
          <p> <?php echo form_error('password'); ?> </p>
        <div class="form-group has-feedback">  
     <input type="password" class="form-control" placeholder="Konfirmasi Password" name="passconf" value="<?php echo set_value('passconf'); ?>"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
   <p> <?php echo form_error('passconf'); ?> </p> 
   <p>   
     <input type="submit" class="btn btn-primary btn-block btn-flat" name="btnSubmit" value="Reset" />   
   </p>   
        </form>
 </body>   
 </html>   