<?php
    session_start();

    $frutta=["R","G","B"];
	$imgFrutta=["anguria.jfif", "banana.jfif", "ciliegia.jpg"];

    $estrazione = [];
    $valEstratti = [];
    if(isset($_SESSION["nPartiteSenzaPunti"])){
        $esistePunteggioUltime3Mani=$_SESSION["nPartiteSenzaPunti"];
    }else {
        $esistePunteggioUltime3Mani = 0;
    }

    for($cntEstrazioni=0;
        $cntEstrazioni < 3;
        $cntEstrazioni++)
    {
        //0,1,2
        $estrazione[$cntEstrazioni] =
            rand(0,2);

        //r,g,b
        //$valEstratti[$cntEstrazioni] =
        //    $frutta[$estrazione[$cntEstrazioni]];
		
		//Immagini frutta
		$valEstratti[$cntEstrazioni] =
            $imgFrutta[$estrazione[$cntEstrazioni]];

        /*
         * $valEstratti[$cntEstrazioni] =
            $frutta[rand(0,2)];
         */

    }

	//rgb
    /*$risultato = $valEstratti[0] . "," .
                 $valEstratti[1] . "," .
                 $valEstratti[2];*/
	//immagini
	$risultato = "<img src='img/". $valEstratti[0] . "' width='50' height='50' />&nbsp;" .
				 "<img src='img/". $valEstratti[1] . "' width='50' height='50' />&nbsp;" .
				 "<img src='img/". $valEstratti[2] . "' width='50' height='50' />";

    $newPoint = calculateHandlePoint($estrazione);

    if($newPoint!=0){
        $_SESSION["nPartiteSenzaPunti"]=0;
    }else{
        $_SESSION["nPartiteSenzaPunti"]++;
    }


    if(isset($_SESSION["punteggio"]))
    {
        $_SESSION["punteggio"]=
            $_SESSION["punteggio"]+$newPoint;
    }else{
        $_SESSION["punteggio"]=$newPoint;
    }
    if(isset($_SESSION["nGiocate"])) {
        $_SESSION["nGiocate"] = $_SESSION["nGiocate"] + 1;
    }else{
        $_SESSION["nGiocate"]=1;
    }
	
	//Passi pagina php
	//1) Impostazione della sessione da request
	//2) Elaborazione
	//3) Scrittura della sessione
	//4) Stampa
    echo "Punteggio: " . $_SESSION["punteggio"] . "<br><br>";
	
	echo $risultato . "<br>";
	
	echo "Possibili mani mancanti alla fine: " . $_SESSION["nPartiteSenzaPunti"] . "<br>";
	
	if($_SESSION["nPartiteSenzaPunti"]==3){
        echo "<br><h3><b>Game over!!</b></h3><br>";
		$_SESSION["punteggio"] = 0;
    }else{
        echo "<input type=\"button\" name=\"bInvia\" value=\"gioca\" 
                onclick=\"window.location='giocaImg.php'; window.load();\"/><br>";
		echo "<input type=\"button\" name=\"bInvia\" value=\"nuova partita\" 
                onclick=\"window.location='inizializza.php'; window.load();\"/><br>";
        //echo "<form action =\"gioca.php\"><input type=\"button\" value=\"invia\"/> </form>";
    }
	





    function calculateHandlePoint($estrazione)
    {
        $handlePoint = 0;
        if($estrazione[0] == $estrazione[1]
            || $estrazione[0] == $estrazione[2]
            || $estrazione[1] == $estrazione[2])
            $handlePoint = $handlePoint+2;

        if($estrazione[0] == $estrazione[1]
            && $estrazione[1] == $estrazione[2])
            $handlePoint = $handlePoint+3;


        return $handlePoint;
    }
?>

