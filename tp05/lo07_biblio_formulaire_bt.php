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