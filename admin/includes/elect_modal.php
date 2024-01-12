<!-- Add -->
<div class="modal fade" id="addnew">
   <div class="modal-dialog">
       <div class="modal-content" style="background-color: #f3da93 ;color:black ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
              <button type="button" class=" btn btn-close btn-curve pull-right" " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Election Profile</b></h4>
            </div>
           <div class="modal-body">
              <form class="form-horizontal" method="POST" action="elections_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Title" class="col-sm-3 control-label"> Title </label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Title" name="Title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="No_of_Candidates" class="col-sm-3 control-label">No of Candidates</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="No_of_Candidates" name="No_of_Candidates" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Starting_Date" class="col-sm-3 control-label">Starting Date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="Starting_Date" name="Starting_Date" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Ending_Date" class="col-sm-3 control-label">Ending Date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="Ending_Date" name="Ending_Date" required>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left"style='background-color:  #c18936  ;color:black ; font-size: 12px; font-family:Times' data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-curve" style='background-color:  #46bb37  ;color:black ; font-size: 12px; font-family:Times' name="add"><i class="fa fa-save"></i> Add Election </button>
              </form>
            </div>
       </div>
   </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #f3da93 ;color:black ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
              <button type="button" class=" btn btn-close btn-curve pull-right" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Election Profile</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="elections_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_Title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_Title" name="Title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_No_of_Candidates" class="col-sm-3 control-label">No of Candidates</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="edit_No_of_Candidates" name="No_of_Candidates">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_Starting_Date" class="col-sm-3 control-label">Starting Date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_Starting_Date" name="Starting_Date">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_Ending_Date" class="col-sm-3 control-label">Ending Date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="edit_Ending_Date" name="Ending_Date">
                    </div>
                </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left"style='background-color:  #c18936  ;color:black ; font-size: 12px; font-family:Times' data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-curve"style='background-color:  #46bb37 ;color:black ; font-size: 12px; font-family:Times' name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #f3da93 ;color:black ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
              <button type="button" class=" btn btn-close btn-curve pull-right" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="elections_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE Election Profile</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left" style='background-color:  #c18936  ;color:black ; font-size: 12px; font-family:Times'data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-curve"style='background-color:  #46bb37  ;color:black ; font-size: 12px; font-family:Times' name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>
