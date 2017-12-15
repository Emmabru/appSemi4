<?php
namespace tastyRep3\View;

use Id1354fw\View\AbstractRequestHandler;
use tastyRep3\Util\Constants;
use tastyRep3\Controller;
use tastyRep3\Model;

class Meatballs extends AbstractRequestHandler {
   
   	private $comment;
    private $recipeID;
    private $delete = null;
    private $message = null;

    public function setMessage($message){
        $this->message=$message;
    }

    public function setDelete($delete){
        $this->delete=$delete;
    }
    
    public function setComment($comment){
        $this->comment = $comment;
    }
    
    public function setRecipeID($recipeID){
        $this->recipeID = $recipeID;

    } 

    protected function doExecute() {
         
        $this->session->restart();

        $control = new \tastyRep3\Controller\addComment();

        if($this->delete!==null && preg_match('/^[0-9]{1,10}$/', $this->delete)){

            $control->deleteComment($this->session->get(Constants::USER_LOGGED_IN), $this->delete);
                
        }

        if ($this->comment!==null && $this->recipeID==='2'){
            $control->newComment($this->session->get(Constants::USER_LOGGED_IN), $this->recipeID,$this->comment);
        }

        $list_of_comments = $control->getComments('2');
        $this->addVariable('comments', $list_of_comments);
        return 'recipe2';  
            
        }
    }

