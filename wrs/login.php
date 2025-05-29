<html>
	<head>
		<title>
			Worker Recommendation System
		</title>
	</head>
	<body> 
		<center>
			<h1 style="color: papayawhip; font-size:300%;"> Worker Recommendation System</h1>

			<br>
			<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body
        {
          background-image: url(2.jfif);
            background-repeat: no-repeat;
            background-size: 1700px 830px;

            

        } 
        h2
        {
            
            border: 1px;
            background-origin: border-box;
            color: white;
            display: inline;
            
        }
        h1
        {
            color: black;
        }
        submit
        {
            background-color: tomato;
            padding: 7px;
            width: 100px;
            font-size: 20px;
            border-radius: 25px;
        }
        form
        
       
       
    </style>
</head>,
<body>
    
    <center><br><br><br>

        <h1>  <center style="color:black;">LOGIN</center></h1>
<?php 
    if(isset($_GET['status']))
    {

        echo "<h2 style='color:red'>  Wrong username or password..please try again";
    }

?>
   <form action="check_login.php" method="post">
        <h2><br> <input type="number" name="mobile" id="" placeholder="Enter Mobile No." style="color: darkblue; font-size:80%; padding: 5;" required> <br><br>
         <input type="password" name="password" id="" placeholder="Enter Password" style="color: darkblue; font-size:80%; padding: 5;" required> </h2>
      <h4> 
         <input type="submit" value="Login" style="color: black; font-size:150%; padding: 5;  border-radius: 10px" > </a><br><br>
        
        </h4>
       
        
    </form>
    <br>

     <a href="reg.php" style="color:white"> New User? Register Now </a>
</center>
</body>
</html>
			
	