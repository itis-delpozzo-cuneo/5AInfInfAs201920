<?php

	session_start();
	echo $_SESSION["idUtente"];
	$idUtente=$_SESSION["idUtente"];
	$idUtente++;
	$_SESSION["idUtente"]=$idUtente;


?>