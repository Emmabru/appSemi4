<?php
namespace tastyRep3\View;

use Id1354fw\View\AbstractRequestHandler;
use Id1354fw\Controller\login;
/*
 * Shows the index page of the application
 */

class Login_view extends AbstractRequestHandler {
    protected function doExecute() {
       	return 'login_page';
    	//echo "bananans";
    }
}