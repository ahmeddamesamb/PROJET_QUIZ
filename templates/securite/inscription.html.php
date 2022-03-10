<?php
    require_once(PATH_TEMPLATES."include/header.html.php"); 
    if (isset($_SESSION[KEY_ERRORS])){
        $errors=$_SESSION[KEY_ERRORS];
        unset($_SESSION[KEY_ERRORS]);
    }
    ?>  

<?php
    require_once(PATH_TEMPLATES."user/inscription.user.php"); 
?>