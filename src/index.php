<!DOCTYPE html>
<html>
  <head>
    <title>Testando roba | con bootstrap5</title>
    <meta charset="UTF-8">
    <!--
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="shortcut icon" href="img/planet.ico">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style-main.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap">
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- 
    <style>
      body{
        font-family: Grape Nuts, serif;
        font-size: 24px;
      }
    </style>
    -->
  </head>
  <body>
    <script src="js/main.js"></script>


    
    <div class="container overflow-hidden"></div>
      <div class="row g-1">

        <!-- Navbar -->
        <nav class="navbar navbar-black navbar-expand-lg ">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="./img/logo2.png" class="d-inline-block align-text-top" alt="logo"  width="64" height="64" ></img>
            </a>
            <button class="navbar-toggler" style="margin-right:5px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Create</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./checkout.php">Marketplace</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
              </ul>
              <ul class="navbar-nav d-flex flex-row ms-auto me-3">
                
                <!-- If already logged in -->
                <?php  if(session_status() !== PHP_SESSION_ACTIVE) session_start();
                if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
                ?>
                <li class="nav-item dropdown  me-3 me-lg-0">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="./img/profile.png" class="rounded-circle" height="44"
              alt="" loading="lazy" /> <?php echo $_SESSION['name']; ?>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="./logout.php">Log out</a></li>
                  </ul>
                </li>

                <!-- Not logged in -->
                <?php 
                }else{
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="./login/login.html">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./login/register.html">Create Account</a>
                </li>
                <?php 
                }
                ?>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
         
      </div>
    </div>

    <main>
    
      <div class="container-fluid position-relative p-0">
          <!-- carousel -->
          <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="overlay-image" style="background-image:url(./img/3d_print_3.jpg);">
                </div>
              </div>

              <div class="carousel-item">
                <div class="overlay-image" style="background-image:url(./img/3d_print_2.jpg);">
                </div>
              </div>

              <div class="carousel-item">
                <div class="overlay-image" style="background-image:url(./img/3d_print_1.jpg);">
                </div>
              </div>
            </div>
          </div>
          
          
          <div class="container" id="main-link">
            <h2>Create your text now!</h2>
            <p>just try it</p>
            <a href="#" class="btn btn-lg btn-primary" id="main-button"> Let's go!</a>
          </div>
      </div>
    </main>

    

        <!-- footer -->
    <div class="container position-relative">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img src="./img/logo2.png" class="d-inline-block align-text-top" alt=""  width="64" height="64" ></img>
          </a>
          <span class="text-muted">© 2021 Fabbrica del lavoro, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href="#"></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><img src="./img/facebook-logo.png" class="d-inline-block align-text-top" alt="" width="50" height="50"></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><img src="./img/insta-logo.png" class="d-inline-block align-text-top" alt="" width="50" height="50"></a></li>
        </ul>
      </footer>
    </div>

  </body>
</html>
