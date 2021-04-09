<?php

function listeJourLabel(){
    return array("lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche");
}
function listeJourIndice(){
    for ($i=0;$i<31;$i++){
        $jours[$i]=$i+1;
    }
    return $jours;
}
function listeMois(){
    return array("janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre");
}
function listeSeance(){
    foreach ([8,9,10,11,14,15,16,17] as $i)
            for($j=0;$j<5;$j+=2){
                $arr[]=sprintf("%02uh%u0",$i,$j);
            }
        return $arr;
}