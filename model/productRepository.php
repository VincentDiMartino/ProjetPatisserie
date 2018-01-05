
<?php

function getAllProduct (){

  try{

      $bdd = new PDO('mysql:host=localhost;dbname=projetpatisserie;charset=utf8', 'root', '');

  }
  catch (Exception $e){

      die('Erreur : ' . $e->getMessage());
  }
    $response = $bdd->query('SELECT * FROM product');

    return $response->fetchAll();
}

?>
