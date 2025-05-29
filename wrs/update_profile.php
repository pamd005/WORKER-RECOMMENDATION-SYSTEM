<?php
    require('connection.php');

    $worker_id  =  $_POST['worker_id'];
    $name  =  $_POST['name'];
  
    $mobile =  $_POST['mobile'];
    $age =  $_POST['age'];
    $address =  $_POST['address'];
    $gender  =  $_POST['gender']; 
    $work_category_id  =  $_POST['work_category_id']; 
    $location_id  =  $_POST['location_id']; 
    $work_experience  =  $_POST['work_experience']; 
   // $about  =  $_POST['about']; 

    $query = "UPDATE tbl_workers SET name = '" . $name . "', mobile = '" . $mobile . "', age = '" . $age . "', address = '" . $address . "', gender = '" . $gender . "',    work_category_id = '" . $work_category_id . "', location_id = '" . $location_id . "', work_experience = '" . $work_experience . "' WHERE worker_id = " . $worker_id;

// echo $query;
// exit;
   mysqli_query($con, $query);

  
   header("Location:worker_profile.php?status=update");

?>