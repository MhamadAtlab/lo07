<?php

function form_begin($class, $method, $action){
    printf("<form class='%s' method='%s' action='%s'>", $class, $method, $action);
}
function form_input_text($label, $name, $size, $value){
    echo ("<div class='form-group'>");
    echo (" <label for='$label'>$label</label>");
    echo '<br>';
    echo (" <input type='text' class='form-control' name='$name' size='$size' value='$value' >");
    echo ("</div>");
}
function form_input_email($label, $name, $size, $value){
    echo ("<div class='form-group'>");
    echo (" <label for='$label'>$label</label>");
    echo '<br>';
    echo (" <input type='email' class='form-control' name='$name' size='$size' value='$value' >");
    echo ("</div>");
}
function form_input_number($label, $name, $size,$min,$max, $value){
    echo ("<div class='form-group'>");
    echo (" <label for='$label'>$label</label>");
    echo '<br>';
    echo (" <input type='number' class='form-control' name='$name' size='$size' min='$min' max='$max' value='$value' >");
    echo ("</div>");
}
function form_select($label, $name, $multiple, $size, $liste){
    echo ("<div class='form-group'>");
    echo ("<label>$label</label>");
    echo '<br>';
    printf("<select class='form-control' name='%s[]' %s size='%u' />",$name,$multiple,$size);
    foreach ($liste as $value) {
        if($value=="samedi")   break;
            else    printf("<option value='%s'>%s</option>",$value,$value);
    }
    echo '</select>';
    echo ("</div>");
}
function form_input_reset($value){
    printf("<input type='reset' value='%s'>",$value);
}
function form_input_submit($value){
    printf("<input type='submit' value='%s'>",$value);
}
function form_end(){
    echo '</form>';
}

function form_input_hidden($name,$var){
    if(is_array($var)){
        foreach ($var as $key => $value) {
            printf (" <input  class='form-control' type='hidden' name='%s' value='%s' >",$key,$value);
        }
    }
    else {
        printf (" <input  class='form-control' type='hidden' name='%s' value='%s' >",$name,$var);
    }
}
function make_panel($name,$type,$body){
    $panel = "<div class='panel panel-".$type."'>";
    $panel .= "  <div class='panel-heading'>";
    $panel .= "    <h3 class='panel-title'>SuperGlobale " . $name . "</h3>";
    $panel .= "  </div>";   
    $panel .="<div class='panel-body'>".$body."</div>";
    $panel .= "</div>";
    return $panel;
}
function make_table($var){
     echo ("<table class = 'table table-striped table-bordered'>");
                    echo ("<thead>");
                    echo ("<tr><th scope = 'col'>name</th><th scope = 'col'>valeur(s)</th></tr>");
                    echo ("</thead>");
                    foreach ($var as $cle => $valeur) {
                    if (is_array($valeur)) {
                       $liste = implode(", ", $valeur);
                       echo ("<tr><td>$cle</td><td>$liste</td</tr>");                            
                    }
                    else {
                        echo ("<tr><td>$cle</td><td>$valeur</td</tr>"); 
                    }
                    }
                
                    echo ("</tbody>");
                    echo ("</table>");
}