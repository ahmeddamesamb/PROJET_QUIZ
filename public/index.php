
<?php
ini_set('display_error', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);
//Demarrage de la sesion

if(session_status()==PHP_SESSION_NONE){
    session_start();
}
// INCLUSION DE MES CONSTANTS 
require_once dirname(dirname(__FILE__)) ."/config/constantes.php";
// INCLUSION DE VALIDATOR
require_once dirname(dirname(__FILE__)) ."/config/validator.php";
// INCLUSION DU ROLE
require_once dirname(dirname(__FILE__)) ."/config/role.php";
// INCLUSION DE  ORM 
require_once dirname(dirname(__FILE__)) ."/config/orm.php";
// INCLUSION DE ROUTER
require_once dirname(dirname(__FILE__)) ."/config/router.php";

// var_dump(find_user_login_password($login,$password));