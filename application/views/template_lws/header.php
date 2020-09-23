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
  <link href="assets/template/img/favicon.png" rel="icon">
  <link href="assets/template/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('') ?>assets/template/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url('') ?>assets/template/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>assets/template/lib/gritter/css/jquery.gritter.css" />

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('') ?>assets/template/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/template/css/style-responsive.css" rel="stylesheet">
  <script src="<?php echo base_url('') ?>assets/template/lib/chart-master/Chart.js"></script>

  <!-- Data Table -->
  <link href="<?php echo base_url('') ?>assets/template/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="<?php echo base_url('') ?>assets/template/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('') ?>assets/template/lib/advanced-datatable/css/DT_bootstrap.css" />

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo base_url('login/keluar') ?>">Logout</a></li>
        </ul>
      </div>
    </header>