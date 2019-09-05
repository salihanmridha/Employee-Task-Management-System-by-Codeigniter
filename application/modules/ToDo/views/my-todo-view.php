<section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">My ToDo List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">

              <table class="table table-hover">
                <tbody><tr>
                  <th>SL</th>
                  <th>ToDo name</th>
                  <th>Assigned From</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Comments</th>
                  <th>Action</th>
                </tr>
                <?php $n = 1; foreach ($get_my_todo_data as $value): ?>
                  <?php $todId = $value['todo_id']; ?>
                  <?php echo form_open("ToDo/updateMyToDo/{$todId}"); ?>
                <tr>

                  <td><?php echo $n++; ?></td>
                  <td><?php echo $value['todo_name']; ?></td>
                  <td><?php echo $value['user_name']; ?></td>
                  <td><?php echo $value['todo_date']; ?></td>
                  <?php if ($value['todo_status'] == 0): ?>
                  <td><span class="label label-warning">Pending</span></td>
                  <?php else: ?>
                    <td><span class="label label-success">Completed</span></td>
                  <?php endif; ?>
                  <td><?php $comment = $value['todo_comment']; echo form_textarea(['name' => 'todo_comment', 'class' => 'form-control', 'id' => 'todo_comment', 'placeholder' => 'Enter ToDo Comment', 'rows' => '2', 'value' => $comment]); ?></td>
                  <?php echo form_hidden("todoid", $todId); ?>
                  <?php if( date("Y-m-d") != $value['todo_date'] or $value['todo_status'] != 0 ): ?>
                  <td><?php echo form_submit('', 'Done', ['class' => 'btn btn-success', 'disabled' => '' ]); ?></td>
                  <?php else: ?>

                    <td><?php echo form_submit('', 'Done', ['class' => 'btn btn-success' ]); ?></td>
                  <?php endif; ?>
                </tr>
                <?php echo form_close(); ?>
              <?php endforeach; ?>

              </tbody></table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</section>
