<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title">Make an Employee Senior</h3>
            </div>
            <?php echo form_open('User/makeUserSenior'); ?>
              <div class="box-body">
                <?php $msg = $this->session->flashdata('message'); if(! empty($msg)): ?>
                <div class="alert alert-dismissible alert-success">
                  <?php echo $msg; ?>
                </div>
                <?php endif; ?>

                <?php $errmsg = $this->session->flashdata('errmessage'); if(! empty($errmsg)): ?>
                <div class="alert alert-dismissible alert-danger">
                  <?php echo $errmsg; ?>
                </div>
                <?php endif; ?>

                <div class="form-group">
                  <label>Employee List</label>
                  <select name="senior_id" class="form-control">
                    <?php foreach($get_all_user as $val): ?>

                    <option value="<?php echo $val['user_id'] ?>"><?php echo $val['user_name']; ?></option>

                    <?php endforeach; ?>
                  </select>
                </div>
                </div>

              <div class="box-body">
              <div class="form-group">
                <label>Make Senior To:</label>
                <select name="junior_id[]" multiple="" class="form-control">
                  <?php foreach($get_all_user as $val): ?>
                    <option value="<?php echo $val['user_id'] ?>"><?php echo $val['user_name']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              </div>


              </div>
              <div class="box-footer">

                <?php echo form_submit('', 'Submit', ['class' => 'btn btn-primary' ]); ?>
              </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </section>
