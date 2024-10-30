<div class="modal fade" id="edit-user<?=$val->userid; ?>" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header pink-purple p-4">
        <h4 class="modal-title text-center">Update User Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="">
          <input type="hidden" value="<?=$val->userid; ?>" name="userid">
            <div class="form-group">
              <label for="fullname">Fullname (required)</label>
              <input type="text" class="form-control" id="fullname" value="<?=$val->fullname; ?>" name="fullname" required>
            </div>
            <div class="form-group">
              <label for="email">Email (required)</label>
              <input type="text" class="form-control" id="email" name="email" value="<?=$val->email; ?>" required>
            </div>

              <div class="form-group">
                <label for="exampleInputEmail1">User Type (required)</label>
                <select class="custom-select" id="exampleSelectBorder" name="role" required>
                  <option value="">--Select User Role--</option>
                  <option value="admin" <?php if($val->role == 'admin') echo 'selected'; ?>>Administrator</option>
                  <option value="staff" <?php if($val->role == 'staff') echo 'selected'; ?>>Staff Member</option>
                </select>
              </div>

            <div class="modal-footer justify-content-between">
              <button type="submit" name="update_user_btn" class="btn pink-purple">Update User</button>
            </div>
          </form>
      </div>
    </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>