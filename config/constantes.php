<?php
                         // DEFINITION DES CONSTANTES DU PROJET 
// *****definition  de la constant SCRIPT_FILENAME pour ce pointer sur le dossier PROJECT PHP le dossier root*****


//***CONFIG VERS LE DOSSIER PARENT  project***
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));

//***CONFIG VERS LE DOSSIER PARENT***
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
//***CONFIG VERS LE DOSSIER PARENT public***
define("PATH_PUBLIC",ROOT."public".DIRECTORY_SEPARATOR);

//***CONFIG VERS LE DOSSIER PARENT remplate***
define("PATH_TEMPLATES",ROOT."templates".DIRECTORY_SEPARATOR);

//***CONFIG VERS LE DOSSIER PARENT data***
define("PATH_DATA",ROOT."data".DIRECTORY_SEPARATOR);
//***CONFIG VERS LE DOSSIER PARENT config***
define("PATH_CONFIG",ROOT."config".DIRECTORY_SEPARATOR);

//***CONFIG VERS LE DOSSIER PARENT /dat/db.json***
define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");

//***CONFIG VERS LE DOSSIER PARENT /dat/db.json***

define("WEBROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
// requet GET & POST
define("PATH_POST","http://localhost:8002/");
// cle d erreurs
define("KEY_ERRORS","errors");
// cle d' acces utilisateur connecter
define("KEY_USER_CONNECT","user-connect");
