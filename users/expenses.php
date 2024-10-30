<?php include 'header.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Expenses </h1>
        </div><!-- /.col --><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
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
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    <div class="row">
      <div class="col-12">
         
      <div class="card">
        <div class="card-header">
          <button class="btn pink-purple" data-toggle="modal" data-target="#modal-default"> Add Expense</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>NO#</th>
              <th>Title</th>
              <th>Amount</th>
              <th>Description</th>
              <th>Added By</th>
              <th>Date Added</th>
            </tr>
            </thead>
            <tbody>
            <!-- `exp_id`, `exp_title`, `exp_amount`, `exp_by`, `exp_desc`, `exp_date` -->
            <?php $expense = $dbh->query("SELECT * FROM expenses e, users u WHERE e.exp_by = u.userid ORDER BY e.exp_id DESC "); 
            $x = 1; 
            while ($rx = $expense->fetch(PDO::FETCH_OBJ)) { ?>
            <tr>
              <td><?=$x++; ?></td>
              <td><?=$rx->exp_title; ?></td>
              <td><?=$rx->exp_amount; ?></td>
              <td><?=$rx->exp_desc; ?></td>
              <td><?=$rx->firstname.' '.$rx->lastname; ?></td>
              <td><?=date('jS F, Y',strtotime($rx->exp_date)); ?></td>
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
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header pink-purple p-4">
          <h4 class="modal-title">New Expense</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="">
              <div class="form-group">
                <label for="exampleInputEmail1">Expense Title (required)</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="exp_title" placeholder="Enter Expense" required>
              </div>

              <div class="form-group">
                <label for="exp_amount">Amount (required)</label>
                <input type="text" class="form-control" id="exp_amount" name="exp_amount" placeholder="Eg, 10,000" oninput="addCommas(this)" required>
              </div>

              <div class="form-group">
                <label for="exp_by">Added By (required) </label>
                 <select class="form-control" name="exp_by" id="exp_by" required>
                   <option value="">--select user--</option>
                   <?php  
                   $expb = $dbh->query("SELECT * FROM users WHERE role = 'admin' ");
                   while($rz = $expb->fetch(PDO::FETCH_OBJ)){ ?>
                      <option value="<?=$rz->userid; ?>"><?=$rz->firstname.' '.$rz->lastname; ?>, Phone [<?=$rz->phone; ?>]</option>
                   <?php } ?>
                 </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Description (required)</label>
               <textarea rows="4" name="exp_desc" placeholder="Enter something about the Expense" class="form-control"></textarea>
              </div>

              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="adding_expense_btn" class="btn pink-purple">Add User</button>
              </div>

          </form>
        </div>
      </div>
      </div>
      <!-- /.modal-content -->
    </div>
     
<?php include 'footer.php'; ?>