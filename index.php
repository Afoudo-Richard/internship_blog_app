<?php

session_start();

	ini_set('display_errors', "On");
	error_reporting(E_ALL);
	define('root', dirname(__DIR__).DIRECTORY_SEPARATOR."mvc-arc".DIRECTORY_SEPARATOR);

	require_once("app/init.php");
	
	//session_unset();
	//session_destroy();