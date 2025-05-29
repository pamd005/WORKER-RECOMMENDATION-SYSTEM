<?php 
		include("connection.php");

	 	$name =  $_POST['name'];
        $password =  $_POST['password'];
	 	$mobile =  $_POST['mobile'];


	 	$query = "SELECT * FROM tbl_workers where mobile='$mobile'";
		$result=mysqli_query($con, $query);

		if(mysqli_num_rows($result)>0)
		{
			  header("Location:reg.php?status=failed");
		}
		else
		{
		 	$query = "INSERT INTO tbl_workers(name, mobile,password) VALUES('$name', '$mobile','$password')";
			mysqli_query($con, $query);

		 	header("Location:login.php");
	 }

  ?> 