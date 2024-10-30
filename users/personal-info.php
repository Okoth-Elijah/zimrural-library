<div class="modal fade" id="personal-info<?=$val->userid;?>" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header pink-purple p-4">
        <h4 class="modal-title text-center">Update Personal Info</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="POST" action="" enctype="multipart/form-data">
          <input type="hidden" value="<?=$val->userid; ?>" name="userid">
  
            <div class="form-group">
              <label for="pic">Profile Picture (required)</label>
              <input type="file" class="form-control" id="pic" name="pic" required>
            </div>

            <div class="form-group">
              <label>Description</label>
              <div style="width: 90%;">
                  <textarea class="form-control" rows="7" name="about_info"></textarea>
              </div>
            </div>

            <div class="modal-footer justify-content-between">
              <button type="submit" name="update_personal_profile_btn" class="btn pink-purple">Update User</button>
            </div>

          </form>
      </div>
    </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>