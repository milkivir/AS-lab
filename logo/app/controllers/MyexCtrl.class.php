<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\SoundSearchForm;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
 
 
class MyexCtrl {
    
	private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych
	
	public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new SoundSearchForm();
    }
    
	public function validate() {
        // 1. sprawdzenie, czy parametry zostały przekazane
        // - nie trzeba sprawdzać
        $this->form->sound = ParamUtils::getFromRequest('sf_sound');

        // 2. sprawdzenie poprawności przekazanych parametrów
        // - nie trzeba sprawdzać

    return !App::getMessages()->isError();    
    }
	
    public function action_myex() {
		        
// 1. Walidacja danych formularza (z pobraniem)
        // - W tej aplikacji walidacja nie jest potrzebna, ponieważ nie wystąpią błedy podczas podawania nazwiska.
        //   Jednak pozostawiono ją, ponieważ gdyby uzytkownik wprowadzał np. datę, lub wartość numeryczną, to trzeba
        //   odpowiednio zareagować wyświetlając odpowiednią informację (poprzez obiekt wiadomości Messages)
        $this->validate();

        // 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->form->sound) && strlen($this->form->sound) > 0) {
            $search_params['sound[~]'] = $this->form->sound . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		
		// 3. Pobranie listy rekordów z bazy danych
        // W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
        //przygotowanie frazy where na wypadek większej liczby parametrów
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
		
		
        
		//dodanie frazy sortującej po nazwisku
        //$where ["ORDER"] = "age_group";
		
		//$data = $database->query("SELECT <account.email>,<account.nickname>
		//	FROM <account>
		//	WHERE <id> != 100
		//")->fetchAll();
		
		try {
            $this->records = App::getDB()->query("SELECT <id_exercise>, <sound>, <link> FROM <exercises> WHERE <id_exercise> IN ( SELECT <exercises_id_exercise> FROM <assign_exercise> WHERE <user1_id_user1> = 3)")->fetchAll();
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
		
		/*
		
		try {
            $this->records = App::getDB()->select("exercises", [
                "id_exercise",
                "sound",
                "link",
                    ], ["id_exercise" => $this->records1]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        } */

        // 4. wygeneruj widok
        App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('exer', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('myex.tpl');
    }
    
}


