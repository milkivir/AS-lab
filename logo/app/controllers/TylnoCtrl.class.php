<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
 
 
class TylnoCtrl {
    
    public function action_tylno() {
		        
        $variable = 123;
        
        App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        Utils::addInfoMessage("Or even easier message :-)");
        
        App::getSmarty()->assign("value",$variable);        
        App::getSmarty()->display("tylno.tpl");
        
    }
	
	public function generateView(){

		getSmarty()->display('tylno.tpl');
	}
    
}


