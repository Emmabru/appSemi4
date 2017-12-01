<?php
namespace tastyRep3\View;

use Id1354fw\View\AbstractRequestHandler;
/*
 * Shows the index page of the application
 */

class Pancakes extends AbstractRequestHandler {
    protected function doExecute() {
        return 'recipe';
    }
}