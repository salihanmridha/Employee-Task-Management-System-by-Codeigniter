<section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">My Junior ToDo List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">

              <table class="table table-hover">
                <tbody><tr>
                  <th>SL</th>
                  <th>ToDo name</th>
                  <th>Assigned To</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Comments</th>
                </tr>
                <?php $n = 1; foreach ($get_my_junior_todo_data as $value): ?>

                <tr>

                  <td><?php echo $n++; ?></td>
                  <td><?php echo $value['todo_name']; ?></td>
                  <td>
                    <?php
                      foreach($get_all_user as $users){
                        if ($users['user_id'] == $value['assign_to']) {
                          echo $users['user_name'];
                        }
                      }
                    ?>
                  </td>
                  <td><?php echo $value['todo_date']; ?></td>
                  <?php if ($value['todo_status'] == 0): ?>
                  <td><span class="label label-warning">Pending</span></td>
                  <?php else: ?>
                    <td><span class="label label-success">Completed</span></td>
                  <?php endif; ?>
                  <td><?php $comment = $value['todo_comment']; echo form_textarea(['name' => 'todo_comment', 'class' => 'form-control', 'id' => 'todo_comment', 'placeholder' => 'Enter ToDo Comment', 'rows' => '2', 'value' => $comment]); ?></td>
                </tr>

              <?php endforeach; ?>

              </tbody></table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</section>
