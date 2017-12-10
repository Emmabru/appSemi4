<?php


namespace tastyRep3\Model;


class dbconfig {

	   define('DB_SERVER', 'localhost:3306');
	   define('DB_USERNAME', 'app-course');
	   define('DB_PASSWORD', 'AppDatabase.1');
	   define('DB_DATABASE', 'tastyRep');
	
	public function __construct(){

	}

	public function dbConn() {
		$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

		if(!$db){
			die("Connection failed: ".mysqli_connect_error());
		}
   		return $db;
   	}

   	public function loginUser($username, $password) {
   		echo "heeelllo";


   	}
}