<!DOCTYPE html>
<html>
<?php

  include('controller/productProvider.php');

?>
<head>
  <meta charset="utf-8">
  <title>BOULANGERIE PATISSERIE DES PETITS GATEAUX A TOUT MOMENT DE LA JOURNEE</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/table.css">
  <link rel="stylesheet" href="css/search.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/svg" href="img/patisserie_logo.svg" />
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1"><img src="img/patisserie_logo.svg" class="logo"></span>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="input-group mb-3 search">
          <input type="text" id="searchInput" class="form-control" placeholder="Filtrer recherche" aria-label="Filtrer recherche" aria-describedby="basic-addon2">
        </div>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Produit</th>
              <th scope="col">Prix</th>
              <th scope="col">Artisan</th>
              <th scope="col">Ville</th>
            </tr>
          </thead>
          <tbody id="productsTable">

              <?php

                $products = getProduct();

                foreach($products as $product){

                    echo' <tr>
                      <th scope="row">1</th>
                      <td>'.$product['id'].'</td>
                      <td>'.$product['id_type'].'</td>
                      <td>'.$product['craftsmen'].'</td>
                      <td>'.$product['price'].'</td>';
                }
              ?>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>



  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/app.js"></script>

</body>
</html>
