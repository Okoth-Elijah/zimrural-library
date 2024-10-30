<?php include 'header.php';
$order = $_GET['i'];
$rxx = dbRow("SELECT * FROM orders WHERE order_invoice = '$order' ");
$user = dbRow("SELECT * FROM users WHERE userid = '".$rxx->userid."' ");
$res = $dbh->query("SELECT * FROM cart WHERE order_invoice = '$order' ");
 ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <!-- /.card-header -->
        <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">
                <a href="orders?completed" class="fas fa-backward"> Go Back</a> #Invoice - <?=$order; ?>              
              <hr style="border-bottom: 1px solid #ae1c9a;">
             <?=$user->firstname.' '.$user->lastname; ?> <br>
             <hr style="border-bottom: 1px solid #ae1c9a;">
            Invoice <b style="color: #ae1c9a; ">#<?=$order; ?> Payment History</b>
          </h1>
            </div><!-- /.col --><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#No</th>
                <th>Invoice</th>
                <th>Amount Paid(USh)</th>
                <th>Date Paid</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              // `ph_id`, `order_invoice`, `amount_paid`, `date_paid`
              $order_details = $dbh->query("SELECT * FROM payment_history WHERE order_invoice = '$order' ");
              $x = 1;
              while($val = $order_details->fetch(PDO::FETCH_OBJ)){ ?>
                <tr>
                  <td><?=$x++; ?></td>
                  <td><b><?=$val->order_invoice;?></b></td>
                  <td><b><?=number_format($val->amount_paid);?></b></td>
                  <td><?=date('jS F, Y',strtotime($val->date_paid)); ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <?php
            // `cart_id`, `userid`, `pdt_id`, `cart_status`, `cart_qnty`, `cart_amount`, `cart_pairs`, `cart_date`
            $sub_total = $dbh->query("SELECT SUM(cart_qnty * cart_amount * cart_pairs) AS 'total_amount' FROM cart WHERE order_invoice = '$order' ");

            if ($sub_total === false) {
                // Handle the error
                $error_info = $dbh->errorInfo();
                echo "Error executing the query: " . $error_info[2];
            } else {
                $ctotal = $sub_total->fetch(PDO::FETCH_OBJ);
                $total_amount = $ctotal->total_amount;
                // Display the subtotal
                $AmountPaid = dbRow("SELECT SUM(amount_paid) AS 'AmountPaidd' from payment_history WHERE order_invoice = '$order' ");
                ?>
                <div class="wishlist-btn cart-btn">
                  <h5>Total Amount: Shs. <b><?= number_format($total_amount); ?></b> | 
                        Amount Paid: Shs. <b><?=number_format($AmountPaid->AmountPaidd); ?></b> | Balance: Shs <b><?= number_format($total_amount - $AmountPaid->AmountPaidd); ?></b></h5>
                </div>
                <?php
            }
            ?>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-default" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header pink-purple p-4">
          <h4 class="modal-title">New Order</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="">
              <div class="form-group">
                <label for="exampleInputEmail1">Firstname (required)</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" placeholder="Enter Firstname" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Lastname (required)</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="lastname" placeholder="Enter Lastname" required>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Gender (required)</label>
                <select class="custom-select" id="exampleSelectBorder" name="gender" required>
                  <option selected value="">--Choose--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>

                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone Number (required) </label>
                  <input type="text" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Phone Eg. 07xxxxxxxxx" required>
                </div>
               <!-- `userid`, `firstname`, `lastname`, `phone`, `gender`, `email`, `password`, `role`, `token`, `account_status`, `date_registered` -->

              <div class="form-group">
                <label for="exampleInputEmail1">Email (optional)</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Password (required)</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
              </div>

              <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="add_register_btn" class="btn pink-purple">Add Customer</button>
            </div>
          </form>
        </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>

<?php include 'footer.php'; ?>