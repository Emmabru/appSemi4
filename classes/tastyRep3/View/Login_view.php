<?php
namespace tastyRep3\View;

use Id1354fw\View\AbstractRequestHandler;
use tastyRep3\Util;
// USE DB MODEL??


class Login_view extends AbstractRequestHandler {
    
    private $username;
    private $password;
    
    public function setUsername($uid){
        $this->username = $uid;
    }
    
    public function setPassword($pwd){
        $this->password = $pwd;
    }


    protected function doExecute() {
       	  
  
   /*    	$contr = $this->session->get(Constants::CONTR_KEY_NAME);

       	if (!($this->$username || $this->$password)) {
			//echo "not logged in?";
	       	return 'login_page';
       	}
    	
    	$login = $contr->loginUser($this->$username, $this->$password);	


    	if($login == 'OK'){
            $this->session->set(Constants::USER_LOGGED_IN, $this->$username);
            return 'MainPage';
            
        } else {*/
            return 'login_page';
    	}
}
//}