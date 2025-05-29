<?php
 include("header_worker.php");
 include("connection.php");
?>

<style type="text/css">

.r{
	width: 20px;
	height: 20px;
}
</style>
<?php
	
	 session_start();

	$worker_id = $_SESSION['worker_id'];

    $query = "SELECT * FROM tbl_workers WHERE worker_id = " . $worker_id;
  
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result);


    $name  =  $row['name'];
    $mobile=  $row['mobile'];
      $age =  $row['age'];
    $gender =  $row['gender'];
	  $address =  $row['address'];
	  $work_category_id =  $row['work_category_id'];
	  $location_id =  $row['location_id'];
		$work_experience =  $row['work_experience'];
 
  
?>
	
<br><br><br><br><br><br><br>
	<div class="row"> 
		<?php 
								    if(isset($_GET['status']))
								    {

								        echo "<h2 style='color:red;text-align:center'> Profile Updated... </h2> <br> <br>";

								    
								    }

								?>
		<div class="col-lg-4"> </div>

		<div class="col-lg-4">
			<h1 class="text-center"> Worker Profile </h1>
			<hr>
			<form action="update_profile.php" method="post" >
				<div class="form-group">
					<label for="email">Worker Id:</label>
					<input type="text" class="form-control" id="worker_id" name="worker_id" value="<?php echo $worker_id;?>" readonly>
				</div>	<br>

				<div class="form-group">
					<label for="email">Name:</label>
					<input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>" required>
				</div>
				<br>
				<div class="form-group">
					<label for="pwd">Mobile:</label>
					<input type="number" class="form-control" id="mobile" name="mobile" value="<?php echo $mobile;?>" required>
				</div>
				<br>
				<div class="form-group">
					<label for="pwd">Gender:</label> &nbsp;
					<input type="radio" id="male" class="r" name="gender" value="Male" <?php echo $gender=="Male" ? 'checked' : '';?>> Male &nbsp;&nbsp;
					<input type="radio" id="female" class="r" name="gender" value="Female"  <?php echo $gender=="Female" ? 'checked' : '';?>> Female				
				</div>
	<br>	
				<div class="form-group">
					<label for="pwd">Age:</label>
					<input type="number" class="form-control" id="age" name="age" value="<?php echo $age;?>"  required>
				</div>
				<br>


				<div class="form-group">
					<label for="pwd">Address:</label>
					<input type="text" class="form-control" id="address" name="address" value="<?php echo $address;?>"  required>
				</div>

				<br>
				 <?php

	    						$query = "SELECT * FROM tbl_category";
	  
	   						 $result1 = mysqli_query($con,$query);
	   						// print_r($result1);

				 ?>

	<div class="form-group">
					
					<div class="row">
								<div class="col-lg-4">
												<label for="pwd">Work Category:</label>
								</div>
								<div class="col-lg-4"> 
								<select class="form-control" name="work_category_id" required>
												<?php 
																while($row=mysqli_fetch_assoc($result1))
																{ ?>
																					<option value="<?php echo $row['category_id'] ;?>" <?php echo $row['category_id'] == $work_category_id ? 'selected' : '' ;?>> <?php echo $row['category_name'] ;?> </option>
																<?php 	}
														?>
									</select>
								</div>
						
					</div>
							
				</div>
				<br>

				<br>
				 <?php

	    						$query2 = "SELECT * FROM tbl_locations";
	  
	   						 $result2 = mysqli_query($con,$query2);
	   						// print_r($result1);

				 ?>

	<div class="form-group">
					
					<div class="row">
								<div class="col-lg-4">
												<label for="pwd">Work Location:</label>
								</div>
								<div class="col-lg-4">
								<select class="form-control" name="location_id" required>
												<?php 
																while($row=mysqli_fetch_assoc($result2))
																{ ?>
																					<option value="<?php echo $row['location_id'] ;?>" <?php echo $row['location_id'] == $location_id ? 'selected' : '' ;?>> <?php echo $row['location_name'] ;?> </option>
																<?php 	}
														?>
									</select>
								</div>
						
					</div>
							
				</div>
				<br>

					<div class="form-group">
					<label for="pwd">Work Experince: (In Years) </label>
					<input type="number" class="form-control" id="work_experience" name="work_experience" value="<?php echo $work_experience;?>"  required>
				</div>
				<br>

					
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
		</div>
		<div class="col-lg-4"></div>
	</div>
<br><br>
<?php include("footer.php");