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
    <style>
        p {
            color: #EF233C;
        }
        #JSError {
            font-size: 1.4rem;
        }

    </style>

</head>
<body>


    <main>
        <!-- register form -->
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-body p-5 text-center">
        
                    <div class="mb-md-4 mt-md-4 pb-3">
        
                        <h2 class="fw-bold mb-5 text-uppercase">Create Account</h2>

                        <form name="createAccountForm" action="register_check.php" method="post" onsubmit="return validateForm();">
                            <div class="form-outline form-white mb-4">
                            <input type="text" id="name" class="form-control form-control-lg" placeholder="Your username" name="name"/>
                            <label class="form-label" for="name">Username</label>
                            <p id="nameJS"></p>
                            </div>

                            <div class="form-outline form-white mb-4">
                            <input type="email" id="email" class="form-control form-control-lg" placeholder="email@example.com" name="email" />
                            <label class="form-label" for="email">Email</label>
                            <p id="emailJS"></p>
                            </div>
            
                            <div class="form-outline form-white mb-4">
                            <input type="password" id="password" class="form-control form-control-lg" name="password" maxlength="14"/>
                            <label class="form-label" for="password">Password</label>
                            <p id="passwordJS"></p>
                            </div>


                            <div class="form-outline form-white mb-4">
                                <input type="password" id="confirmPassword" class="form-control form-control-lg" name="confirmPassword" maxlength="14"/>
                                <label class="form-label" for="confirmPassword">Confirm Password</label>
                                <p id="CpasswordJS"></p>
                            </div>

                            <input id="submit" name="submit" type="submit" class="btn btn-outline-light btn-lg px-5" value="Create Account"> 
                        </form>
                    </div>
                    <div>
                    <p class="p-1" id="JSError">
                    <?php if(session_status() !== PHP_SESSION_ACTIVE) session_start(); 
                    if (isset($_SESSION['message']))
                        {
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        } 
                    ?>
                    </p>

                        <p class="mb-0">Already have an account? <a href="./login.php" class="text-white-50 fw-bold">Login</a>
                        </p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
    </main> 
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/register.js"></script>
</body> 
</html>
