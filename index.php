<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS KITA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed top navigasi">
        <div class="container">
          <a class="navbar-brand" href="#"><i class="fas fa-bus-alt"></i> BUS KITA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#rute">Rute</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="p/berita.php">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#staff">Staff</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak Kami</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- banner -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/bus1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Selamat Datang</h5>
            <p>Hai selamat datang di website kami</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/bus2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Bus Kita</h5>
            <p>Website tentang informasi rute bus</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/bus4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Aman dan Terpercaya</h5>
            <p>Kenyamanan anda prioritas kami</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- informasi -->
    <div class="container-fluid pt-5 pb-5 bg-light" id="">
      <div class="container">
        <h2 class="display-3 text-center"><strong>BUS KITA</strong></h2>
        <p class="text-center" style="font-size: 25px;">Agen Bus Handal dan Terpercaya</p>
        <div class="clearfix pt-5" style="text-align: center;">
          <p>BUS KITA merupakan website yang berisi tentang informasi agen bus terpercaya yang memudahkan kliennya untuk 
            memesan tiket bus menuju destinasi yang  diinginkan. 
            BUS KITA mengumpulkan para agen bus yang berpusat di dua kota Medan dan Jakarta.
            BUS KITA juga memberikan informasi seputar harga tiket dalam sekali pergi, rute dan kelas dari bus yang dipilih.
          </p>
          <p></p>
          <p>BUS KITA selalu berinovasi untuk mengembangkan produk dan pelayanannya, 
            itu semua dilakukan sejalan dengan visi BUS KITA untuk menjadi agen 
            transportasi darat yang unggul dalam kualitas dan pelayanan di Indonesia.
          </p>
          
        </div>
      </div>
    </div>
    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5" id="layanan">
      <div class="container text-center">
        <h2 class="display-3"><strong>Layanan</strong></h2>
        <p>BUS KITA akan memberikan berbagai layanan yang terbaik bagi kliennya.</p>
        <div class="row pt-4">

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-map-marker-alt fa-5x"></i></span>
            <h3 class="mt-3">Rute</h3>
            <p>Dengan BUS KITA anda dapat melihat dan mencari rute bus yang anda inginkan. Rute berpusat pada kota Medan dan Jakarta</p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-users fa-5x"></i></span>
            <h3 class="mt-3">Agen</h3>
            <p>Para agen dari BUS KITA sangat dapat dipercaya dan profesional</p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-coins fa-5x"></i></span>
            <h3 class="mt-3">Harga</h3>
            <p>Tidak perlu ragu memilih BUS KITA karena harga relatif murah</p>
          </div>

        </div>
      </div>
    </div>
    <!-- rute -->
    <div class="container-fluid pt-5 pb-5 bg-light" id="rute">
      <div class="container text-center">
        <h2 class="display-3"><strong>Rute</strong></h2>
        <p>Rute BUS KITA hanya bepusat pada dua kota, yaitu Medan dan Jakarta dengan daerah tujuan yang beragam.</p>
        
        <div class="cardcontainer">
        <div class="card" style="width: 18rem;">
          <img src="img/Medan.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Medan</h5>
            <p class="card-text">
              Sebagai daerah Asal, Medan memiliki berbagai rute kota tujuan. 
              Yaitu Aceh, Padang, Pekan Baru, Dumai, Bukit Tinggi, Palembang, 
              Jakarta, Tangerang.
            </p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="img/Jakarta.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jakarta</h5>
            <p class="card-text">Rute kota tujuan dengan kota asal Jakarta.
              Yaitu Purwodadi, Prabumilih, Palembang, Blora, Cepu, Yogyakarta, Solo, Madiun,
              Kediri, Blitar, dan lainnya
            </p>
          </div>
        </div>
      </div>
      </div>

      <!-- FORM SEARCH -->
    <div class="container col-md-6">
      <h2 class="alert alert-dark text-center mt-5">MASUKKAN RUTE KOTA YANG DINGINKAN</h2>
      <form action="p/search.php" method="get">
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 ">
              <label for="from">Kota Asal:</label>
              <input type="text" class="form-control mt-3" placeholder="Kota" id="from" name="from">
            </div>

            <div class="col-md-6  ">
              <label for="to">Kota Tujuan:</label>
              <input  type="text" class="form-control mt-3" placeholder="Kota" id="to" name="to">
            </div>
          </div>
        </div> 
        
        <div class="col-md-3 mx-auto text-center">
          <button type="submit" class="btn btn-danger btn-lg searchbutton">
            Cari
          </button>
        </div>
      </form>
    </div>
    </div>
    
  
    <!-- tim -->
    <div class="container-fluid pt-5 pb-5" id="staff">
        <div class="container text-center">
          <h2 class="display-3" ><strong>Tim Kami</strong> </h2>
          <p>Inilah wajah tampan dan berani dari tim kami semoga kami menjadi orang sukses amin.</p>
          <div class="row pt-4 gx-4 gy-4">
            <div class="col-md-3 text-center tim">
              <img 
                src="img/Kiman.jpeg"
                class="rounded-circle mb-3"
              />
              <h4>Rizki Imanda</h4>
              <p>Joker Web Designer</p>
            </div>

            <div class="col-md-3 text-center tim">
              <img 
                src="img/Said.JPG"
                class="rounded-circle mb-3"
              />
              <h4>Said Agung</h4>
              <p>Newbie Web Designer</p>
            </div>

            <div class="col-md-3 text-center tim">
              <img 
                src="img/Erik.jpeg"
                class="rounded-circle mb-3"
              />
              <h4>Erick Yudha</h4>
              <p>Master Web Designer</p>
            </div>

            <div class="col-md-3 text-center tim">
              <img 
                src="img/Rio.jpeg"
                class="rounded-circle mb-3"
              />
              <h4>Rio Fransisco</h4>
              <p>Web Designer Teacher</p>
            </div>

          </div>
        </div>    
    </div>
    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 kontak" id="kontak">
      <div class="container">
        <h2 class="display-3 text-center">Kontak Kami</h2>
        <p class="tekt-center">
          Silahkan hubungi kami jika anda memiliki kendala. Terima Kasih.
        </p>
        <div class="row pb -3">
          <div class="col-md-6">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Nama">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="E-mail">
            <input class="form-control form-control-lg" type="text" placeholder="No.Telepon">
          </div>
          <div class="col-md-6">
            <textarea class="form-control form-control-lg" rows="5" placeholder="Tulis disini"></textarea>
          </div>
        </div>

        <div class="col-md-3 mx-auto text-center">
          <button type="submit" class="btn btn-danger btn-lg searchbutton">
            Kirim
          </button>
        </div>
      </div>
    </div>

    <div class="container text-center pt-5 pb-5">
      All Rights Reserved &copy; 2021
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


