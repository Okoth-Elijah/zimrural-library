<?php include 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Our Team</h1>
      </div><!-- /.col --><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <button type="button" class="btn pink-purple" data-toggle="modal" data-target="#modal-default">
            Add Team Member
          </button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <?php 
          if (isset($_SESSION['status'])) {
            echo $_SESSION['status'];
            unset($_SESSION['status']);
          }
          if (isset($_SESSION['loader'])) {
            echo $_SESSION['loader'];
            unset($_SESSION['loader']);
          }
          ?>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#No</th>
                <th>Fullname</th>
                <th>Photo</th>
                <th>Contact</th>
                <th>Bio/Description</th>
                <th>Date Added</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              // `team_id`, `team_fullname`, `team_photo`, `team_contact`, `team_desc`, `team_date`
              $result = dbSQL("SELECT * FROM team_member ORDER BY team_id DESC ");
              $x = 1;
              if (sizeof($result) > 0) { 
                foreach ($result as $val) { ?>
                <tr>
                  <td><?=$x++;?></td>
                  <td><?=ucwords($val->team_fullname); ?></td>
                  <td><img src="<?=($val->team_photo); ?>" style="width: 100px; height: 100px;"></td>
                  <td><?=ucwords($val->team_contact); ?></td>
                  <td><?=ucwords($val->team_desc); ?></td>
                  <td><?=date('jS F, Y',strtotime($val->team_date)); ?></td>
                  <td>
                    <div class="dropdown">
                      <a class="btn pink-purple dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" onclick="return confirm('Do you really want to Delete this Activity?. '); " href="?delete-team=<?=$val->team_id ?>">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php include 'edit-user.php'; }} ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-default" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header pink-purple p-4">
          <h4 class="modal-title">New Team Member</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="" enctype="multipart/form-data">
              <div class="form-group">
                <label for="team_position">Team Position (required)</label>
                <input type="text" class="form-control" id="team_position" name="team_position" placeholder="Enter Position" required>
              </div>

              <div class="form-group">
                <label for="team_fullname">Fullname (required)</label>
                <input type="text" class="form-control" id="team_fullname" name="team_fullname" placeholder="Enter Fullname" required>
              </div>

              <div class="form-group">
                <label for="team_contact">Phone Number (required)</label>
                <input type="text" class="form-control" id="team_contact" name="team_contact" maxlength="10" placeholder="Eg 07XXXXXXXX" required>
              </div>
              <div class="form-group">
                <label for="team_photo">Team Photo</label>
                <input type="file" class="form-control" id="team_photo" name="team_photo" accept=".png,.jpg,.jpeg">
              </div>

              <div class="form-group">
                <label>Description</label>
                <div style="width: 95%;">
                    <textarea class="form-control" name="team_desc" id="team_desc"></textarea>
                </div>
              </div>

              <div class="modal-footer justify-content-between">
                <button type="submit" name="add_new_team__user" class="btn pink-purple">Add Team</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>

          </form>
        </div>
      </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <script>
      var editor1 = new RichTextEditor("#team_desc");
      const details = document.getElementById("details");
      function updateDetails() {
          details.value = editor1.innerHTML; // Capture the rich text content
          return true; // Allow form submission
      }
  </script>
<?php include 'footer.php'; ?>