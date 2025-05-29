<?php 
		include("connection.php");

		session_start();
       
	 	$mobile =  $_POST['mobile'];
 		$password =  $_POST['password'];

	 	$query = "SELECT * FROM tbl_workers where mobile='$mobile' AND password='$password'";
		$result=mysqli_query($con, $query);
		$row  = mysqli_fetch_array($result);
 		
     
		if(is_array($row))
		{
			
				$_SESSION["worker_id"] = $row['worker_id'];
       			
       			
			  header("Location:dashboard.php?status=success");
		}
		else
		{	

		 	header("Location:login.php?status=failed");
		 }

  ?> 