<div class="modal fade" id="view-pis<?=$rx->pdt_id;?>" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">New Product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
          
            <div class="form-group">
              <label for="artnumber">Landing Picture (required)</label>
              <input type="text" class="form-control" id="artnumber" name="pdt_artnumber" placeholder="Enter Art Number" required>
            </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn pink-purple" name="add_picture_product_details_btn">Save</button>
          </div>
          
        </form>
      </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>