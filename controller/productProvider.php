<?php

  include('model/productRepository.php');
  include('model/artisanRepository.php');

  function getProduct(){



  $products = getAllProduct();

  foreach($products as $key => $product){

      $artisan = getArtisanById($product['id_type']);
      $products[$key]['craftsmen'] = $artisan['name'];

  }

  return $products;

  }
?>
