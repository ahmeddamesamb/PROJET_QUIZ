<?php
    // LE ROUTEUR CHARGE LES CONTROLLEUR MAIS ON IL SE BASE SUR QUOI POUR LES CHARGER???
    //il se base sur la variable gobale $_REQUEST{qui englobe le GET ET POST}
//     echo"<pre>";
// var_dump(ROOT);
// echo"</pre>";

    if(isset($_REQUEST['controlleurs']) ){
        switch ($_REQUEST['controlleurs']) {
        case "securite" :
        require_once(PATH_SRC."controlleurs/securite.controllers.php");
        break;
        case "user" :
        require_once(PATH_SRC."controlleurs/user.controllers.php");
        break;
        default :require_once(PATH_SRC."controlleurs/erreur.controllers.php");
        }
        }
    else{
        require_once(PATH_SRC."controlleurs/securite.controllers.php");
    }
