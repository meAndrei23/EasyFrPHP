<?php

use Option\Option;
use Base\BaseController;

class DatabaseController extends BaseController{

	function connection(){
		$opt = new Option();
		$dataConnection = $opt -> readOptions("database");
		
		$dbh = new PDO(
			$dataConnection["type"].':host='.$dataConnection["host"].';dbname='.$dataConnection["database"],
			$dataConnection["username"], 
			$dataConnection["password"]
			);
			
		$data = $dbh -> query("SELECT * FROM test");
		var_dump($data -> fetchAll());
	}
}