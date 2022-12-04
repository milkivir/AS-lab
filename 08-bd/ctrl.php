<?php
require_once 'init.php';

getRouter()->setDefaultRoute('personList'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('personList',		'PersonListCtrl');
getRouter()->addRoute('loginShow',		'LoginCtrl');
getRouter()->addRoute('login',			'LoginCtrl');
getRouter()->addRoute('logout',			'LoginCtrl');
getRouter()->addRoute('personNew',		'PersonEditCtrl',	['user','admin']);
getRouter()->addRoute('personEdit',		'PersonEditCtrl',	['user','admin']);
getRouter()->addRoute('personSave',		'PersonEditCtrl',	['user','admin']);
getRouter()->addRoute('personDelete',	'PersonEditCtrl',	['admin']);

getRouter()->go();