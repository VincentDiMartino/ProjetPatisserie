<?php

  include('model/productRepository.php');
  include('model/artisanRepository.php');

  function getProduct(){


  $products = getAllProduct();

  /*foreach($products as $product){
      $artisan = getArtisantById($product['id_type']);
      array_push($product, $artisan);
  }*/
  $id = $products['1']['id_artisan'];
  echo $id;
  $artisan = getArtisantById($id);
  array_push($products[1], $artisan);

  return $products;
  }
?>
