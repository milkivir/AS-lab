<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\ExEditForm;

class ExEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new ExEditForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->idex = ParamUtils::getFromRequest('idex', true, 'Błędne wywołanie aplikacji');
        $this->form->age = ParamUtils::getFromRequest('age', true, 'Błędne wywołanie aplikacji');
        $this->form->sound = ParamUtils::getFromRequest('sound', true, 'Błędne wywołanie aplikacji');
        $this->form->linkex = ParamUtils::getFromRequest('linkex', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
	//	if (empty(trim($this->form->idex))) {
        //    Utils::addErrorMessage('Wprowadź id');
        //}
		
        if (empty(trim($this->form->age))) {
            Utils::addErrorMessage('Wprowadź grupę wiekową');
        }
        if (empty(trim($this->form->sound))) {
            Utils::addErrorMessage('Wprowadź głoskę');
        }
        if (empty(trim($this->form->linkex))) {
            Utils::addErrorMessage('Wprowadź link do zadania');
        }

        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->idex = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_exNew() {
        $this->generateView();
    }

    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    public function action_exEdit() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("exercises", "*", [
                    "id_exercise" => $this->form->idex
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                //$this->form->idex = $record['id_exercise'];
                $this->form->age = $record['age_group'];
                $this->form->sound = $record['sound'];
                $this->form->linkex = $record['link'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }

    public function action_exDelete() {
        // 1. walidacja id osoby do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("exercises", [
                    "id_exercise" => $this->form->idex
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('exercises');
    }

    public function action_exSave() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {

                //2.1 Nowy rekord
                if ($this->form->idex == '') {
			
                    //2.2 Edycja rekordu o danym ID
                    App::getDB()->update("exercises", [
                        "age_group" => $this->form->age,
                        "sound" => $this->form->sound,
                        "link" => $this->form->linkex
                            ], [
                        "id_exercise"
                    ]);
					
		$id_exercise = App::getDB()->id();
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
            App::getRouter()->forwardTo('exercises');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('ExEdit.tpl');
    }

}
