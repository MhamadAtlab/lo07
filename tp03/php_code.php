<?php
$exercice1="Bonjour à tous";
list($nom,$prenom,$age,$ingenieur)=array("Durand","Pascal",32,true);
$capitalesAfrique=array("Alger","Bamako","Conakry","Cotonou","Maroc","Freetown","Kampala","Lomé","Nairobi","Yamoussoukro");
$capitalesAfrique[]="Maputo";
unset($capitalesAfrique[4]);
$capitalesEurope=array(
    "France" => "Paris",
    "Italie" => "Rome",
    "Belgique" => "Bruxelles",
    "Espagne" => "Madrid",
    "Allemagne" => "Berlin" ,
    "Portugal" => "Lisbonne"
);
$capitalesEurope_keys= array_keys($capitalesEurope);
$capitalesEurope_values= array_values($capitalesEurope);

function badge_danger($lable,$compteur){
    return "<button type='button' class='btn btn-danger'>$lable <spanclass='badge'>$compteur</span></button>";
}

