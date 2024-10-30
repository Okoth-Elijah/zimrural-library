<?php include 'header.php'; 
  $pdt_id = base64_decode($_GET['pid']);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">First Product Photo </h1>
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
              <!-- /.card-header -->
              <div class="card-body">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">New 1<sup>st</sup> Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="" enctype="multipart/form-data">

                        <div class="form-group">
                          <input type="hidden" value="<?=$pdt_id; ?>" name="pdt_id">
                          <label for="pdt_landing_pic">First Product Picture (required)</label>
                          <input type="file" class="form-control" id="pdt_landing_pic" name="pdt_landing_pic" accept=".jpg,.png,.jpeg" required>
                        </div>

                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn pink-purple" name="upload_first_product_pic_details_btn">Save</button>
                        </div>

                    </form>
                  </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

  <?php include 'footer.php'; ?>