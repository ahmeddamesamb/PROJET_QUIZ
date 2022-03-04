<?php
// SECURITE CONTROLLEUR GERE TOUT CE QUI EST RELATIVE A LA CONNEXION ET A LA DECONEXION
/**il se base sur la methode utilise pour faire le traitement
* Traitement des Requetes
POST
//quand l utilisateur a soumis le formulaire et nous nous devons faire le traitement on utilise ceci
*/

require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
   if (isset($_POST['action'])){
     if($_POST['action']=="conxion"){
      
      $login=$_POST['email'];
      $password=$_POST['password'];
    
      connexion($login,$password);  
     }
    }
}
    
 
    function connexion(string $login,string $password):void {
     
      $errors=[];
      champ_obligatoire('login',$login,$errors,"login obligatoire");
      if(count($errors)==0){
        valid_email('login',$login,$errors);
      }
      champ_obligatoire('password',$password,$errors);
      if(count($errors)==0){
        
         // appel d une fonction du models  
         $user=find_user_login_password($login,$password);
   
         // utilisateur existe
         if(count($user)!=0){
           $_SESSION[KEY_USER_CONNECT]=$user;
           header("location:".PATH_POST."?controlleurs=user&action=accueil");
           exit();
         }
         // utilisateur n'existe pas
         
         else{
          $errors['connexion']="Login ou mot de passe incorrecte";
          $_SESSION[KEY_ERRORS]=$errors; 
          header("location:".PATH_POST);
          exit();
         }
      }
      else{
        //erreur de validation
        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".PATH_POST);
        exit();
      }
     }
    
   
    if($_SERVER['REQUEST_METHOD']=="GET"){
       if(isset($_REQUEST['action'])){
          if ($_REQUEST['action']=="connexion") {
          
          // echo"charger la page de connexion";
            require_once(PATH_TEMPLATES."securite/connexion.html.php"); 
          }
          elseif($_REQUEST['action']=="inscription"){
          //chargement de la page d inscription
          require_once(PATH_TEMPLATES."securite/inscription.html.php"); 
     
         }
        else{
        require_once(PATH_TEMPLATES."securite/connexion.html.php"); 
        }
     }
     else{
      require_once(PATH_TEMPLATES."securite/connexion.html.php"); 

     }
    }