<?php include 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Tour Photos </h1>
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
            Add New Tour Photo
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
                <th>Tour Title</th>
                <th>Photo</th>
              </tr>
            </thead>
            <tbody>
              <?php $data = $dbh->query("SELECT * FROM gallery_photos g, tours t WHERE g.tour_id = t.tour_id");
              $x = 1;
              while($val = $data->fetch(PDO::FETCH_OBJ)) { ?>
                <tr>
                  <td><?=$x++;?></td>
                  <td><?=$val->tour_title; ?></td>
                  <td><img style="width: 200px;" src="<?=$val->photo; ?>"></td>
                </tr>
              <?php } ?>
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
          <h4 class="modal-title">New Tour Photo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="" enctype="multipart/form-data">

            <div class="form-group">
                <label for="email">Tour Destination</label>
                <select class="form-control" name="tour_id" required>
                  <option value="">--select Tour Safari--</option>
                  <?php $tox = $dbh->query("SELECT * FROM tours ");
                  while ($rx = $tox->fetch(PDO::FETCH_OBJ)) { ?>
                    <option value="<?=$rx->tour_id;?>"><?=$rx->tour_title; ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="tour_photo">Tour Package Photo</label>
                <input type="file" class="form-control" id="tour_photo" name="tour_photo" accept=".png,.jpg,.jpeg">
              </div>

              <div class="modal-footer justify-content-between">
                <button type="submit" name="adding_tour_photos_btn" class="btn pink-purple">Add Photo</button>
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