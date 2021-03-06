<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Fav Icon -->
     <link rel="icon" href="https://icon-library.com/images/farm-icon-png/farm-icon-png-7.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- local CSS -->
    <link rel="stylesheet" type="text/css" href="style/login.css">

    <!-- Import Font Rosario -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rosario:wght@300&display=swap');
    </style>

    <!-- Import Font Awesome -->
    <script src="https://kit.fontawesome.com/97987cf7bc.js" crossorigin="anonymous"></script>

    <title>Farmilify Login</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container-fluid">
            <a class="navbar-brand font-weight-bold text-white" href="index.php">FARMILIFY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link js-scroll-trigger text-white" href="#faq">FAQ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger text-white" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger text-white" href="index.php">Back</a>

                </li>
              </ul>
            </div>
            </div>
          </nav>
    </header>

    <div class="bg">
        <div class="container">
            <div class="container1 center">
                <h2 class="text-center">Login ke Farmilify !</h2>
                <hr>
                <form action="logincontroller.php" method="POST">
                    <div class="form-group">
                        <label for="">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>    
                            </div>                
                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required="" autofocus="">                         
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>    
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required="">
                        </div>
                        <small><a class="nav-link js-scroll-trigger" href="#forget">Lupa Password?</a></small>
                    </div>
                                                
                    <button type="submit" value="Submit" class="btn btn-primary px-5 mr-4">Submit</button>              
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>

                <?php if(isset($_GET['pesan'])) {  ?>
	              <label style="color:black;"><?php echo $_GET['pesan']; ?></label>
                <?php } ?>
                
            </div>
        </div>
    </div>

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