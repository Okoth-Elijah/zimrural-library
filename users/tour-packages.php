<?php include 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Tour Packages </h1>
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
            Add New Tour Package
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
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $data = dbSQL("SELECT * FROM tours  ");
              $x = 1;
              if (sizeof($data) > 0) { 
                foreach ($data as $val) { 
                  $tz = dbRow("SELECT * FROM tour_categories WHERE tc_id = '".$val->tc_id."' "); ?>
                <tr>
                  <!-- `tour_id`, `tc_id`, `tour_title`, `tour_desc`, `tour_photo`, `tour_slug` -->
                  <td><?=$x++;?></td>
                  <td><?=ucwords($tz->tc_name); ?></td>
                  <td><?=$val->tour_title; ?></td>
                  <td><?=$val->tour_desc; ?></td>
                  <td><img src="<?=$val->tour_photo; ?>"></td>
                  <td>
                    <div class="dropdown">
                      <a class="btn pink-purple dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#edit-user<?=$val->tour_id; ?>" data-toggle="modal" aria-expanded="false">Edit</a>
                        <a class="dropdown-item" onclick="return confirm('Do you really want to Delete this User?. '); " href="?delete-user=<?=$val->tour_id ?>">Delete</a>
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
          <h4 class="modal-title">New Tour Package</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="" enctype="multipart/form-data">

            <div class="form-group">
                <label for="email">Tour Safaris</label>
                <select class="form-control" name="tc_id" required>
                  <option value="">--select Tour Safari--</option>
                  <?php $tox = $dbh->query("SELECT * FROM tour_categories ");
                  while ($rx = $tox->fetch(PDO::FETCH_OBJ)) { ?>
                    <option value="<?=$rx->tc_id;?>"><?=$rx->tc_name; ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="tour_title">Tour Package Title (required)</label>
                <input type="text" class="form-control" id="tour_title" name="tour_title" placeholder="Enter Tour Package Title" required>
              </div>

              <div class="form-group">
                <label for="tour_photo">Tour Package Photo</label>
                <input type="file" class="form-control" id="tour_photo" name="tour_photo" accept=".png,.jpg,.jpeg">
              </div>

              <!-- `tour_id`, `tc_id`, `tour_title`, `tour_desc`, `tour_photo`, `tour_slug` -->

              <div class="form-group">
                <label>Description</label>
                <div style="width: 95%;">
                    <textarea class="form-control" name="tour_desc" id="div_editor1"></textarea>
                </div>
              </div>

              <div class="modal-footer justify-content-between">
                <button type="submit" name="adding_tour_package_details_btn" class="btn pink-purple">Add User</button>
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
      var editor1 = new RichTextEditor("#div_editor1");
      const details = document.getElementById("details");
      function updateDetails() {
          details.value = editor1.innerHTML; // Capture the rich text content
          return true; // Allow form submission
      }
  </script>
<?php include 'footer.php'; ?>