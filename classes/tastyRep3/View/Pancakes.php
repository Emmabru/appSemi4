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
    
    public function setUser_comment($user_comment){
        $this->user_comment = $user_comment;
    }
   	
   	public function setRecipeID($recipeID){
        $this->recipeID = $recipeID;
    } 

    protected function doExecute() {
 	
 		
 		if(empty($this->user_comment)) {
            //echo " femtitva";

 			return 'recipe';
    	} else {
    		/*echo "heej <br>";
            echo $this->user_comment . "<br>";
            echo $this->recipeID . "<br>";
            echo $this->session->get(Constants::USER_LOGGED_IN) . "<br>";
            */

    		$control = new \tastyRep3\Controller\addComment();

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

