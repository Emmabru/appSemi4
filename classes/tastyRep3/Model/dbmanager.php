<?php
namespace tastyRep3\Model;

class dbmanager {
    
    private $conn;
    
   public function __construct() {
        $dbServername = "localhost:3306";
        $dbUsername = "app-course";
        $dbPassword = "AppDatabase.1";
        $dbName = "tastyRep";
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
        $this->conn = $conn;
    }
    
    public function getUsernameByName($username){  
        $usernameSafe = mysqli_real_escape_string($this->conn, $username);     
        $query = "SELECT user_name FROM users WHERE user_name ='".$usernameSafe."'";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }
    public function getUserPasswordByName($username){
        $usernameSafe = mysqli_real_escape_string($this->conn, $username);     
        $query = "SELECT password FROM user WHERE username ='".$usernameSafe."';";

        $result = mysqli_query($this->conn, $query);
        if($result == false || $result == FALSE){
            echo "FAIL!!!!";
        }
        $row = mysqli_fetch_assoc($result);
        return $row['password'];
    }
    
    public function createUser($username,$password){
        $usernameSafe = mysqli_real_escape_string($this->conn,$username);
        $passwordSafe = mysqli_real_escape_string($this->conn,$password);
        $query = "INSERT INTO users (user_name, user_password) VALUES ('".$usernameSafe."', '".$passwordSafe."');";
        mysqli_query($this->conn, $query);
    }
    



    public function createComment($username,$recipe,$commentText){
        $usernameSafe = mysqli_real_escape_string($this->conn,$username);
        $recipeSafe = mysqli_real_escape_string($this->conn,$recipe);
        $commentTextSafe = mysqli_real_escape_string($this->conn,$commentText);
       
        $query = "SELECT id_user FROM user WHERE username=".$usernameSafe.";";
        $userid = mysql_query($this->conn, $query);
        $userid = mysqli_fetch_assoc($userid);
        echo $userid['id_user'];
        //$query = "INSERT INTO comments (author, comment) VALUES ('"$userid['id_user']"', '".$commentTextSafe."');";
        mysqli_query($this->conn, $query);
        $last_inserted = mysql_idcomment();
        echo $last_inserted;

    }
    








    public function getComment($recipe){
        $recipeSafe = mysqli_real_escape_string($this->conn,$recipe);
        $query = "SELECT * FROM recipecomment WHERE recipe = '".$recipeSafe."'";
        $queryResults = mysqli_query($this->conn, $query);
        return $queryResults;
    }
    
    public function getCommentAuthor($commentID){
        $commentIDSafe = mysqli_real_escape_string($this->conn,$commentID);
        $query = "SELECT userid FROM recipecomment WHERE commentID = '$commentIDSafe'";
        $result = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($result);    
        return $row['userid'];
    }
    
    public function deleteComment($commentID){
        $commentIDSafe = mysqli_real_escape_string($this->conn,$commentID);
        $query = "DELETE FROM recipecomment WHERE commentID = '$commentIDSafe'";
        mysqli_query($this->conn, $query);
    }
}