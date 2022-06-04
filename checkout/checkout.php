<!DOCTYPE html>
<html>
<head>
    <title>checkout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="shortcut icon" href="../img/logo2.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style-checkout.css">

</head>
<body>

<?php  if(session_status() !== PHP_SESSION_ACTIVE) session_start();?>

        <!-- Navbar -->
        <nav class="navbar navbar-black navbar-expand-lg ">
          <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
              <img src="./../img/logo2.png" class="d-inline-block align-text-top" alt="logo"  width="64" height="64" ></img>
            </a>
            <button class="navbar-toggler" style="margin-right:5px !important;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="../img/burger-menu.png" class="d-inline-block align-text-top" alt="logo"  width="50" height="50" ></img>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../create.php">Create</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="">Marketplace</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
              </ul>
              <ul class="navbar-nav d-flex flex-row ms-auto me-3">
                
                <li class="nav-item dropdown  me-3 me-lg-0">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../img/profile.png" class="rounded-circle" height="44"
              alt="" loading="lazy" /> <?php echo $_SESSION['name']; ?>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item disabled" href="#">Action</a></li>
                    <li><a class="dropdown-item disabled" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="./logout.php">Log out</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->



<!-- Navbar -->
<div class="wrapper mt-sm-5 py-2">
<h2 class="p-4">Shopping Cart</h2>
    <div class="row">
        <div id="products-list" class="me-sm-3">
            <div class="row product bg-white shadow-sm m-sm-4 m-2">
                <div class="col px-sm-3 px-2 pt-3 d-flex justify-content-center">
                    <img src="../img/keychain_placeholder.png" alt=""
                        class="product-img">
                </div>
                <div class="col px-sm-3 px-2 pt-3">
                    <div class="d-flex flex-column justify-content-between">
                        <a href="#" class="text-decoration-none">Keychain</a>
                        <div class="d-flex">
                            <div class="d-flex flex-column w-50">
                                <div class="font-weight-bold">Price:</div>
                                <div class="font-weight-bold">Quantity:</div>
                            </div>
                            <div class="d-flex flex-column w-50">
                                <p class="font-weight-bold mb-0" id="price" >5€</p>
                                <div class="d-flex align-items-center">
                                    <button type="button" class="btn btn-primary" id="minus">
                                    <img src="../node_modules/bootstrap-icons/icons/dash-lg.svg" alt="plus" width="24" height="24">
                                    </button>
                                    <p class="mb-0" id="quantity-displayed">1</p>
                                    <button type="button" class="btn btn-primary" id="plus">
                                    <img src="../node_modules/bootstrap-icons/icons/plus.svg" alt="plus" width="24" height="24">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="btn btn-dark delete border-0"></div>
                </div>
            </div>
        </div>
    </div>




    <div class="row">
        <div id="billing">
            <div class="col-lg-12">
                <h4 class="mb-3">Shipping address</h4>
                <form name="checkoutForm" action="checkout_db.php" method="post" onsubmit="return validateForm();">

                <input id="quantity" name="quantity" value="1" type="hidden"/> 
                <input id="model" name="model" type="hidden"/> 
                <input id="text_color" name="text_color" type="hidden"/> 
                <input id="base_color" name="base_color" type="hidden"/> 
                <input id="printing_material" name="printing_material" type="hidden"/> 



                <div class="row g-3">
                    <div class="col-sm-6 pe-sm-2">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" id="firstName" class="form-control letters" placeholder="" name="firstName"/>
                    <p id="firstNameJS"></p>
                    </div>
        
                    <div class="col-sm-6 ps-sm-2">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" id="lastName" class="form-control letters"  placeholder="" name="lastName"/>
                    <p id="lastNameJS"></p>
                    </div>
        
        
                    <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address">
                    <p id="addressJS"></p>
                    </div>
        
                    <div class="col-md-5 pe-md-2">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" name="country">
                        <option value="" selected="selected">Choose...</option>
                        <option value="Italy">Italy</option>
                    </select>
                    <p id="countryJS"></p>
                    </div>
        
                    <div class="col-md-4 px-md-2">
                    <label for="region" class="form-label">Region</label>
                    <select class="form-select" id="region" name="region">
                        <option value="" selected="selected">Choose...</option>
                        <option value="Lazio">Lazio</option>
                    </select>
                    <p id="regionJS"></p>
                    </div>
        
                    <div class="col-md-3 ps-md-2">
                    <label for="cap" class="form-label">Cap</label>
                    <input type="text" class="form-control digits" id="cap" placeholder="" maxlength="5">
                    <p id="capJS"></p>
                    </div>
                </div>
        
                <hr class="my-4">
        
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
        
                <hr class="my-4">
        
                <h4 class="mb-3">Payment</h4>
        
                <div class="my-3">
                    <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="checked" required="">
                    <label class="form-check-label" for="credit">Credit card</label>
                    </div>
                    <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                    <label class="form-check-label" for="debit">Debit card</label>
                    </div>
                </div>
        
                <div class="row gy-3">
                    <div class="col-md-6 pe-md-2">
                    <label for="cc-name" class="form-label">Name on card</label>
                    <input type="text" class="form-control letters" id="cc-name" placeholder="">
                    <small class="text-muted">Full name as displayed on card</small>
                    <p id="cc_nameJS"></p>
                    </div>
        
                    <div class="col-md-6 ps-md-2">
                        <label for="cc-number" class="form-label">Credit card number</label>
                        <input type="text" class="form-control digits" id="cc-number" placeholder="" maxlength="16">
                        <p id="cc_numberJS"></p>
                    </div>
        

                    <div class="col-md-3" >
                    <label for="digit" class="form-label">Expiration</label>
                        <div class="container-fluid px-0">
                            <div class="digits d-flex g-0"> 

                                <input type="text" class="form-control" id="digit1" maxlength="2" name="digit1" placeholder="MM"/>

                                <div class="date-spacing"> / </div>

                                <input type="text" class="form-control" id="digit2" maxlength="2" name="digit2" placeholder="YY"/>

                            </div>
                        </div>
                        <p id="digitsJS"></p>
                    </div>
        
                    <div class="col-md-3 ps-md-2">
                        <label for="cc-cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control digits" id="cc-cvv" maxlength="3" name="cc-cvv" placeholder="">
                        <p id="cc_cvvJS"></p>
                    </div>
                </div>
        
                <hr class="my-4">
                <div class="row gy-3">
                    <div class="col-md-6 pe-md-2">
                    <a href="../create.php" class="btn btn-lg"> Back</a>
                    </div>
                    <div class="col-md-6 pe-md-2">
                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg" value="Confirm"/> 
                    </div>
                </div>
                </form>
            </div>
          </div>
        </div>
    </div>
</div>
<script src="../js/jquery-3.6.0.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/checkout.js"></script>
</body>