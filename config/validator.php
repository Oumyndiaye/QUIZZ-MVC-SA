<?php
function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
    if(empty($data)){
    $errors[$key]=$message;
    }
}
/* function valid_email(string $key,string $data,array &$errors,string $message="email invalid"){
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $data)) ? FALSE : TRUE;
}
    if(!valid_email( $key, $data,$errors,$message="email invalid")){
    $errors[$key]=$message;
    } */
function valid_email(string $key,string $data,array &$errors,string $message="email invalid"){
        if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
        $errors[$key]=$message;
        }
}
function valid_password(string $key,string $data,array &$errors,string $message="password invalid"){
    return(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/",$data)) ? FALSE : TRUE;
    if(!valid_password($key,$data,$errors,$message="password invalid")){
        $errors[$key]=$message;
    }
}
?>
