<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>HR</b>M</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php $msg = $this->session->flashdata('message'); if(! empty($msg)): ?>
    <div class="alert alert-dismissible alert-danger">
      <?php echo $msg; ?>
    </div>
    <?php endif; ?>


      <?php echo form_open('Login/checkLogin'); ?>
      <div class="form-group has-feedback">
        <?php echo form_input(['type' => 'email', 'name' => 'user_email', 'class' => 'form-control', 'placeholder' => 'Your Email']); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('user_email', '<div class="text-danger">', '</div>'); ?>
      </div>
      <div class="form-group has-feedback">
        <?php echo form_password(['name' => 'user_password', 'class' => 'form-control', 'id' => 'user_password', 'placeholder' => 'Your Password']); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php echo form_error('user_password', '<div class="text-danger">', '</div>'); ?>


      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">

          <?php echo form_submit('', 'Sign In', ['class' => 'btn btn-primary btn-block btn-flat' ]); ?>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>
    <!-- /.social-auth-links -->



  </div>
  <!-- /.login-box-body -->
</div>
