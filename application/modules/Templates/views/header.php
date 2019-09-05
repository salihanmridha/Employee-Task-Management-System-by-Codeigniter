<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HRM | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?= link_tag('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>
  <!-- Font Awesome -->

  <?= link_tag('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>
  <!-- Ionicons -->
  <?= link_tag('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>
  <!-- Theme style -->
  <?= link_tag('assets/dist/css/AdminLTE.min.css'); ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <?= link_tag('assets/dist/css/skins/_all-skins.min.css'); ?>
  <!-- Morris chart -->
  <?= link_tag('assets/bower_components/morris.js/morris.css'); ?>
  <!-- jvectormap -->
  <?= link_tag('assets/bower_components/jvectormap/jquery-jvectormap.css'); ?>
  <!-- Date Picker -->
  <?= link_tag('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>
  <!-- Daterange picker -->
  <?= link_tag('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>
  <!-- bootstrap wysihtml5 - text editor -->
  <?= link_tag('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HR</b>M</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">


          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('user_name'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('user_name'); ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <?php echo anchor('Login/userLogout', 'Sign Out', ['class' => 'btn btn-default btn-flat']); ?>

                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
