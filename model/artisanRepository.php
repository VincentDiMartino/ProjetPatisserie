
<?php


function getArtisantById ($id){

    try{

      $bdd = new PDO('mysql:host=localhost;dbname=projetpatisserie;charset=utf8', 'root', '');

    }
    catch (Exception $e){

      die('Erreur : ' . $e->getMessage());
    }

    $response = $bdd->query('SELECT nom FROM artisant WHERE id ='.$id);

    return $response;

}

?>
