<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=PATH_POST."css".DIRECTORY_SEPARATOR."Style.inscription.css"?>"  >

    <title>Inscription Joueur</title>
</head>
<body>
    
<div class="div-hed">
            <img class="imag2" src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."logo-QuizzSA.png"?>" alt="">
            <h1 id="h1">Le plaisir de jouer</h1>
        </div>
    <form action="" method="POST">
      <div class="div-hed1">
         <h1>S'INSCRIR</h1> 
         <p>Pour tester votre niveau de culture générale</p>
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
</body>
</html>