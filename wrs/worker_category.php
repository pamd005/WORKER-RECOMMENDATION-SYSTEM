<?php 
		include("header.php");
		include("connection.php");
?>
 				<?php
 								$category_id = $_GET['category_id']; 

	    						$query = "SELECT *, (SELECT location_name FROM tbl_locations WHERE tbl_locations.location_id = tbl_workers.location_id) as lname FROM tbl_workers WHERE work_category_id = '$category_id'";

	    						if(isset($_GET['location_id']))
	   						 	{
	   						 		$location_id = $_GET['location_id']; 
	   						 		$query .= " AND location_id = '$location_id'";
	   						 		//echo $query; exit;
	   						 	}


	   						    $result1 = mysqli_query($con,$query);

	   						 	$query1 = "SELECT category_name FROM tbl_category WHERE category_id = '$category_id'";
	   						 	
	   						 
	   						    $result2 = mysqli_query($con,$query1);
	   						    $row1=mysqli_fetch_row($result2);

				 ?>

<div class="page-title-area title-bg-one">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="title-item">
					<h2><?php echo $row1[0];?> </h2>
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<span>Worker Category</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="team-area four pt-100 pb-70">
	<div class="container">
		
		<div class="row text-center">
		
		
			
				

				 	<?php 
				 			$row1= mysqli_num_rows($result1);
          
          				 if ($row1)
				 			{
									while($row=mysqli_fetch_assoc($result1))
							{ ?>																					
					<div class="col-sm-3 col-lg-3">
						
					<div class="team-item">
						
						<div class="bottom">
							<h3><?php echo $row['name'] ;?> </h3>
							<span>Mobile-  <?php echo $row['mobile'] ;?>  </span>
							<span>Gender-  <?php echo $row['gender'] ;?>  </span>
							<span>Address-  <?php echo $row['address'] ;?>  </span>
							<span>Location-  <?php echo $row['lname'] ;?>  </span>
							<span> Year of Experience -  <?php echo $row['work_experience'] ;?>  </span>
						</div>
					</div>
					
				</div>
				

																<?php 	}
															}
															else
															{

																	echo "<h2> No Worker Found..</h2";
															}
														?>

		
		</div>
	</div>
</section>

<?php include("footer.php");