<?php 
function find_user_login_password(string $login,string $password):array{
    $users=json_to_array("users");

    foreach ($users as $user) {
    if( $user['email']==$login && $user['password']==$password)
    return $user;
    }
    return [];
    }