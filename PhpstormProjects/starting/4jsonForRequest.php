<?php
/**
 * Created by PhpStorm.
 * User: d.claudio.borgogno
 * Date: 25/10/2019
 * Time: 12:09
 */

    $value1 = $_REQUEST["key1"];
    
    $value2 = $_REQUEST["key2"];

    $json="[";
    
    for($cntJson=$value1; $cntJson<$value2; $cntJson=$cntJson+2){
        if($cntJson>$value1)
            $json = $json . ", ";
    
        $json= $json . $cntJson;
    }
    
    $json= $json . "]";
    
    echo $json;
?>