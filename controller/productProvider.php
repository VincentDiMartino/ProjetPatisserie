<?php

  include('model/productRepository.php');
  include('model/artisanRepository.php');
  include('model/productTypeRepository.php');

  function getProduct(){

  $products = getAllProduct();

  $productsWithDetails = getDetails($products);

  return $productsWithDetails;

  }

function getPriceMin ($idProductType) {

  $products = getPriceMinByProductTypeId($idProductType);

  $productsWithDetails = getDetails($products);

  return $productsWithDetails;

  return $products;
}

function getPriceMax ($idProductType) {

  $products = getPriceMaxByProductTypeId($idProductType);

  $productsWithDetails = getDetails($products);

  return $productsWithDetails;

  return $products;
}

function getType(){

$products = getAllProductType();

return $products;

}

function getDetails($products){

  foreach($products as $key => $product){
      $artisan = getArtisanById($product['id_craftsmen']);
      $products[$key]['craftsmen'] = $artisan['name'];
      $productType = getProductTypeById($product['id_type']);
      $products[$key]['productType'] = $productType['name'];
      $ville = getArtisanVille($product['id_craftsmen']);
      $products[$key]['ville'] = $ville['name'];
  }

  return $products;
}
?>
