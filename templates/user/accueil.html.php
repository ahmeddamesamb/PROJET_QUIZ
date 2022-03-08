
    <?php
            require_once(PATH_TEMPLATES."include/header.html.php"); 
    ?> 

            
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
               <a href="<?=PATH_POST."?controlleurs=user&action=creer.admin"?>">Creer Questions</a>
               <img src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-liste.png"?> ">
               </div>
               <div>
               <a href="<?= PATH_POST."?controlleurs=user&action=inscription_adm" ?>">Creer Admin</a>
               <img src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-ajout-active.png"?> ">
               </div>
               <div>
               <a href="<?= PATH_POST."?controlleurs=user&action=listeJ" ?>">List Joueur</a>
               <img src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-liste.png"?> ">
               </div>
               <div>
               <a href="<?= PATH_POST."?controlleurs=user&action=listQuest" ?>">List Questions</a>
               <img src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."ic-ajout.png"?> ">
               </div>
              
            </div>
          </div>

<div class="main-droite">

<?= $page?>

</div>
       
       </div>
    </div>
     
         
         <?php require_once(PATH_TEMPLATES."include/footer.html.php"); ?> 