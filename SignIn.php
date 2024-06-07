<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Signin</title>



  <!-- BOOTSTRAP HAGAT MALNASH D3WA BEEHA -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro&family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="signin.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="navbar.css">




</head>

<body class="text-center">

  <!-- SIGNIN -->
  <main class="form-signin w-100 m-auto">

    <form action="login.php" method="post">
      <img class="mb-4" src="pics/logo.png" alt="Brand Image" width="300" height="300">
      <h1 style="color: #E2DCC8" class="h3 mb-3 fw-normal">Sign In</h1>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php
        if(isset($_COOKIE['email'])){
          echo $_COOKIE['email'];
        }
        ?>">
        <label for="floatingInput">Email address</label>
      </div>
      <br>

      <div class="form-floating">
        <input type="password" name="psw" class="form-control" id="floatingPassword" placeholder="Password" value="<?php
      if(isset($_COOKIE['password'])){
        echo $_COOKIE['password'];
      }
      ?>">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label style="color: #E2DCC8">
          <input type="checkbox" name="remember_checkbox" value="remember-me"> Remember me
        </label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" name="signin" type="submit">Sign In</button><br><br>

      <!-- 3yz lama ados 3ala el button ywdyna lel signup page -->
      <a href="SignUp.html">
        <button onclick="window.open('SignUp.php');" class="w-100 btn btn-lg btn-primary">Sign Up</button>
      </a>
    </form>


  </main>

  <!-- NAV BAR -->

  <header class="main-header">
    <div class="container">
      <nav class="navbar navbar-expand-lg main-nav px-0">
        <a class="navbar-brand" href="index.php">
          <img src="pics/logoname2.png" alt="Lava Java">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar icon-bar-1"></span>
          <span class="icon-bar icon-bar-2"></span>
          <span class="icon-bar icon-bar-3"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="navbar-nav ml-auto text-uppercase f1">
            <li>
              <a href="index.html" class="active active-first">home</a>
            </li>
            <li>
              <a href="menu.html">menu</a>
            </li>

            <li>
                <a href="reservation.php">Reservations</a>
            </li>

            <li>
              <a href="feedback.php">Feedback</a>
            </li>


            <li>
                <a href="bestoffers.html">offers</a>
            </li>

            <li>
                <a href="CheckOut.php">Delivery</a>
            </li>

            <li><a href="CheckOut.php"><i class="fas fa-shopping-cart" style="color: white;"></i></a>
                
            </li>

            <li>
                <a href="SignIn.php">Login</a>
            </li>


            <li class="nav-item dropdown">
             
              <a href="about.html">About Us</a>
            </a>
            
          </li>

             


            <li class="nav-item dropdown">
                <ul class="navbar-nav">
                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <img
                          src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                          class="rounded-circle"
                          height="22"
                          alt="Portrait of a Woman"
                          loading="lazy"
                        />
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="SignUp.php">Sign-Up</a>
                      </div>
                    </li>
                  </ul>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- /.container -->
  </header>

  <!-- FOOTER -->
  <footer class="mainfooter" role="contentinfo">
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Contact Us</h4>
              <ul class="list-unstyled">
                <li><a href="#"></a></li>
                <li><a href="#">LavaJava@gmail.com</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>About Us</h4>
              <ul class="list-unstyled">
                <li><a href="#">Learn more our team!</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <!--Column1-->
            <div class="footer-pad">
              <h4>Give us Feedback</h4>
              <ul class="list-unstyled">
                <li><a href="#">Write your own feedback!</a></li>

                <li>
                  <a href="#"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <h4>Follow Us</h4>
            <ul class="social-network social-circle">
              <li><a href="https://www.facebook.com/" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://twitter.com/" class="icoLinkedin" title="Linkedin"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/" class="icoInstagram" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 copy">
            <p class="text-center">&copy; Copyright 2022 - Lava Java. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript">
    function validation() {
      var mail = document.getElementById("floatingInput");
      var pass = document.getElementById("floatingPassword");

      var regex_name = /^[a-zA-Z ]{2,30}$/; //form validation for first and last name
      var regex_mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //for validation for email
      var regex_address = /^[0-9a-zA-Z]+$/;
      var regex_pass = /^[A-Za-z0-9]\w{7,10}$/;


      if (!mail.value.match(regex_mail)) {
        alert("You have entered an invalid email address!");
        return false;
      }

      if (!pass.value.match(regex_pass)) {
        alert('Enter a correct password');
        return false;
      }
      return true;



    }
  </script>




  <!-- BOOTSTRAP HAGAT MALNASH D3WA BEEHA -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>




</body>

</html>
