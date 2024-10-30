<?php include 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">All Blogs</h1>
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
            Add New Blog
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
                <th>Title</th>
                <th>Photo</th>
                <th>Description</th>
                <th>Date Added</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              // `blog_id`, `blog_title`, `blog_slug`, `blog_photo`, `blog_desc`, `blog_date`
              $blogxx = dbSQL("SELECT * FROM blogs ORDER BY blog_id DESC ");
              $x = 1;
              if (sizeof($blogxx) > 0) { 
                foreach ($blogxx as $val) { ?>
                <tr>
                  <td><?=$x++;?></td>
                  <td><?=ucwords($val->blog_title); ?></td>
                  <td><img src="<?=($val->blog_photo); ?>" style="width: 150px; height: 150px;"></td>
                  <td><?=($val->blog_desc); ?></td>
                  <td><?=date('jS F, Y',strtotime($val->blog_date)); ?></td>
                  <td>
                    <div class="dropdown">
                      <a class="btn pink-purple dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" onclick="return confirm('Do you really want to Delete this Blog Post?. '); " href="?delete-blog=<?=$val->blog_id ?>">Delete</a>
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
          <h4 class="modal-title">New Blog</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="" enctype="multipart/form-data">
            <input type="hidden" value="<?=$_SESSION['userid']; ?>" name="userid">
              <div class="form-group">
                <label for="blog_title">Blog Title (required)</label>
                <input type="text" class="form-control" id="blog_title" name="blog_title" placeholder="Enter Blog Title" required>
              </div>
              <!-- `blog_id`, `blog_title`, `blog_slug`, `blog_photo`, `blog_desc`, `blog_date` -->
              <div class="form-group">
                <label for="blog_photo">Activity Photo</label>
                <input type="file" class="form-control" id="blog_photo" name="blog_photo" accept=".png,.jpg,.jpeg">
              </div>

              <div class="form-group">
                <label>Description</label>
                <div style="width: 95%;">
                    <textarea class="form-control" name="blog_desc" id="blog_desc"></textarea>
                </div>
              </div>

              <div class="modal-footer justify-content-between">
                <button type="submit" name="add_new_blog_user" class="btn pink-purple">Add Blog</button>
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
      var editor1 = new RichTextEditor("#blog_desc");
      const details = document.getElementById("details");
      function updateDetails() {
          details.value = editor1.innerHTML; // Capture the rich text content
          return true; // Allow form submission
      }
  </script>
<?php include 'footer.php'; ?>