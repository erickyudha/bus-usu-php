<?php
require_once './filter-news.php';
require_once './endpoint-news.php';

$newsViewData = filterWisataDataByCity($allWisataData, "medan");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/berita.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>News - BUS KITA</title>
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
    
    <div class="container-fluid background">
    <div class="container pt-5 pb-5 backgroundberita">
      <h2>Tempat Wisata di Kota Medan</h2>
      <div class="container mt-5 col-md-10">
        <?php
        $i = 1;
        foreach ($newsViewData as $data) {
          echo (
            "<h3 class='pb-3 display-6'>$i. ${data['name']}</h3>" .
            '<table class="table table-borderless tablebackground">' .
            "  <tr><td  class='lebar'><h5>Nama Wisata</h5></td><td>${data['name']}</td></tr>" .
            "  <tr><td><h5>Deskripsi Tempat</h5></td> <td>${data['desc']}</td></tr>" .
            "  <tr><td><h5>Harga Tiket</h5></td><td>Rp ${data['price']}</td></tr>" .
            "  <tr><td><h5>No.Telepon</h5></td><td>${data['phone']}</td></tr>" .
            "</table>"
          );
          $i++;
        }  
        ?>
        

      </div>
      
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
