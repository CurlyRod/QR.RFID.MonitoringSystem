<?php
      require __DIR__  .'/database/config.php' ;
      require __DIR__ . '/login/authenticate.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./vendor/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="./shared/loader/loader.css" rel="stylesheet" />
    <link href="./login/login.css" rel="stylesheet" />
    <script src="./vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="container-loader" id="container-loader">
            <div class="loader" id="loader"></div>
        </div>
        <div class="container-login"id="container-login">
            <form method="POST">
                <div class="img-logo">
                    <img src="./assets/img/logo-removebg-preview.png" />
                </div>
                <?php 
                     if ($is_invalid): ?>
                        <div class="alert alert-danger" role="alert" id="alertBanner">
                            Invalid Credentials
                        </div> 
                        <script src="./login/login.js"></script>
                    <?php endif; ?>                  
                <div class="mb-3">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                        value="<?= htmlspecialchars($_POST["email"] ?? "" )?>">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn-login btn btn-success">Login</button>
            </form>
        </div>
    </div> 
    <script src="./shared/loader/loader.js"></script>
</body>

</html>