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
 
 
class SrodCtrl {
    
    public function action_srod() {
		        
        $variable = 123;
        
        App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        Utils::addInfoMessage("Or even easier message :-)");
        
        App::getSmarty()->assign("value",$variable);        
        App::getSmarty()->display("srod.tpl");
        
    }
	
	public function generateView(){

		getSmarty()->display('srod.tpl');
	}
    
}


