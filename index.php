<!DOCTYPE html>
<html>
<?php

  include('controller/productProvider.php');

?>
<head>
  <meta charset="utf-8">
  <title>Boulangerie Patisserie, des petits gâteaux à tout moment de la journée</title>
  <link rel="stylesheet" href="view/css/style.css">
  <link rel="stylesheet" href="view/css/table.css">
  <link rel="stylesheet" href="view/css/search.css">
  <link rel="stylesheet" href="view/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/css/fontawesome-all.css">
  <link rel="icon" type="image/svg" href="view/img/patisserie_logo.svg" />
</head>
<body>

  <nav class="navbar navbar-light bg-light">
    <a href="#"><span class="navbar-brand mb-0 h1"><img src="view/img/patisserie_logo.svg" class="logo"></span></a>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="input-group mb-3 search">
          <input type="text" id="searchInput" class="form-control" placeholder="Filtrer recherche" aria-label="Filtrer recherche" aria-describedby="basic-addon2">
        </div>

        <table class="table" id="productsTable">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col" data-sort="string" data-sort-onload=yes>Produit <i class="fa fa-sort" aria-hidden="true"></i></th>
              <th scope="col" data-sort="float">Prix <i class="fa fa-sort" aria-hidden="true"></i></th>
              <th scope="col" data-sort="string">Artisan <i class="fa fa-sort" aria-hidden="true"></i></th>
              <th scope="col" data-sort="string">Ville <i class="fa fa-sort" aria-hidden="true"></i></th>
            </tr>
          </thead>
          <tbody id="productsTableContent">
            <?php

              $products = getProduct();
              $rowNumber = 0;
              foreach($products as $product){
<<<<<<< HEAD
=======

                $rowNumber++;

>>>>>>> feature/feature-vincent
                  echo' <tr>
                    <th scope="row">'.$rowNumber.'</th>
                    <td>'.$product['productType'].'</td>
                    <td>'.$product['price'].'</td>
                    <td>'.$product['craftsmen'].'</td>
                    <td>'.$product['ville'].'</td>
                    </tr>';
              }
            ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>

  <script type="text/javascript" src="view/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="view/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="view/js/stupidtable.min.js"></script>
  <script type="text/javascript" src="view/js/stupidtable.js"></script>
  <script type="text/javascript" src="view/js/app.js"></script>



</body>
</html>
