<?php
function arr_UTT(){
    return array(
            "ville" => "Troyes", "effectif" => 3000
        );
}
function arr_UTC(){
    return array(
            "ville" => "Compiègne", "effectif" => 3200
        );
}
function arr_UTBM(){
    return $arr_UTBM=array(
            "ville" => "Troyes", "Belfort" => 3100
        );
}
function Uni_arr(){
    return array(
            "UTT"=>arr_UTT(),
            "UTC"=>arr_UTC(),
            "UTBM"=>arr_UTBM()
          );
}