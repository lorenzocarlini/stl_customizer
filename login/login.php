<!DOCTYPE html>
<html>
<head>
    <title>login form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="shortcut icon" href="../img/logo2.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style-login.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/login.js"></script>

<style>
    #JSError {
        font-size: 1.7rem;
    }
</style>

</head>
<body>
    <main>
        <!-- login form -->
        <section class="vh-100 gradient-custom">

            <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-white">
                    <div class="card-body p-5 text-center">
        
                    <div class="mb-md-3 mt-md-4 pb-3">
        
                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                        <p class="text-white-50 mb-5">Please enter your login and password!</p>
        
                        <form name="loginForm" action="login_check.php" method="post" onsubmit="return validateForm();">
                            
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="email" class="form-control form-control-lg" placeholder="email@example.com" name="email" />
                                <label class="form-label" for="email">Email</label>
                            </div>
            
                            <div class="form-outline form-white mb-4">
                                <input type="password" id="password" class="form-control form-control-lg" name="password" />
                                <label class="form-label" for="password">Password</label>
                            </div>
            
                            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
            
                            <input id="submit" name="submit" type="submit" class="btn btn-outline-light btn-lg px-5" value="Login"> 
                        </form>
                    </div>
                    <p id="JSError">
                    <?php if(session_status() !== PHP_SESSION_ACTIVE) session_start(); 
                    if (isset($_SESSION['message']))
                        {
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        } 
                    ?>
                    </p>

                    <div>
                        <p class="mb-0">Don't have an account? <a href="./register.php" class="text-white-50 fw-bold">Sign Up</a>
                        </p>
                    </div>
        
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
    </main> 
</body> 
</html>