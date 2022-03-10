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
     if($_POST['action']=="connexion"){   
      $login=$_POST['email'];
      $password=$_POST['password']; 
      connexion($login,$password); 
     }
     else if($_POST['action']=="inscription"){ 
      $tab=[];
      recupere_infos($tab);
      enregistUser($tab);
      
     }
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
    elseif($_REQUEST['action']=="deconnexion"){
    deconnexion();
    } 
   else{
   require_once(PATH_TEMPLATES."securite/connexion.html.php"); 
   }
}
else{
 require_once(PATH_TEMPLATES."securite/connexion.html.php"); 
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
     // FONCTION DECONNEXION
     function deconnexion(){
        session_destroy();
        session_unset();
        header("location:".PATH_POST);
        exit();
     }
     function recupere_infos(&$tab){
      $tab['nom'] = segue($_POST['name']);
      $tab['prenom'] = segue($_POST['username']);
      $tab['email'] = segue($_POST['email']);
      $tab['password'] = segue($_POST['password']);
      $tab['password2'] = segue($_POST['password2']);
      $tab['role']= is_admin() ? "ADMIN" : "JOUEUR";
      $tab['score']=0;
     }
     function segue(&$inputIns){
      return strip_tags(trim($inputIns));
     }
     function test_existance_logins($login,&$errors,$key,$message="login existe"){
      if(existe_login($login)){
        
        $errors[$key]=$message;

      }


     }
     function enregistUser($tableau){
        $errors=[];
        champ_obligatoire('nom',$tableau['nom'],$errors,"nom obligatoire");
        champ_obligatoire('prenom',$tableau['prenom'],$errors,"prenom obligatoire");
        champ_obligatoire('email',$tableau['email'],$errors,"email obligatoire");
        
        valid_email('email',$tableau['email'],$errors,"l'email est invalide");
        validePassword($tableau['password'],$errors,"password1","le mot de passe ne respecte pas le format");
        validePassword($tableau['password2'],$errors,"password2","le mot de passe ne respecte pas le format");
        motDePasseCorrespondance($tableau['password'],$tableau['password2'],$errors,"password2");
        
        champ_obligatoire('password',$tableau['password'],$errors,"password obligatoire");
        champ_obligatoire('password2',$tableau['password2'],$errors,"password2 obligatoire");

        test_existance_logins($tableau['email'],$errors,'email',);

        if(count($errors)==0){
          recupere_infos($tab);
          unset($tab['password2']);
          
          array_to_json("users",$tab);
          
        }else{
          $_SESSION[KEY_ERRORS]=$errors; 
        
          if(!is_connect()){
            header("Location:".PATH_POST."?controlleurs=securite&action=inscription");        
          }
          if(is_admin()){
            header("Location:".PATH_POST."?controlleurs=user&action=inscription_adm");        
           
          }
        }
     }
   
