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
                  <th>Employee Name</th>
                  <th>Employee Role</th>
                  <th>Employee Email</th>
                  <th>Employee Seniors</th>
                </tr>
                <?php $n = 1; foreach ($get_all_user as $value): ?>

                <tr>
                  <td><?php echo $n++; ?></td>
                  <td><?php echo $value['user_name']; ?></td>
                  <td><?php echo $value['user_role']; ?></td>
                  <td><?php echo $value['user_email']; ?></td>
                  <td>
                    <?php
                      foreach($get_all_senior as $senior){
                        if ($value['user_id'] == $senior['junior_id']) {
                          foreach($get_all_user as $val){
                            if ($val['user_id'] == $senior['senior_id']) {
                              echo $val['user_name'] . ', ';
                            }
                          }
                        }
                      }
                    ?>
                  </td>
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
