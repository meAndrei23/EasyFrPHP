<?php
use Base\BaseController;
use View\View;

class DatiController extends BaseController{
	function contatti(){
		echo "Via ecc ecc";
	}
	function home(){
		$vista = new View('pages.home');
		$vista -> show();
	}
	
	function preventivo(){
		echo "il tuo preventivo";
	}
	
	function infoSite(){
		$opt = new Option();
		var_dump($opt->readOptions("site"));
	}
}