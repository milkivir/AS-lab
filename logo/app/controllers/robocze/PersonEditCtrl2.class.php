<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\PersonEditForm;

class PersonEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new PersonEditForm();
    }
	
	    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->name = ParamUtils::getFromRequest('name', true, 'Błędne wywołanie aplikacji');
        $this->form->surname = ParamUtils::getFromRequest('surname', true, 'Błędne wywołanie aplikacji');
        $this->form->birthdate = ParamUtils::getFromRequest('birthdate', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->name))) {
            Utils::addErrorMessage('Wprowadź imię');
        }
        if (empty(trim($this->form->surname))) {
            Utils::addErrorMessage('Wprowadź nazwisko');
        }
        if (empty(trim($this->form->birthdate))) {
            Utils::addErrorMessage('Wprowadź datę urodzenia');
        }

        if (App::getMessages()->isError())
            return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        $d = \DateTime::createFromFormat('Y-m-d', $this->form->birthdate);
        if ($d === false) {
            Utils::addErrorMessage('Zły format daty. Przykład: 2015-12-20');
        }

        return !App::getMessages()->isError();
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
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('patients.tpl');
    } 

}
