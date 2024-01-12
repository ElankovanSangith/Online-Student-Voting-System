<?php include 'includes/session.php'; ?> 
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper"> 

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#DEE2E6 ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><b>
        Election Profile
     </b> </h1>
      <ol class="breadcrumb" style="color:black ; font-size: 17px; font-family:Times">
        <li><a href="#"><i class="fa fa-dashboard" ></i> Home</a></li>
        <li class="active" style="color:black ; font-size: 17px; font-family:Times" >Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>

<div class="row">
        <div class="col-xs-12" >
          <div class="box" style="background-color: #ADB5BD">
            <div class="box-header with-border" style="background-color: #ADB5BD">
          <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-curve " style="background-color: #2E8B57 ;color:black ; font-size: 12px; font-family:Times"><i class="fa fa-plus"></i> New</a>         
          </div>
            <div class="box-body">
              <table id="example1" class="table ">
                <thead>
                  <th>Title</th>
                  <th>No of Candidates</th>
                  <th>Starting Date</th>
                  <th>Ending Date</th>
                  <th>Status</th>
                  <th>Tools</th>
                 </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM elections";
                    $query = $conn->query($sql);
                    if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                    ?>
                      <tr >
                      <td><?php echo $row['Title']; ?></td>
                        <td><?php echo $row['No_of_Candidates']; ?></td>
                        <td><?php echo $row['Starting_Date']; ?></td>
                        <td><?php echo $row['Ending_Date']; ?></td>
                        <td>
                            <?php
                            if ($row['status'] == 0) {
                                echo '<a class="btn btn-sm btn-success" href="status.php?id=' . $row['id'] . '& status=1">Active</a>';
                            } else {
                                echo '<a class="btn btn-sm btn-danger" href="status.php?id=' . $row['id'] . '& status=0">Inactive</a>';
                            }
                            ?>
                        </td>
                        <td>
                           
                           <?php echo "<button class='btn btn-success btn-sm edit btn-curve' style='background-color: #9CD095 ;color:black ; font-size: 12px; font-family:Times' ' data-id='".$row['id']."' ><i class='fa fa-edit'></i> Edit</button>"?>
                            <?php echo "<button class='btn btn-danger btn-sm delete btn-curve' style='background-color:#ff8e88 ;color:black ; font-size: 12px; font-family:Times ' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>"?>
                            

                          </td>
                      </tr>
                          <?php
                    }
                          } else {
                              echo "<tr><td colspan='4'>No data found</td></tr>";
                          }
                          ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
  
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/elect_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

});
function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'elections_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#edit_Title').val(response.Title);
      $('#edit_No_of_Candidates').val(response.No_of_Candidates);
      $('#edit_Starting_Date').val(response.Starting_Date);
      $('#edit_Ending_Date').val(response.Ending_Date);
  }
  });
}

</script>
</body>
</html>



