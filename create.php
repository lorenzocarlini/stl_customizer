<!DOCTYPE html>
<html>
<head>
    <title>create key chain</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="shortcut icon" href="/img/logo2.png">
    <link rel="stylesheet" href="/bootstrap.min.1065410f.css">
    <link rel="stylesheet" href="/style-checkout.b612e7b6.css">

    <style>#canvas-div{
            width:100%;
            max-width:100%;
            height:100%;
            max-height:100%;
            overflow: hidden;
        }</style>
<script src="/bootstrap.min.1065410f.js"></script><script src="/style-checkout.b612e7b6.js"></script></head>
<body>

<?php  if(session_status() !== PHP_SESSION_ACTIVE) session_start(); ?>
            <!-- Navbar -->
            <nav class="navbar navbar-black navbar-expand-lg ">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="/logo2.1f2bbc09.png" class="d-inline-block align-text-top" alt="logo" width="64" height="64">
                  </a>
                  <button class="navbar-toggler" style="margin-right:5px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="./img/burger-menu.png" class="d-inline-block align-text-top" alt="logo"  width="50" height="50" ></img>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="">Create</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="">Marketplace</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="">About Us</a>
                      </li>
                    </ul>
                    <ul class="navbar-nav d-flex flex-row ms-auto me-3">
                      
                      <!-- If already logged in -->
                      <?php if (isset($_SESSION['id']) && isset($_SESSION['name'])) { ?>
                      <li class="nav-item dropdown  me-3 me-lg-0">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="/profile.f6abe80f.png" class="rounded-circle" height="44" alt="" loading="lazy">  <?php echo $_SESSION['name']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item disabled" href="#">Action</a></li>
                          <li><a class="dropdown-item disabled" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="/logout.php">Log out</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <!-- Not logged in -->
              <?php }else{ header("Location: logout.php");};?>
              <!-- Navbar -->

    <div class="wrapper mt-sm-5" id="wrapper-div">
        <h2 class="p-4">Keychain's Customization</h2>
            <div class="row">
                <div class="col-auto" id="canvas-div"></div>
                <form>
                    <div class="row product shadow-sm m-sm-4 m-2">
                      <label for="input-text">Keychain's Text</label>
                      <input type="text" class="form-control" id="input-text" maxlength="10" aria-describedby="keychain_text" placeholder="Enter text for the keychain">
                    </div>
                    <div class="row product shadow-sm m-sm-4 m-2">
                    <label for="printing-material">Select printing material</label>
                    <select class="form-control" aria-label="my-material" id="printing-material">
                      <option selected="" value="PLA">PLA</option>
                      <option value="PETG">PETG</option>
                      <option value="ABS">ABS</option>
                    </select>
                  </div>
                  <div class="row product shadow-sm m-sm-4 m-2">
                    <div class="col-md-6 pe-md-2">
                      <label for="color-base" class="form-label">Select a color for the base</label>
                      <select class="form-control col-6" aria-label="my-material" id="color-base">
                       
                        <option value="0xffffff">White</option>
                        <option value="0x757575">Grey</option>
                        <option value="0x000000">Black</option>
                        <option value="0xff0000">Red</option>
                        <option value="0xff7b00">Orange</option>
                        <option value="0x00c3ff">Light Blue</option>
                        <option selected="" value="0x0d00ff">Blue</option>
                        <option value="0x00ff37">Green</option>
                      </select>
                      </div>
                      <div class="col-md-6 ps-md-2">
                      <label for="color-text" class="form-label">Select a color for the text</label>
                      <select class="form-control col-6" aria-label="my-material" id="color-text">

                        <option selected="" value="0xffffff">White</option>
                        <option value="0x757575">Grey</option>
                        <option value="0x000000">Black</option>
                        <option value="0xff0000">Red</option>
                        <option value="0xff7b00">Orange</option>
                        <option value="0x00c3ff">Light Blue</option>
                        <option value="0x0d00ff">Blue</option>
                        <option value="0x00ff37">Green</option>
                      </select>
                      </div>
                    </div>
                    <div class="row product shadow-sm m-sm-4 m-2">
                        <button type="button" class="btn btn-primary" id="button-update">Generate Preview</button>
                    </div>
                    <div class="row product shadow-sm m-sm-4 m-2" id="order-div" style="display:none;">
                      <div class="btn btn-danger" id="button-order">Order this Keychain</div>
                    </div>

                  </form>
            </div>
    </div>



<script src="/jquery-3.6.0.29ea404f.js"></script>
<script src="/bootstrap.min.2e5a9c2f.js"></script>
<script src="/create.99932b91.js"></script>
</body>
</html>