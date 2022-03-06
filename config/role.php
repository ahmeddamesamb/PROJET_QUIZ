<?php
   define("JOUEUR","JOUEUR");
   define("ADMIN","ADMIN");
 
   function is_connect():bool {
        return isset($_SESSION[KEY_USER_CONNECT]);
  }
 
  function is_JOUEUR(){
      return is_connect() && $_SESSION[KEY_USER_CONNECT]['role']=="JOUEUR";
  }
 
  function is_admin(){
      return is_connect() && $_SESSION[KEY_USER_CONNECT]['role']=="ADMIN";
  }
