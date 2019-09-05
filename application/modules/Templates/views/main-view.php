<?php $this->load->view('header.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('user_name'); ?></p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">

        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('Dashboard'); ?>"><i class="fa fa-circle-o"></i> Dashboard </a></li>
          </ul>
        </li>
        <!-- <li class="header">LABELS</li> -->

      </ul>
      <?php if($this->session->userdata('user_role') == 'Administrator'): ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('User/addUserPage'); ?>"><i class="fa fa-circle-o"></i> Add User </a></li>
            <li class=""><a href="<?php echo base_url('User/viewUserPage'); ?>"><i class="fa fa-circle-o"></i> View All User </a></li>
            <li class=""><a href="<?php echo base_url('User/makeUserSeniorPage'); ?>"><i class="fa fa-circle-o"></i> Make Employee Senior </a></li>
          </ul>
        </li>
        <!-- <li class="header">LABELS</li> -->

      </ul>
      <?php endif; ?>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>ToDo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('ToDo/addToDoPage'); ?>"><i class="fa fa-circle-o"></i> Create My ToDo </a></li>
            <li class=""><a href="<?php echo base_url('ToDo/viewMyToDo'); ?>"><i class="fa fa-circle-o"></i> View My ToDo </a></li>
            <li class=""><a href="<?php echo base_url('ToDo/addToDoJuniorPage'); ?>"><i class="fa fa-circle-o"></i> Create My Junior ToDo </a></li>
            <li class=""><a href="<?php echo base_url('ToDo/viewMyJuniorToDo'); ?>"><i class="fa fa-circle-o"></i> View My Junior ToDo </a></li>
          </ul>
        </li>
        <!-- <li class="header">LABELS</li> -->

      </ul>


    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view($content_view); ?>
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('footer.php'); ?>
