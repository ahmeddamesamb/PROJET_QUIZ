<?php
   // USER CONTROLLEUR GERE TOUT CE QUI EST RELATIVE AU UTILISATEUR LISTE UN JOUEUR CREER UN ADMIN ETC...
   // POUR LE CREER ON SE BASE SUR LES DONNEE QUI SERONT SUR LA BASE DE DONNEÉ EXEMPLE USERS,UTILISATEUR
   
   // SECURITE CONTROLLEUR GERE TOUT CE QUI EST RELATIVE A LA CONNEXION ET A LA DECONEXION
   /**il se base sur la methode utilise pour faire le traitement
   * Traitement des Requetes
   POST
   //quand l utilisateur a soumis le formulaire et nous nous devons faire le traitement on utilise ceci
   */
   if($_SERVER['REQUEST_METHOD']=="POST"){
       if(isset($_POST['action'])){
           echo"quand l utilisateur a soumis le formulaire et nous nous devons faire le traitement on utilise ceci";
       }
       }
       /**
       * Traitement des Requetes GET
       * quand utilisateur a cliquer sur un lien et nous devons lui charger la page de connexion
       */
       if($_SERVER['REQUEST_METHOD']=="GET"){
       if(isset($_GET['action'])=="accueil"){
             require_once(PATH_TEMPLATES."user".DIRECTORY_SEPARATOR."accueil.html.php");

   
       } 
      
       }
