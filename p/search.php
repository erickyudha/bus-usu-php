<?php
require_once './filter.php';
// CHOOSE 1 ENDPOINT FILE: endpoint.php or endpoint-sparql.php
require_once './endpoint.php';

if (isset($_GET['from']) && !empty($_GET['from'])) {
  if (isset($_GET['to']) && !empty($_GET['to'])) {
    $viewData = filterDataByFromTo($allBusData, $_GET['from'], $_GET['to']);
  } else {
    $viewData = filterDataByFrom($allBusData, $_GET['from']);
  }

  if (count($viewData) == 0) {
    $isDataFound = false;
  } else {
    $isDataFound = true;
  }

  
} else {
  $isDataFound = false;
};

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/search.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Search Result -  BUS KITA</title>
    <link rel="icon" href="../img/bus-solid.png">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed top navigasi">
        <div class="container ">
          <a class="navbar-brand" href="../index.php"><i class="fas fa-bus-alt"></i> BUS KITA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="../index.php"><i class="fas fa-home"></i>Home</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    
    <div class="container-fluid ">
      <div class="container pb-5 mb-5 backgroundsearch">
        <h1 class="display-5"><strong>Search Result :</strong> </h1>
        <div class="container resultcontainer">
        
            <?php
            if ($isDataFound) {
              foreach ($viewData as $data) {
                echo (
                  '<div class="resultcard ">' .
                  "  <h2 class='kelas'>${data['class']}</h2>" .
                  "  <h2 class='agen'>${data['agName']}</h2>" .
                  "  <h2 class='telepon'>${data['agTelp']}</h2>" .
                  '  <div class="fasilitas">' .
                  '     <h2>Fasilitas : </h2>' .
                  "     <p>${data['facility']}</p>" .
                  '  </div>' .
                  "  <h2 class='rute'>${data['from']}-${data['to']}</h2>" .
                  "  <h2 class='tiket'>Rp${data['price']}</h2>" .
                  '</div>'
                );
              } 

            } else {
              echo "<h1>Result not found</h1>";
            }  
            ?>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
