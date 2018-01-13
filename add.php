<div id="add_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Employee</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_add">
 <input type="hidden" value="add" name="action" id="action">
                  <tr>
                  <div class="form-group">
                    <th for="name" class="control-label">Name:</th>
                    <input type="text" class="form-control" id="name" name="name"/>
                  </div>
                  <div class="form-group">
                    <th for="mobile num1" class="control-table">Mobile num1</th>
                    <input type="text" class="form-control" id="salary" name="salary"/>
                  </div>
   <div class="form-group">
                    <th for="mobile num2" class="control-table">Mobile num2</th>
                    <input type="text" class="form-control" id="age" name="age"/>
                  </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_add" class="btn btn-primary">Save</button>
            </div>
 </form>
        </div>
    </div>
</div>