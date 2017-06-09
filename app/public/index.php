<?php

error_reporting(-1);
ini_set('display_errors', 'On');

require('../../bin/init.php');

if(isset($_GET['controller'], $_GET['action'])){
	$controller = $_GET['controller'];
	$action = $_GET['action'];
}
else{
	$controller = "DatiController";
	$action = "home";
}

$ctr = new $controller;
$ctr -> $action();