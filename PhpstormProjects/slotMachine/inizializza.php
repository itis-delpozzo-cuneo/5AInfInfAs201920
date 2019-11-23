<?php
    session_start();

    $_SESSION["punteggio"] = 0;
    $_SESSION["nGiocate"] = 0;
    $_SESSION["nPartiteSenzaPunti"] = 0;
 
	header('Location: giocaImg.php');
    //die;
?>