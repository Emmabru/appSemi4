<?php
namespace tastyRep3\View;

use Id1354fw\View\AbstractRequestHandler;
use tastyRep3\Util\Constants;
use tastyRep3\Controller;
use tastyRep3\Model;
/*
 * Shows the index page of the application
 */

class Pancakes extends AbstractRequestHandler {
    
	private $user_comment;
	private $recipeID;
    private $delete = null;
    
    public function setDelete($delete){
        $this->delete=$delete;
    }
    
    public function setUser_comment($user_comment){
        $this->user_comment = $user_comment;
    }
   	
   	public function setRecipeID($recipeID){
        $this->recipeID = $recipeID;
    } 

    protected function doExecute() {
 	     
        $this->session->restart();

        $control = new \tastyRep3\Controller\addComment();

        if($this->delete!==null && preg_match('/^[0-9]{1,10}$/', $this->delete)){
           // echo "hej";
           // echo $this->delete;
            $control->deleteComment($this->session->get(Constants::USER_LOGGED_IN), $this->delete);
        }

 		
 		if(empty($this->user_comment)) {
            //echo " femtitva";

            $list_of_comments = $control->getComments('1');
           // echo $list_of_comments . " mammamam</br>";
            $this->addVariable('comments', $list_of_comments);

            //$list_of_comments = $control->getAuthors('1');
            //$this->addVariable('authors', $list_of_authors);

 			return 'recipe';
    	} else {
    		/*echo "heej <br>";
            echo $this->user_comment . "<br>";
            echo $this->recipeID . "<br>";
            echo $this->session->get(Constants::USER_LOGGED_IN) . "<br>";
            */

            if('ok' == $newComment = $control->newComment($this->session->get(Constants::USER_LOGGED_IN), $this->recipeID,$this->user_comment)) {
                return 'recipe';
            } else {
                echo "<br> error i Pancakes";
            }

	    	
            


	    	/*if('ok' == XXXXX) {
	    		$this->session->set(Constants::USER_LOGGED_IN, $this->theUsername);
	    		 */
	            //return 'index';
 			}
    	}
    }

