<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Seacrh Meta Tags -->
    <meta name="google-site-verification" content="KAQHbLvQOMoov-pyIf_6doxCrE5xOh1FsAqjhM4U4k0" />

    <!-- Fav Icon -->
    <link rel="icon" href="https://icon-library.com/images/farm-icon-png/farm-icon-png-7.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Local CSS -->
    <link rel="stylesheet" link href="style/style.css">

    <!-- Import Font Awesome -->
    <script src="https://kit.fontawesome.com/97987cf7bc.js" crossorigin="anonymous"></script>

    <!-- Import Font Rosario -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Rosario:wght@300&display=swap');
    </style>

    <!-- Title -->
    <title>Farmilify</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
            <a class="navbar-brand font-weight-bold text-white" href="#top">FARMILIFY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link js-scroll-trigger text-white" href="faq.html">FAQ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger text-white" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger text-white" href="login.php">Login</a>

                </li>
               <!--  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle js-scroll-trigger text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> -->
              </ul>
            </div>
            </div>
          </nav>
    </header>

    <!-- Ini Jumbotron -->
    <!-- <div class="jumbotron">
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">Semua orang bisa bertani dengan mudah !</h1>
                <p class="lead"></p>
                <hr class="my-4">
                <p>Dengan Farmilify kemudahan bercocok tanam dapat terpenuhi dan efektif. Nikmati kemudahan bercocok tanam dari kami :)</p>
                <a class="btn btn-success btn-lg font" href="#daftar" role="button">DAFTAR SEKARANG !</a>
              </div>
        </div>
    </div> -->

    <!-- Ini Alert buat Login -->
<!--     <div class="container"></div>
      <div class="alert alert-success alert-dismissable fade show">Anda berhasil Login !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="alert alert-danger alert-dismissable fade show">Anda gagal Login !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div> -->
  
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://images.unsplash.com/photo-1519338284011-e00d355c8502?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4">Semua orang bisa bertani dengan mudah !</h1>
                <p class="lead"></p>
                <hr class="my-4">
                <p><h5>Dengan Farmilify kemudahan bercocok tanam dapat terpenuhi secara efektif. Nikmati kemudahan bercocok tanam dari kami :)</h5></p>
                <a class="btn btn-success btn-lg font" href="daftar.php" role="button">DAFTAR SEKARANG !</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1495908333425-29a1e0918c5f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4">Cari tahu apa yang harus anda tanam !</h1>
                <p class="lead"></p>
                <hr class="my-4">
                <p><h5>Dengan Farmilify, anda dapat dengan mudah mengetahui tanaman apa yang cocok ditanam
                  sesuai dengan musim dan cuaca yang sedang terjadi di daerah anda, sehingga anda dapat
                  menghasilkan hasil panen yang berkualitas dan sesuai dengan harapan.</h5></p>
                <a class="btn btn-success btn-lg font" href="daftar.php" role="button">DAFTAR SEKARANG !</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.unsplash.com/photo-1589923188900-85dae523342b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4">Manajemen tanaman dengan mudah !</h1>
                <p class="lead"></p>
                <hr class="my-4">
                <p><h5>Farmilify membantu anda untuk memanajemen tanaman anda dengan sangat mudah, anda dapat
                  mencatat semua aktivitas pertanian anda dan memanajemen mulai dari estimasi waktu tanam, 
                  estimasi harga penjualan, estimasi keuntungan, dan masih banyak lagi.</h5></p>
                <a class="btn btn-success btn-lg font" href="daftar.php" role="button">DAFTAR SEKARANG !</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
       <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-2">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3" id="about">
        <h6 class="text-uppercase mb-4 font-weight-bold">About Farmilify</h6>
        <p class="text-justify">Farmilify, merupakan sebuah sistem dalam sektor agricultural atau 
          pertanian yang akan membantu kehidupan pertanian menjadi lebih inspiratif dan produktif.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Business Inquiry</h6>
        <p>
          <a href="#!">Become a partner !</a>
        </p>
        <p>
          <a href="#!">Become a supplier !</a>
        </p>
        <p>
          <a href="#!">Become a seller !</a>
        </p>
        <p>
          <a href="#!">X</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
        <p>
          <i class="fas fa-home mr-3"></i>Suzuran Building, Osaka City, Japan</p>
        <p>
          <i class="fas fa-envelope mr-3"></i>cs@farmilify.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i>(021) - 999 - xxx</p>
        <p>
          <i class="fas fa-print mr-3"></i>(021) - 888 - xxx</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    

    <!-- Grid row -->
    <div class="row d-flex align-items-center bg-dark text-white pt-3">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright :
          <a href="https://github.com/muhfelmi/farmilify" target="_blank">
            <strong>FARMILIFY Team</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white" a href="https://facebook.com/farmilify" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white" a href="https://instagram.com/farmilify" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white" a href="https://twitter.com/farmilify" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white" a href="https://google.com/farmilify" target="_blank">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>