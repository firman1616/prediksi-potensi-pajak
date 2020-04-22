<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title><?php echo $title ?></title>

  <!-- Favicons -->
  <link href="assets/icon/favicon.png" rel="icon">
  <!-- <link href="assets/template_lws/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('') ?>assets/template_lws/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url('') ?>assets/template_lws/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('') ?>assets/template_lws/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/template_lws/css/style-responsive.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <div class="container">
    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash') ?>"></div>
  </div>

  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" method="post" action="<?php echo base_url('login/login_form') ?>">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="User ID" autofocus name="username">
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password"><br><br>
          <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          <div class="registration">
            <h3>APLIKASI PERAMALAN</h3>
            <h3>POTENSI PAJAK DAERAH</h3>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url('') ?>assets/template_lws/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/template_lws/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?php echo base_url('') ?>assets/template_lws/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("assets/template_lws/img/tax_time.jpg", {
      speed: 500
    });
  </script>
  <script src="<?php echo base_url('') ?>assets/template_lws/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/alert.js"></script>
</body>

</html>
