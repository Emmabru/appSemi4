<?php

namespace tastyRep3\View;

use Id1354fw\View\AbstractRequestHandler;
//use TastyRep\Controller\Controller;
//use TastyRep\Util\Constants;

/**
 * All requests without a url matching an existing request handler will be
 * redirected to the application's index page. That way, the url will always be 
 * http://server name/context root/View/page name.
 * 
 * This handler also starts a session and creates a controller.
 */
class DefaultRequestHandler extends AbstractRequestHandler {

	//public function setSomeParam($value);

    protected function doExecute() {


        \header('Location: /seminar-3/tastyRep3/View/FirstPage');
    }
    
}
