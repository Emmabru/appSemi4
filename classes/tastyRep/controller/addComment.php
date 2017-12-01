<?php
   	include("dbconfig.php");
   	session_start();
   	if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
      // redirect to your login page
      $name="Login";
		}

		$name = $_SESSION['username'];



   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
   	  //$comment = 'kaksmulan';
      $user = 'emma';
      
      $sql = "INSERT INTO comment (id_recipe, commentid, username, textbox) VALUES (1, 5, ".$_POST["username"].", ".$_POST["user_comment"].")";

      // Test of sql query
      echo $sql . "<br>";
    
      if($db === false){
      	echo "neeeeeeeej" . "<br>";
   		 die("ERROR: Could not connect. " . mysqli_connect_error());
		}



   /*if ($db->query($sql)) {
    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" ;
	}*/

$db->close();
}

