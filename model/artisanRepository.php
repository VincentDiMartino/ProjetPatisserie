
<?php

  try{

     $bdd = new PDO('mysql:host=localhost;dbname=projetpatisserie;charset=utf8', 'root', '');

  }
  catch (Exception $e){

    die('Erreur : ' . $e->getMessage());
  }

function getArtisanById ($id){

    global $bdd;
    $response = $bdd->query('SELECT name FROM craftsmen WHERE id ='.$id);

    return $response->fetch();

}

function getArtisanVille ($id){

    global $bdd;

    $response = $bdd->query('SELECT v.name FROM craftsmen c, ville v WHERE c.id = '.$id.' AND c.id_city = v.id');

    return $response->fetch();

}

?>
