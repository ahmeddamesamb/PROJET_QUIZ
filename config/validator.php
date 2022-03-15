<?php
     //*===================FONCTIONS QUI REVOIS LES ERREURS SI LE CHAMPS EST VIDE===================================
    function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
    if(empty($data)){
    $errors[$key]=$message;
    }
    }
     //*===================FONCTIONS QUI TESTE SI UN EMAIL EST VALIDE==================================
    function valid_email(string $key,string $data,array &$errors,string $message="email
    invalid"){
    if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
    $errors[$key]=$message;
    }
}
    //*===================FONCTIONS QUI TESTE SI UN MOT DE PASSE EST VALIDE==================================
    function validePassword($password,&$errors,$key,$message="format password invalide"){
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{6,}$/', $password)) {
         $errors[$key]=$message;
            
        }
    }
     //*===================FONCTIONS QUI TESTE SI DEUX MOT DE PASSE SONT CORRESPONDANT===================

    function motDePasseCorrespondance( $password1, $password2,$errors,$key,$message="les mots de passe ne correspond pas"){
        if($password1!=$password2){
            $errors[$key]=$message;
        }
    }
