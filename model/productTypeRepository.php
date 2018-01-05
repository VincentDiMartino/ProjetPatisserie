
<?php

  try{

     $bdd = new PDO('mysql:host=localhost;dbname=projetpatisserie;charset=utf8', 'root', '');

}
  catch (Exception $e){

    die('Erreur : ' . $e->getMessage());
  }

function getAllProductType (){


    global $bdd;

    $response = $bdd->query('SELECT * FROM product_type');

    return $response->fetchAll();
}

function getProductTypeById ($id){

    global $bdd;
    $response = $bdd->query('SELECT name FROM product_type WHERE id ='.$id);

    return $response->fetch();

}


function getPriceMinByProductTypeId ($id){

    global $bdd;

    $prixMin = $bdd->query('SELECT MIN(price) FROM product WHERE id_type = '.$id);

    $prixMin = $prixMin->fetch();

    $response = $bdd->query('SELECT * FROM product WHERE id_type = '.$id.' And price = '.$prixMin['MIN(price)']);

    return $response->fetchAll();

}

function getPriceMaxByProductTypeId ($id){

    global $bdd;

    $prixMin = $bdd->query('SELECT Max(price) FROM product WHERE id_type = '.$id);

    $prixMin = $prixMin->fetch();

    $response = $bdd->query('SELECT * FROM product WHERE id_type = '.$id.' And price = '.$prixMin['MIN(price)']);

    return $response->fetchAll();

}
?>
