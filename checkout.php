<!DOCTYPE html>
<html>
<head>
    <title>checkout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="shortcut icon" href="img/planet.ico">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style-checkout.css">
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


</head>
<body>

<?php  if(session_status() !== PHP_SESSION_ACTIVE) session_start();?>

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
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->





<div class="wrapper mt-sm-5">
<h2 class="p-4">Shopping Cart</h2>
    <div class="row">
        <div id="products-list" class="me-sm-3">
            <div class="row product bg-white shadow-sm m-sm-4 m-2">
                <div class="col px-sm-3 px-2 pt-3 d-flex justify-content-center">
                    <img src="./img/amogus.jpg" alt=""
                        class="product-img">
                </div>
                <div class="col px-sm-3 px-2 pt-3">
                    <div class="d-flex flex-column justify-content-between">
                        <a href="#" class="text-decoration-none">Amogus</a>
                        <div class="d-flex">
                            <div class="d-flex flex-column w-50">
                                <div class="font-weight-bold">Price:</div>
                                <div class="font-weight-bold">Number:</div>
                            </div>
                            <div class="d-flex flex-column w-50">
                                <div class="font-weight-bold">5€</div>
                                <div class="d-flex align-items-center">
                                    <div class="btn btn-primary"><span class="fas fa-plus"></span></div>
                                    <div class="number">3</div>
                                    <div class="btn btn-primary"><span class="fas fa-minus"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="btn btn-dark delete border-0">
                        <span class="fas fa-trash-alt"></span>
                    </div>
                </div>
            </div>
            <div class="row product bg-white shadow-sm m-sm-4 m-2">
                <div class="col px-sm-3 px-2 pt-3 d-flex justify-content-center">
                    <img src="./img/amogus.jpg" alt=""
                        class="product-img">
                </div>
                <div class="col px-sm-3 px-2 pt-3">
                    <div class="d-flex flex-column justify-content-between">
                        <a href="#" class="text-decoration-none">Nike Men's Kyire 4</a>
                        <div class="d-flex">
                            <div class="d-flex flex-column w-50">
                                <div class="font-weight-bold">Price:</div>
                                <div class="font-weight-bold">Number:</div>
                            </div>
                            <div class="d-flex flex-column w-50">
                                <div class="text-muted">100$</div>
                                <div class="d-flex align-items-center">
                                    <div class="btn btn-primary"><span class="fas fa-plus"></span></div>
                                    <div class="bg-light number">3</div>
                                    <div class="btn btn-primary"><span class="fas fa-minus"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="btn btn-dark delete border-0">
                        <span class="fas fa-trash-alt"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div id="billing">
            <div class="col-lg-12">
                <h4 class="mb-3">Shipping address</h4>
                <form class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-sm-6 pe-sm-2">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                    </div>
        
                    <div class="col-sm-6 ps-sm-2">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                    </div>
        
        
                    <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                    </div>
        
                    <div class="col-md-5 pe-md-2">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" required="">
                        <option value="" selected="selected">Choose...</option>
                        <option>United States</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                    </div>
        
                    <div class="col-md-4 px-md-2">
                    <label for="state" class="form-label">State</label>
                    <select class="form-select" id="state" required="">
                        <option value="" selected="selected">Choose...</option>
                        <option>California</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                    </div>
        
                    <div class="col-md-3 ps-md-2">
                    <label for="zip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required="">
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                    </div>
                </div>
        
                <hr class="my-4">
        
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
        
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">Save this information for next time</label>
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
                    <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                    <label class="form-check-label" for="paypal">PayPal</label>
                    </div>
                </div>
        
                <div class="row gy-3">
                    <div class="col-md-6 pe-md-2">
                    <label for="cc-name" class="form-label">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                    </div>
        
                    <div class="col-md-6 ps-md-2">
                    <label for="cc-number" class="form-label">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                    </div>
        
                    <div class="col-md-3 pe-md-2">
                    <label for="cc-expiration" class="form-label">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                    </div>
        
                    <div class="col-md-3 ps-md-2">
                    <label for="cc-cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                    </div>
                </div>
        
                <hr class="my-4">
                <div class="row gy-3">
                    <div class="col-md-6 pe-md-2">
                    <button class="btn btn-lg" type="submit">Back</button>
                    </div>
                    <div class="col-md-6 pe-md-2">
                    <button class="btn btn-primary btn-lg" type="submit">Checkout</button>
                    </div>
                </div>
                </form>
            </div>
          </div>
        </div>
    </div>
</div>
</body>