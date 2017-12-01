<?php
   
   	session_start();
   	include("dbconfig.php");

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT username FROM user WHERE username = '$myusername' and password = '$mypassword'";
      
      $result = mysqli_query($db,$sql);
      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $username = $row['username'];
      

      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");

         $_SESSION['username'] = $username;
			
         //$_SESSION['username'] = $username;
         header("location: recipe.html");
      }else {
         echo "Your Login Name or Password is invalid";
         sleep(10);
         header("location: login-page.php");
      }
   }
?>