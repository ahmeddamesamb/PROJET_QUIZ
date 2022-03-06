<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");

   if($_SERVER['REQUEST_METHOD']=="POST"){
       if(isset($_POST['action'])){
           echo"quand l util";
       }
   }
       /**
       * Traitement des Requetes GET
       * quand utilisateur a cliquer sur un lien et nous devons lui charger la page de connexion
       */
       if($_SERVER['REQUEST_METHOD']=="GET"){
           if(isset($_GET['action'])){
                    if(is_admin()){ 
                
                        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."accueil.html.php");
 
                        
                        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."dashbord.user.php");                   
                           
                       
                        
                            exit();
                    }
                    elseif(is_JOUEUR()){
                        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."accueil.html.php");
                            
                    }
                    else{
                        header("Location:".PATH_POST);

                    }    
        }
        else{
                header("Location:".PATH_POST);
                exit();
          }
     } 
      
       

 


       // fonction verifier user or admin connect to
