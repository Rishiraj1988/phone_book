
<!doctype>
<html>
<head>

<!--bootstrap-css--->
<link rel="stylesheet" href="bootstrap.min.css" />
<!--bootstrap-jquery--->
<script src="jquery.min.js"></script>
<!--bootstrap-javascript--->
<script src="bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
	<div class="text-center" style="margin-top: 50px; font-size: 20px;"> Phone Book      
  <a href="#" class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal">Add New Row </a></div> 
<br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
<?php
include_once('config.php');
$query="SELECT * FROM `user_data`";
$ras=mysql_query($query);
$oujh = 1;
while($row=mysql_fetch_array($ras)){

?>    
           
 
        <tr>
        <?php  $ram=$row['id']; ?>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td>
 <a href="#" class="btn btn-info small" data-toggle="modal" data-target="#myModal1<?php echo $oujh; ?>"> Edit </a>



<!--edit Modal -->
  <div class="modal fade" id="myModal1<?php echo $oujh; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Row</h4>
        </div>
        <div class="modal-body"> 
					<form method="post" action="save.php">
						<input type="hidden" name="action" value="edit">
						<input type="hidden" name="editid" value="<?php echo $row['id'];?>" />
						<label>Name</label>
						<input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>"/>
						<label>Email</label>
						<input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>" />
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" value="<?php echo $row['phone'];?>" />
						<label>Address</label>
			<input type="text" name="address" class="form-control" value="<?php echo  $row['address'];?>"/>

						
			
		
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-success" value="Submit" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  <!--edit  Modal Close -->


        	<a href="delete.php?did=<?php echo $row['id'];?>" class="btn btn-primary small delete"> Delete </a>


</td>
      </tr>
<?php $oujh =  $oujh+1;} ?>

    </tbody>
  </table>
</div>
</div>
</div>
	</div>
<script>
	$(".delete").click(function(){
	if (confirm('Are You Sure Delete')) {
     return true;
} else {
    return false;
}
});
</script>
	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">


                       <form method="post" action="save.php">
						  <input type="hidden" name="action" value="save">
						<label>Name</label>
						<input type="text" name="name" class="form-control" />
						<label>Email</label>
						<input type="email" name="email" class="form-control" />
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" />
						<label>Address</label>
						<input type="text" name="address" class="form-control" />
						
					
				
			


         </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-success" value="Submit" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
  <!-- Modal Close -->



</body>
</html>
