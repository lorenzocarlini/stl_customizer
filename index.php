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


    <div class="top-bar">
        <div class="container">
          <div class="col-12 text-end">
            <p><a href="tel:+393806486918">Chiamaci al 777</a></p>
          </div>
        </div>
    </div>


    
    <div class="container overflow-hidden"></div>
      <div class="row g-1">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="./img/3dstuff.png" class="d-inline-block align-text-top" alt=""  width="167" height="62" ></img>
            </a>
            <button class="navbar-toggler" style="margin-right:5px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="#">Pull request</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Issues</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Marketplace</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Explore</a>
                </li>
              </ul>
              <ul class="navbar-nav d-flex flex-row ms-auto me-3">
                
                <!-- If already logged in -->
                <?php  if(session_status() !== PHP_SESSION_ACTIVE) session_start();
                if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
                ?>
                <li class="nav-item dropdown  me-3 me-lg-0">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22"
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
      <!-- centro pagina -->
      <header class="page-header header container-fluid">
        <div class="overlay"></div>
        <div class="description">
          <h1>pagina principale!</h1>
          <p>per adesso è tutto quanto work in progress</p>
          <button class="btn btn-outline-secondary btn-lg">Dimmi di più!</button>
        </div>
      </header>
    </main>


    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide p-4 start-50 translate-middle-x " data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/amogus.jpg" class="rounded mx-auto d-block w-50 h-50"  alt="carousel-img">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/amogus.jpg" class="rounded mx-auto d-block w-50 h-50"  alt="carousel-img">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/amogus.jpg" class="rounded mx-auto d-block w-50 h-50"  alt="carousel-img">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
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

        <!-- footer -->
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img src="./img/3dstuff.png" class="d-inline-block align-text-top" alt=""  width="167" height="62" ></img>
          </a>
          <span class="text-muted">© 2021 Fabbrica del lavoro, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href="#"></a></li>
          <li class="ms-3"><a class="text-muted" href="#"></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><img src="./img/instagram_icon.png" class="d-inline-block align-text-top" alt=""></a></li>
        </ul>
      </footer>
    </div>

  </body>
</html>