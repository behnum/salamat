<!-- Settings Modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" role="dialog" aria-labelledby="settingsModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Settings</h4>
      </div>
      <div class="modal-body">
        <label>
            <input type="checkbox" value="">
            Receive updates via Email.
        </label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
        <div class="form-group">
            <label for="inputDate" class="col-sm-2 control-label">Date</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputDate" placeholder="Date" value="3/7/95">
            </div>
        </div>
        <div class="form-group">
            <label for="inputActiveCal" class="col-sm-2 control-label">Active Cal</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputActiveCal" placeholder="Active Cal" value="226">
            </div>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>