<?php
namespace tastyRep3\View;

use Id1354fw\View\AbstractRequestHandler;
/*
 * Shows the index page of the application
 */

class Login extends AbstractRequestHandler {
    protected function doExecute() {
        return 'login_page';
    }
}