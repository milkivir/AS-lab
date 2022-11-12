<?php
require_once 'init.php';

switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		include_once 'app/controllers/CalcCtrl.class.php';
switch ($action) {
	default : // 'calcView'
		// utwórz obiekt i uzyj
		// (autoloader sam załaduje plik na podstawie przestrzeni nazw względem folderu głównego aplikacji)
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		// utwórz obiekt i uzyj
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process ();
	break;
	case 'action1' :
		// zrób coś innego ...
		print('hello');
	break;
	case 'action2' :
		// zrób coś innego ...
		print('goodbye');
	break;
}
}