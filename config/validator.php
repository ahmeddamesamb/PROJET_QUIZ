<?php
    function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
    if(empty($data)){
    $errors[$key]=$message;
    }
    }
    function valid_email(string $key,string $data,array &$errors,string $message="email
    invalid"){
    if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
    $errors[$key]=$message;
    }
    }
    function validePassword($password,&$errors,$key,$message="format password invalide"){
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{6,}$/', $password)) {
         $errors[$key]=$message;
            
        }
    }
    function motDePasseCorrespondance( $password1, $password2,$errors,$key,$message="les mots de passe ne correspond pas"){
        if($password1!=$password2){
            $errors[$key]=$message;
        }
    }
