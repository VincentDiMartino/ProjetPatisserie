<?php

  include('model/productRepository.php');
  include('model/artisanRepository.php');
  include('model/productTypeRepository.php');

  function getProduct(){



  $products = getAllProduct();

  foreach($products as $key => $product){

      $artisan = getArtisanById($product['id_craftsmen']);
      $products[$key]['craftsmen'] = $artisan['name'];
      $productType = getProductTypeById($product['id_type']);
      $products[$key]['productType'] = $productType['name'];


  }

  return $products;

  }
?>
