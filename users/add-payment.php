<div class="modal fade" id="add-payment<?=$val->order_invoice; ?>" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Payment for Invoice #<b><?=$val->order_invoice;?></b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
            <input type="hidden" value="<?=$val->order_invoice; ?>" name="order_invoice">
            <div class="form-group">
              <label for="amount_paid">Previous Balance: <b>Ugx. <?= number_format($balance); ?></b></label>
              <input type="text" class="form-control" id="amount_paid" name="amount_paid" placeholder="Enter Amount Eg. 10,000"  oninput="addCommas(this)" required>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn pink-purple" name="add_payments_invoice_btn">Add Payment</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          
        </form>
      </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>