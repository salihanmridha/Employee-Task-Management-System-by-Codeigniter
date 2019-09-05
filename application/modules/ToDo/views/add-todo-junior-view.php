<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title">Add My Junior Todo</h3>
            </div>
            <?php echo form_open('ToDo/addJuniorToDo'); ?>
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
              <div class="box-body">
                <div class="form-group">
                  <label>Junior List</label>
                  <select name="assign_to" class="form-control">
                    <?php if($this->session->userdata('user_role') != 'Administrator'): ?>
                    <?php foreach($get_junior as $val): ?>
                    <option value="<?php echo $val['user_id'] ?>"><?php echo $val['user_name']; ?></option>
                    <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if($this->session->userdata('user_role') == 'Administrator'): ?>
                    <?php foreach($get_all_user as $val): ?>
                    <option value="<?php echo $val['user_id'] ?>"><?php echo $val['user_name']; ?></option>
                    <?php endforeach; ?>
                    <?php endif; ?>
                  </select>
                </div>
            </div>


              </div>
              <div class="box-footer">
                <?php if((empty($get_junior) and $this->session->userdata('user_role') != 'Administrator') or empty($get_all_user)): ?>
                <?php echo form_submit('', 'Create My ToDo', ['class' => 'btn btn-primary', 'disabled' => '' ]); ?>
                <?php else: ?>
                  <?php echo form_submit('', 'Create My ToDo', ['class' => 'btn btn-primary' ]); ?>
                <?php endif; ?>
              </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </section>
