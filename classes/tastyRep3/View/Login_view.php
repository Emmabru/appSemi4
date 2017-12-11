<?php
namespace tastyRep3\View;

use Id1354fw\View\AbstractRequestHandler;
use tastyRep3\Util\Constants;
use tastyRep3\Controller;
use tastyRep3\Model;
// USE DB MODEL??
//require_once('classes/tastyRep3/Model/User.php');

class Login_view extends AbstractRequestHandler {
    
    private $theUsername;
    private $thePassword;
    
    public function setUsername($uid){
        $this->theUsername = $uid;
    }
    
    public function setPassword($pwd){
        $this->thePassword = $pwd;
    }


    protected function doExecute() {
       	 


       
        //$contr = $this->session->get(Constants::CONTR_KEY_NAME);
        
        if(empty($this->theUsername) || empty($this->thePassword)){
            $status = 'Invalid';
            $this->addVariable('status', $status);
            
            return 'login_page';
        }
        elseif(!preg_match("/^[a-zA-Z]*$/", $this->theUsername)){
            $status = 'Invalid';
            $this->addVariable('status', $status);
              echo 2;
            //return 'login_page';
        }
        elseif(strlen($this->theUsername) > 15 || strlen($this->thePassword) > 15){
            $status = 'Invalid';
            $this->addVariable('status', $status);
                        echo 3;
            //return 'login_page';
        }


        
         $control = new \tastyRep3\Controller\login_control();
        if('ok' == $control->loginUser($this->theUsername,$this->thePassword)) {
            //$this->session->restart();
            $this->session->set(Constants::USER_LOGGED_IN, $this->theUsername);
            return 'index';
        }
        //$contr = $this->session->get(Constants::CONTR_KEY_NAME);
        
    }    
}