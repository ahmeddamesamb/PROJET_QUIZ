<?php
    // ORM NOUS PERMET DE FAIRE LA CONVERSION ENTRE LES CHOSE QUI ENTRE ET QUI SORTE DU FICHIER JSON DANS LE DB
    ///Recuperation des donnees du fichier
function json_to_array(string $key):array{
$dataJson=file_get_contents(PATH_DB);
$data=json_decode($dataJson,true);
return $data[$key];
}
//Enregistrement et Mis a jour des donnees du fichier
function array_to_json(string $key,array $data){
    $dataJson=file_get_contents(PATH_DB);
    $tableau=json_decode($dataJson,true);
    $tableau[$key][] = $data;
    $add = json_encode($tableau,JSON_PRETTY_PRINT);
    file_put_contents(PATH_DB,$add);
}

