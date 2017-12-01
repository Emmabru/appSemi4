<?php
include("dbconfig.php");
session_start();

$user_check=$_SESSION['newUser'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from user where username='$user_check'", $db);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($db); // Closing Connection
header('Location: recipe.html'); // Redirecting To Home Page
}
?>