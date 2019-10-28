<?php
/**
 * Created by PhpStorm.
 * User: d.claudio.borgogno
 * Date: 25/10/2019
 * Time: 11:55
 */
    $json="[";

    for($cntJson=1; $cntJson<12; $cntJson=$cntJson+2){
        if($cntJson>1)
            $json = $json . ", ";
        
        $json= $json . $cntJson;
    }

    $json= $json . "]";

    echo $json;
?>