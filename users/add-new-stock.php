<?php include 'header.php'; 
$stockid = base64_decode($_GET['i']);
$rx = dbRow("SELECT * FROM stock WHERE stock_id = '$stockid' ");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Stock History</h1>
    <hr>
    <h1 class="m-0 pink-purple">Stock Category: <b><?=$rx->stock_category.'</b>, Art Number: <b>'.$rx->stock_artnumber; ?></b> </h1>
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
        <form method="POST" action="">
          <input type="hidden" value="<?=$stockid; ?>" name="stock_id">
          <div class="form-group">
            <label>Cartons Topup</label>
            <input type="text" name="pdt_package" class="form-control" placeholder="Eg 50" required>
          </div>
<!-- `pdt_id`, `stock_id`, `pdt_category`, `pdt_artnumber`, `pdt_location`, `pdt_package`, `pdt_pairs`, `pdt_pair_price`, `pdt_desc`, `pdt_added_date`, `pdt_landing_pic`, `pdt_second_pic`, `pdt_third_pic`, `pdt_status`, `pdt_styles`, `pdt_token` -->
         <!--  <div class="form-group">
            <label>Stock Pairs Topup</label>
            <input type="text" name="pdt_pairs" class="form-control" oninput="addCommas(this)" placeholder="Eg 100">
          </div> -->

          <div class="form-group">
            <label>Stock New Price</label>
            <input type="text" name="pdt_pair_price" class="form-control" oninput="addCommas(this)" placeholder="Eg 5,000" value="<?=$rx->stock_pair_price; ?>" required>
          </div>

          <div class="form-group">
            <button type="submit" name="update_stock_details_btn" class="btn pink-purple">Update Stock</button>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>