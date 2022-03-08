<form action="" method="POST">
      <div class="div-hed1">
         <h1>S'INSCRIR</h1> 
         <p>Pour tester votre niveau de culture générale</p>
      </div>
        <div id="div-avatar">
        <img class="avatar"  src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."avatar.jpg"?>" alt="">
        </div>
      <div class="div-labint">
          <label>
              Prenom
          </label>
          <input class="form_input_inscription" type="text" name="prenom" placeholder="veiller saisir votre prenom">

          <label>
              Nom
          </label>
          <input class="form_input_inscription" type="text" name="nom" placeholder="veiller saisir votre nom">
          <label>
              Login
          </label>
          <input class="form_input_inscription" type="email" name="email" placeholder="veiller saisir votre Email">
          <label>
              Password
          </label>
          <input class="form_input_inscription" type="password" name="password" placeholder="password">
          <label>
              Confirmer password
          </label>
          <input class="form_input_inscription" type="password" name="confirmpassword" placeholder="confirm-password">
      </div>

      <div class="fichier">
          <h1>Avatar</h1>
          
          <label for="fichie" id="lab">choisir un fichier</label>
          <input type="file" id="fichie" >
      
      </div>
      <button>Créer compte</button>
    </form>