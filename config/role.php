<?php
   define("JOUEUR","JOUEUR");
   define("ADMIN","ADMIN");
 
   function is_connect():bool {
        return isset($_SERVER[KEY_USER_CONNECT]);
  }
 
  function is_joueur(){
      return is_connect() && [KEY_USER_CONNECT]['role']="JOUEUR";
  }
 
  function is_admin(){
      return is_connect() && [KEY_USER_CONNECT]['role']="ADMIN";
  }
