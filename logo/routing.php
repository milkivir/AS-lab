<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('loginShow', 	'LoginCtrl');
Utils::addRoute('login', 		'LoginCtrl');
Utils::addRoute('logout', 		'LoginCtrl');
Utils::addRoute('logo', 		'LogoCtrl',	["logopeda","administrator"]);
Utils::addRoute('exercises', 	'ExercisesCtrl', ["logopeda","administrator"]);
Utils::addRoute('wargowe', 		'WargoweCtrl', ["logopeda","administrator"]);
Utils::addRoute('przednio',		'PrzednioCtrl', ["logopeda","administrator"]);
Utils::addRoute('srod', 		'SrodCtrl', ["logopeda","administrator"]);
Utils::addRoute('tylno', 		'TylnoCtrl', ["logopeda","administrator"]);
Utils::addRoute('contacts', 	'ContactsCtrl', ["logopeda","administrator"]);
Utils::addRoute('patients', 	'PatientsCtrl', ["logopeda","administrator"]);
Utils::addRoute('myex', 		'MyexCtrl', ["pacjent"]);
Utils::addRoute('contlogo', 	'ContlogoCtrl', ["pacjent"]);
Utils::addRoute('exNew',     	'ExEditCtrl',	["logopeda","administrator"]);
Utils::addRoute('exEdit',    	'ExEditCtrl',	["logopeda","administrator"]);
Utils::addRoute('exSave',    	'ExEditCtrl',	["logopeda","administrator"]);
Utils::addRoute('exDelete',  	'ExEditCtrl',	["logopeda","administrator"]);
//Utils::addRoute('personDelete',  'PersonDeleteCtrl', ['logopeda', "administrator"]);
//Utils::addRoute('action_name', 'controller_class_name');