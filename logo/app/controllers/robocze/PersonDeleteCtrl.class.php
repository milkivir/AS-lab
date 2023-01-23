<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\PersonDeleteForm;

class PersonDeleteCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new PersonDeleteForm();
    }
	
    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
	

    public function action_personDelete() {
        // 1. walidacja id osoby do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("user1", [
                    "id_user1" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('patients');
    }
	

    public function generateView() {
        App::getSmarty()->assign('deleteForm', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('patients.tpl');
    } 

}
