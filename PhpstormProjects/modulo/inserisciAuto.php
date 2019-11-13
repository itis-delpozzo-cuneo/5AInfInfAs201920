<?php
/**
 * Created by PhpStorm.
 * User: d.claudio.borgogno
 * Date: 11/11/2019
 * Time: 12:54
 */
    //http://localhost/modulo/inserisciAuto.php?
    //  cognome=cognome1&nome=nome1&email=&password=
    //  &marca=1&nomeFile=&bInvia=invia
    
    $cognome = $_REQUEST["cognome"];
    //$cognome = $_GET["cognome"];
    //$cognome = $_POST["cognome"];

    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    //http://localhost:63342/modulo/inserisciAuto.php?
    //  cognome=cognome1&nome=nome1&email=tr%40dfg.it
    //  &password=password&marca=1&modello=2
    //  &optional=2&optional=3&nomeFile=&bInvia=invia
    $marca = $_REQUEST["marca"];
    $modello = $_REQUEST["modello"];

    //$optional è una checkbox -> selezione multipla
    //                         -> vettore php
    $optional = $_REQUEST["optional"];

    $debug=1;
    if($debug){
        echo "nome: " . $nome . "</br>";
        echo "cognome: " . $cognome . "</br>";
        echo "email: " . $email . "</br>";
        echo "password: " . $password . "</br>";
        echo "marca: " . $marca . "</br>";
        echo "modello: " . $modello . "</br>";

        echo "optional: ";
        foreach($optional as $opt){
            //for ($opt in $optional)
            echo $opt . ", ";
        }
    }
?>