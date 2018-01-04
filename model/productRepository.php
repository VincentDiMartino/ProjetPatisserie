
<?php

try{

    $bdd = new PDO('mysql:host=localhost;dbname=projetpatisserie;charset=utf8', 'root', '');

}
catch (Exception $e){

    die('Erreur : ' . $e->getMessage());
}

function getAllProduct (){

    $reponse = $bdd->query('get * From product');
    return $response;
}

?>
