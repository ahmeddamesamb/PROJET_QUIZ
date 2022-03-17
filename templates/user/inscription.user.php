<?php
	  if (isset($_SESSION[KEY_ERRORS])){
        $errors=$_SESSION[KEY_ERRORS];
        unset($_SESSION[KEY_ERRORS]);
    }
?>
<div id="aly">
 
	<form id="form" class="form" method="POST" enctype="multipart/form-data" novalidate action="<?=PATH_POST?>">
     
		<input type="hidden" name="controlleurs" value="securite">
		<input type="hidden" name="action" value="inscription">

        

		<div class="form-control">
		<label for="username">PRENOM</label>
		<input type="text" placeholder="veiller saisir votre prenom" id="username" name="username" />
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error message</small>

		<?php if (isset($errors['prenom'])):?> 
            <p style="color:red"  ><?=$errors['prenom'];?></p>
        <?php endif?>

		</div>
		<div class="form-control">
		<label for="name">NOM</label>
		<input type="text" placeholder="veiller saisir votre nom" id="name" name="name" />
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error message</small>

		<?php if (isset($errors['nom'])):?> 
            <p style="color:red"  > <?=$errors['nom'];?></p>
        <?php endif?>


		</div>
		<div class="form-control">
		<label for="email">Email</label>
		<input type="email" placeholder="veiller saisir votre @dresse Email" id="email" name="email" />
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error message</small>

		<?php if (isset($errors['email'])):?> 
            <p style="color:red"  > <?=$errors['email'];?></p>
        <?php endif?>


		</div>
		<div class="form-control">
		<label for="password">Password</label>
		<input type="password" placeholder="saisir votre Password" id="password" name="password"/>
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error message</small>

		<?php if (isset($errors['password'])):?> 
            <p style="color:red"  > <?=$errors['password'];?></p>
        <?php endif?>


		</div>
		<div class="form-control">
		<label for="password2">Password Confirm</label>
		<input type="password" placeholder="veiller confirmer" id="password2" name="password2"/>
		<i class="fas fa-check-circle"></i>
		<i class="fas fa-exclamation-circle"></i>
		<small>Error message</small>

		<?php if (isset($errors['password2'])):?> 
            <p style="color:red"  > <?=$errors['password2'];?></p>
        <?php endif?>


		</div>
		<input type="file" id="file" name="fichier"/>
		
		<button>Submit</button>
	</form>
	
	
	<div id="wane">
		<label for="file" >
			<img id="imgup" class="avatar"  src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."avatar.jpg"?>" alt="">

		</label>
	</div>
</div>



<!-- <script src="<?=PATH_POST."js".DIRECTORY_SEPARATOR."inscription.js"?>"> </script> -->