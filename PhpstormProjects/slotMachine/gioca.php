<?php
    session_start();

    $frutta=["R","G","B"];

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
        $valEstratti[$cntEstrazioni] =
            $frutta[$estrazione[$cntEstrazioni]];

        /*
         * $valEstratti[$cntEstrazioni] =
            $frutta[rand(0,2)];
         */

    }

    $risultato = $valEstratti[0] . "," .
                 $valEstratti[1] . "," .
                 $valEstratti[2];

    $newPoint = calculateHandlePoint($estrazione);

    if($newPoint!=0){
        $_SESSION["nPartiteSenzaPunti"]=0;
    }else{
        $_SESSION["nPartiteSenzaPunti"]++;
    }
    if($_SESSION["nPartiteSenzaPunti"]==3){
        echo "game over!!<br>";
    }else{
        echo "<input type=\"button\" name=\"bInvia\" value=\"gioca\" 
                onclick=\"window.location='gioca.php'; window.load();\"/>";
        //echo "<form action =\"gioca.php\"><input type=\"button\" value=\"invia\"/> </form>";
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
    echo $risultato;

    echo "Punteggio: " . $_SESSION["punteggio"];




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

