
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

?>
