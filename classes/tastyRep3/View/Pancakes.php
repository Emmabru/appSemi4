<?php
namespace tastyRep3\View;

use Id1354fw\View\AbstractRequestHandler;
use tastyRep3\Controller;
/*
 * Shows the index page of the application
 */

class Pancakes extends AbstractRequestHandler {
    
	 private $comment;
    
    public function setUser_comment($user_comment){
        $this->comment = $comment;
    }
   

    protected function doExecute() {


    	//kolla om texten är ifylld yadayada
    	return 'recipe';
    	$control = \tastyRep3\Controller\addComment();
    	if('ok' == XXXXX) {
    		$this->session->set(Constants::USER_LOGGED_IN, $this->theUsername);
            return 'recipe';

    	}
    
    }
}