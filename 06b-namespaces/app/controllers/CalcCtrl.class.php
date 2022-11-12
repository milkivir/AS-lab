<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora */

class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	
	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		}
	
	/** 
	 * Pobranie parametrów
	 */
	 
	public function getParams(){
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->z = getFromRequest('z');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	 
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->z ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
	} 
	 
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		
		if ($this->form->x == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->y == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		if ($this->form->z == "") {
			getMessages()->addError('Nie podano ilości lat spłaty');
		}
		
		
		// nie ma sensu walidować dalej gdy brak parametrów
		
		
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->z )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
		
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int lub float
			$this->form->x = floatval($this->form->x);
			$this->form->z = intval($this->form->z);
			$this->form->y = floatval($this->form->y);
			getMessages()->addInfo('Parametry poprawne.');
							
			//wykonanie operacji
			
			$this->result->result = ($this->form->x*(1+($this->form->y/100)))/($this->form->z*12);			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		
		getSmarty()->assign('page_title','-KALKULATOR KREDYTOWY-');
		getSmarty()->assign('page_description','Przybliżone obliczanie raty kredytu');
		getSmarty()->assign('page_header','Nowa struktura');
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl'); 
		
	}
}
