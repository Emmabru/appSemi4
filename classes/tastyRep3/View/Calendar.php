<?php
namespace tastyRep3\View;

use Id1354fw\View\AbstractRequestHandler;
/*
 * Shows the index page of the application
 */

class Calendar extends AbstractRequestHandler {
    protected function doExecute() {
        return 'calendar';
    }
}