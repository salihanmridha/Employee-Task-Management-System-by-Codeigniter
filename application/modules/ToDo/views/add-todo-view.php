<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title">Add My Todo</h3>
            </div>
            <?php echo form_open('ToDo/addMyToDo'); ?>
              <div class="box-body">
                <?php $msg = $this->session->flashdata('message'); if(! empty($msg)): ?>
                <div class="alert alert-dismissible alert-success">
                  <?php echo $msg; ?>
                </div>
                <?php endif; ?>
                <div class="form-group">
                  <label for="todo_name">ToDo name</label>
                  <?php echo form_input(['name' => 'todo_name', 'class' => 'form-control', 'id' => 'todo_name', 'placeholder' => 'Give your todo name']); ?>
                  <?php echo form_error('todo_name', '<div class="text-danger">', '</div>'); ?>

                  </div>
                </div>


              <div class="box-body">
                <div class="form-group">
                  <label for="todo_comment">ToDo Comment</label>
                  <?php echo form_textarea(['name' => 'todo_comment', 'class' => 'form-control', 'id' => 'todo_comment', 'placeholder' => 'Enter ToDo Comment', 'rows' => '4']); ?>
                </div>
              </div>
              </div>
              <div class="box-footer">

                <?php echo form_submit('', 'Create My ToDo', ['class' => 'btn btn-primary' ]); ?>
              </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </section>
