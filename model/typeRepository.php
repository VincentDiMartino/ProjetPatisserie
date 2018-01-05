
<?php

  try{

     $bdd = new PDO('mysql:host=localhost;dbname=projetpatisserie;charset=utf8', 'root', '');

  }
  catch (Exception $e){

    die('Erreur : ' . $e->getMessage());
  }

function get ($id){

    global $bdd;
    $response = $bdd->query('SELECT name FROM product_type WHERE id ='.$id);

    return $response->fetch();

}

?>
