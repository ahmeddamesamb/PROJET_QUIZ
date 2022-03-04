
    <?php
            require_once(PATH_TEMPLATES."include/header.html.php"); 
    ?> 
    <div class="container">
       <div class="header">
        <h1 id="h1">CREER ET PARAMETRER VOS QUIZ</h1>
        <button class="bouton">Deconnexion</button>
       </div>
       <div class="main">
          <div class="main-gauche">
            <div id="avatar">
                <img class="img-re"  src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."b.jpg"?> ">
             <h1>admin</h1>
            </div>
            <div id="list">
               <div>
               <a href="">List Questions</a>
               <img src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-liste.png"?> ">
               </div>
               <div>
               <a href="">Creer Admin</a>
               <img src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-ajout-active.png"?> ">
               </div>
               <div>
               <a href="">List Joueur</a>
               <img src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-liste.png"?> ">
               </div>
               <div>
               <a href="">Creer Questions</a>
               <img src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-ajout.png"?> ">
               </div>
              
            </div>
          </div>
          <div class="main-droite">
              
          <form action="" method="POST">
      <div class="div-hed1">
         <h1>S'INSCRIR</h1> 
         <p>Pour Proposer des Quizz</p>
         
      </div>
      <img class="avatar"  src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."avatar.jpg"?>" alt="">

      <div class="div-labint">
          <label>
              Prenom
          </label>
          <input type="text" name="prenom" placeholder="veiller saisir votre prenom">

          <label>
              Nom
          </label>
          <input type="text" name="nom" placeholder="veiller saisir votre nom">
          <label>
              Login
          </label>
          <input type="email" name="email" placeholder="veiller saisir votre Email">
          <label>
              Password
          </label>
          <input type="password" name="password" placeholder="password">
          <label>
              Confirmer password
          </label>
          <input type="password" name="confirmpassword" placeholder="confirm-password">
      </div>
      <div class="fichier">
      <h1>Avatar</h1>
      <a href="">Choisir Fichier</a>
      </div>
      <button>Créer compte</button>
    </form>
          
          </div>
       </div>
    </div>