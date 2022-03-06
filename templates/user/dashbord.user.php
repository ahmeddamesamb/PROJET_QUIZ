<div class="container">
       <div class="header">
        <h1 id="h1">CREER ET PARAMETRER VOS QUIZ</h1>
        
        <a href="<?=PATH_POST.'?controlleurs=securite&action=deconnexion'?>" class="bouton">Deconnexion</a>

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
<?php
    require_once(PATH_TEMPLATES."securite".DIRECTORY_SEPARATOR."inscription.html.php");
?>

</div>
       
       </div>
    </div>