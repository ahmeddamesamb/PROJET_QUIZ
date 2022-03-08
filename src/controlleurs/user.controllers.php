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
              
                 if($_GET['action']=="accueil"){       
                    if(is_admin()){
                        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."accueil.html.php");
                    }  
                    elseif(is_JOUEUR()){
                    
                        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."page.user.php");

                    
                    } 
                    else{
                        header("Location:".PATH_POST);
                    
                    }  
                }elseif ($_GET['action']=="listeJ") {
                    lister_joueur();
                }
                elseif ($_GET['action']=="creer.admin") {
                    creerQuestion();
                }
                elseif ($_GET['action']=="inscription_adm") {
                    inscription_admin();
                }
                elseif ($_GET['action']=="listQuest") {
                    listQuestion();
                }
                else{
                    header("Location:".PATH_POST);
                
                }  
            }
            else{
                header("Location:".PATH_POST);
            
            }  
        }        
    
     // LISTE DES JOUEUR FONCTIONS
    function lister_joueur():void{ 
        ob_start(); 
        $data=find_users(JOUEUR);
        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."liste.joueur.user.php");
        $page = ob_get_clean();
        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."accueil.html.php");  
    }
    function inscription_admin():void{ 
        ob_start(); 
        // $data=find_users(JOUEUR);
        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."inscription.user.php");
        $page = ob_get_clean();
        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."accueil.html.php");  
    }
    function listQuestion():void{ 
        ob_start(); 
        // $data=find_users(JOUEUR);
        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."liste.Questions.user.php");
        $page = ob_get_clean();
        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."accueil.html.php");  
    }
    function creerQuestion():void{ 
        ob_start(); 
        // $data=find_users(JOUEUR);
        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."creer.Question.php");
        $page = ob_get_clean();
        require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."accueil.html.php");  
    }
