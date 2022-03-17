<?php
   define("JOUEUR","JOUEUR");
   define("ADMIN","ADMIN");
     //*===================FONCTIONS QUI TESTE SI UN UTILISATEUR EST CONNECTER==================================
 
   function is_connect():bool {
        return isset($_SESSION[KEY_USER_CONNECT]);
  }
     //*===================FONCTIONS QUI TESTE SI UN UTILISATEUR EST UN JOUEUR==================================
     
 
  function is_JOUEUR(){
      return is_connect() && $_SESSION[KEY_USER_CONNECT]['role']=="JOUEUR";
  }
     //*===================FONCTIONS QUI TESTE SI UN UTILISATEUR EST ADMINISTRATEUR==================================
 
  function is_admin(){
      return is_connect() && $_SESSION[KEY_USER_CONNECT]['role']=="ADMIN";
  }
