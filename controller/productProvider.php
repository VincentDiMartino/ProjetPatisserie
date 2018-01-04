<?php

  include('../model/productRepository.php');

  $products = getAllProduct();
  echo $products;

?>
