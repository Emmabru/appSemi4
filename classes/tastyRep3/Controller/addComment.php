<?php
   namespace tastyRep3\Controller;
   
   use tastyRep3\Util\Constants;
   use tastyRep3\Model;

      define('DB_SERVER', 'localhost:3306');
      define('DB_USERNAME', 'app-course');
      define('DB_PASSWORD', 'AppDatabase.1');
      define('DB_DATABASE', 'tastyRep');


class addComment {

   public function __construct(){

   }
   

   public function dbConn() {
      $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

      if(!$db){
         die("Connection failed: ".mysqli_connect_error());
      }
         return $db;
      }

   public function newComment($username, $recipeID, $user_comment) {
         $newComment = new \tastyRep3\Model\Comment($username, $recipeID, $user_comment);

         $comment = $newComment->addComment();
   }

   public function getComments($recipe){
     
      $dbmanager = new \tastyRep3\Model\dbmanager($recipe);
      if($list_of_comments = $dbmanager->getComment($recipe)) {
            return $list_of_comments;

        } else {
            echo " error in Comment 2";
        }

   }

   public function deleteComment($username, $commID){
      $dbmanager = new \tastyRep3\Model\dbmanager($commID);
      
      $dbmanager->deleteComment($commID);
          
   }

   

}





/*
   $dbmanager = new \tastyRep3\Model\dbmanager();
   $this->session->restart();
   $user = $this->session->get(Constants::USER_LOGGED_IN); 


   $dbmanager->createComment($user, $_POST["recipeID"], $_POST["user_comment"]);
      
   $sql = "INSERT INTO comments (author, comment) VALUES ( ".$user.", ".$_POST["user_comment"].");";
}

      $newComment = new \tastyRep3\Controller\addComment();
      if('ok' == $newComment->createComment($this->theUsername, 1, $this->thePassword)) {
        }*/