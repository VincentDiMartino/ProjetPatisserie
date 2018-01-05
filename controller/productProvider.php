<?php

  include('../model/productRepository.php');

  $products = getAllProduct();


  /*while($dat = mysql_fetch_assoc($products)){
   $productArray[] = $dat['champ_prenom'];
 }

  echo $productArray;
*/
?>
  <form method=POST action=../view/index.php>
     <input type="hidden" name="var1" value=<?php $products ?>></input>
  </form>
