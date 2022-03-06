<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNEXION</title>
    <link rel="stylesheet" href="<?=PATH_POST."css".DIRECTORY_SEPARATOR."Style.connexion.css"?>"  >
    <link rel="stylesheet" href="<?=PATH_POST."css".DIRECTORY_SEPARATOR."Style.inscription.css"?>"  >

</head>
<body>
    <div class="div-hed" id="div-hed">
        <img class="imag2" src="<?=PATH_POST."images".DIRECTORY_SEPARATOR."icones".DIRECTORY_SEPARATOR."logo-QuizzSA.png"?>" alt="">
        <h1 id="h1">Le plaisir de jouer</h1>
        <?php if (is_connect())  : ?>
                <a href="<?=PATH_POST.'?controlleurs=securite&action=deconnexion'?>" class="bouton">Deconnexion</a>
        <?php endif; ?>
    </div>