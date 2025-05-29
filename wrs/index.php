<?php include("header.php");
 include("connection.php");


$query = "SELECT * FROM tbl_category";
$result = mysqli_query($con,$query);

$query1 = "SELECT * FROM tbl_locations";
$result1 = mysqli_query($con,$query1);
				 

?>
<div class="banner-area-two three">
	
		<div class="page-title-area title-bg-eight">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container">
						<div class="banner-content">
							<h1>We help all of the people in need around the world</h1>
							
								<a class="common-btn banner-btn" href="login.php">Login</a>
								<a class="common-btn banner-btn" href="reg.php">Register</a>
								
												</div>
					</div>
				</div>
			
		</div>
		<div class="2.jfif">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container text-center">

								
					</div>
				</div>
			</div>
		</div>
</div>


<section class="team-area four pt-100 pb-70 bg-info">
	<div class="container">
		<div class="section-title">
			
			<h2>Search Worker</h2>
			<p>Find worker that you are looking for..</p>
		</div>
		<div class="row">
		
		<form action="worker_category.php" method="GET">
			 <div class="row">
			 	<div class="col-lg-3">
			 	</div>
			 	<div class="col-lg-8">
			 		<div class="row">
			 			<div class="col-lg-4">
			 				<select class="form-control" name="category_id">
			 					<option>Select Worker Category  Here</option>
		<?php 
			while($row=mysqli_fetch_assoc($result))
			{ ?>
							 <option value="<?php echo $row['category_id'];?>">  <?php echo $row['category_name'] ;?> </option>


				<?php 	}
		?>					
			 				</select>
			 			</div>

						<div class="col-lg-4">
							<select class="form-control" name="location_id">
			 					<option>Select Location  Here</option>
			 					<?php 
			while($row1=mysqli_fetch_assoc($result1))
			{ ?>
							 <option value="<?php echo $row1['location_id'];?>">  <?php echo $row1['location_name'] ;?> </option>


				<?php 	}
		?>	
			 				</select>
			 			</div>			
			 			<div class="col-lg-4 text-left">
							<button type="submit" class="btn btn-danger"> Search</button>
			 			</div>			 			

			 		</div>
			 		
			 	</div>
			 	<div class="col-lg-3">
			 	</div>
			 </div>
		</form>
			
				
		</div>
	</div>
</section>


<section class="team-area four pt-100 pb-70">
	<div class="container">
		<div class="section-title">
			<h2>Worker Category</h2>
			<p>Select worker category that you are looking for..</p>
		</div>
		<div class="row">
		<?php 

			$query2 = "SELECT * FROM tbl_category";
			$result2 = mysqli_query($con,$query2);

			while($row2=mysqli_fetch_assoc($result2))
			{ ?>																	
					<div class="col-sm-3 col-lg-3">
						<a href="worker_category.php?category_id=<?php echo $row2['category_id'];?>">	
					<div class="team-item">
						
						<div class="bottom">
							<h3><?php echo $row2['category_name'] ;?> </h3>
							<span>View</span>
						</div>
					</div>
					</a>
				</div>
				<?php 	}
			?>		
		</div>
	</div>
</section>

<?php include("footer.php");