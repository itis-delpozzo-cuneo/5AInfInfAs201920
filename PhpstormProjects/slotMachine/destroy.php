<?php
	//E' un inizializza che svuota, distrugge anche la struttura
	// sessione, la rigenera vuota
	//dichiara utilizzo sessione
	session_start();
	
	//svuota gli elementi dell'array
	session_unset();
	//elimina l'array sessione
	session_destroy();
	//lo rigenera vuoto, per evitare errori
	$SESSION = array();
?>