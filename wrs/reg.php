<html>
	<head>
		<title>
			Worker Recommendation System
		</title>
	</head>
	<body> 
		 <style>
        body
        {
          background-image: url(2.jfif);
            background-repeat: no-repeat;
            background-size: 1700px 830px;
            color: white;
            

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
        button
        {
            background-color: tomato;
            padding: 7px;
            width: 150px;
            font-size: 20px;
            border-radius: 25px;
        }
      td{
        font-size: 20px;
      }
        
       
       
    </style>
		

			 <center>
			 	
        <h1 style="color: white; font-size:300%;"> Registration Form </h1>

        <br><br><br><br><br><br>
        <?php 
            if(isset($_GET['status']))
            {

                echo "<h2 style='color:red'>  User already exist ..please try another mobile no. <br> <br>";
            }

        ?>

        <form action="insert_worker.php" method="post">

            <table><h2>
                    <tr>
                            <td>
                                     Name
                            </td>
                            <td>
                                   <input type="text" name="name" id="name" style="color: darkred; font-size:80%; padding: 5;" required>
                            </td>
                    </tr>
                    <tr>
                            <td>
                                    mobile
                            </td>
                            <td><br>
 <input type="number" name="mobile" id="mobile" style="color: darkblue; font-size:80%; padding: 5;" required>

                            </td>
                    </tr>
                    <tr>
                            <td>
                                     Password
                            </td>
                            <td><br>
                                    <input type="password" name="password" id="password" style="color: darkblue; font-size:80%; padding: 5;" required> 
                            </td>
                    </tr>

                      <tr>
                            <td>
                                     Confirm Password
                            </td>
                            <td><br>
                                    <input type="password" id="confirm_password" style="color: darkblue; font-size:80%; padding: 5;" > 
                            </td>
                    </tr>

                </h2>
<tr>
                        <td>

                        </td>
                        <td><br>
                           <button type="submit" style="color: black; font-size:150%; padding: 5;  border-radius: 10px" name="save" onclick="return confirm_pass();"> Register </button> 

                        </td>

                    </tr>
 </table>
 <br>
    <a href="login.php" style="color:white"> Already have account ? Login Now </a>
</form>
</style>
		</center>

        <script>
                        function confirm_pass() 
                        {
                            var pass = document.getElementById('password').value;
                            var confirm_pass = document.getElementById('confirm_password').value;
                              if(pass !== confirm_pass) 
                              {
                                        alert("Password does not match");
                                        return false;
                              }
                              else{
                                        return true;
                              }
                       }

        </script>
	</body>
</html>