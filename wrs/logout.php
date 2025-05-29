<?php
 session_start();
   if(isset($_SESSION['mobile'])){
       session_destroy();
       header('location: login.php');
   }
   else{
       header('location: index.php');
   }

?>