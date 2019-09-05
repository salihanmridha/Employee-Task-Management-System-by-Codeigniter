<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title">Add Employee</h3>
            </div>
            <?php echo form_open('User/adduser'); ?>
              <div class="box-body">
                <?php $msg = $this->session->flashdata('message'); if(! empty($msg)): ?>
                <div class="alert alert-dismissible alert-success">
                  <?php echo $msg; ?>
                </div>
                <?php endif; ?>
                <div class="form-group">
                  <label for="user_name">Employee Name</label>
                  <?php echo form_input(['name' => 'user_name', 'class' => 'form-control', 'id' => 'user_name', 'placeholder' => 'Enter Employee Name']); ?>
                  <?php echo form_error('user_name', '<div class="text-danger">', '</div>'); ?>

                  </div>
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="user_role">Employee Role</label>
                  <?php echo form_input(['name' => 'user_role', 'class' => 'form-control', 'id' => 'user_role', 'placeholder' => 'Enter Employee Role']); ?>
                  <?php echo form_error('user_role', '<div class="text-danger">', '</div>'); ?>
                </div>
              </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="user_email">Email address</label>
                  <?php echo form_input(['type' => 'email', 'name' => 'user_email', 'class' => 'form-control', 'id' => 'user_email', 'placeholder' => 'Enter Employee Email']); ?>
                  <?php echo form_error('user_email', '<div class="text-danger">', '</div>'); ?>
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="user_password">Password</label>
                  <?php echo form_password(['name' => 'user_password', 'class' => 'form-control', 'id' => 'user_password', 'placeholder' => 'Enter Employee Password']); ?>
                  <?php echo form_error('user_password', '<div class="text-danger">', '</div>'); ?>
                </div>
              </div>
              
              </div>
              <div class="box-footer">

                <?php echo form_submit('', 'Add Employee', ['class' => 'btn btn-primary' ]); ?>
              </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </section>
