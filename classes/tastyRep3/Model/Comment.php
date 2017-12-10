<?php
namespace tastyRep3\Model;

use tastyRep3\Model\dbmanager;

class Comment {
    
    private $username;
    private $recipeID;
    private $comment;
    
    public function __construct($username, $recipeID, $comment) {
        $this->dbmanager = new dbmanager();
        $this->username = $username;
        $this->recipeID = $recipeID;
        $this->comment = $comment;
        echo "concsruct";
    }
    
    public function addComment(){
    	$newComment = $this->dbmanager->createComment($username, $recipeID, $comment);
    	//return 
    }
}