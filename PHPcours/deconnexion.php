<?php
   // deconnexion.php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

	session_start();
	session_destroy();

	$_SESSION = array();

	//                  ;
	//                  ;
	header("Location: connexion.php");
	echo($_SESSION['pseudo']);
?>