<?php
session_start();

if (isset($_SESSION['login'])) {
    header('location:index.php');
    exit;
}


require 'function.php';


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    

    
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    $cek = mysqli_num_rows($result);

    
    if ($cek > 0) {
        $_SESSION['login'] = true;

        header('location:index.php');
        exit;
    }
    
    $error = true;  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/login.css">

    <title>Login Shoping Cart</title>
    <style>
        body {
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  background-color: #05022d;
  text-transform: uppercase;
}

.navbar-brand {
  font-family: "Righteous", cursive;
}

.login {
  border: 0;
  height: 500px;
  margin: auto;
  border-radius:20px;
}

.login h4 {
  margin-top: 100px;
}

form .form-group input {
  margin: auto;
}

form .user input {
  margin: auto;
  margin-top: 70px;
}
</style>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Shopping Cart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewproduct.php">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 text-center login" style="background-image: url('img/bg/memphis-colorful.png');">
                <h4 class="fw-bold">Login | Admin</h4>
                
                <?php if (isset($error)) : ?>
                    <?php echo '<script>alert("Username and Password incorrect!");</script>'; ?>
                <?php endif; ?>
                <form action="" method="post">
                    <div class="form-group user">
                        <input type="text" class="form-control w-50" placeholder="Username" name="username" autocomplete="off" required>
                    </div>
                    <div class="form-group my-5">
                        <input type="password" class="form-control w-50" placeholder="Password" name="password" autocomplete="off" required>
                    </div>
                    <button class="btn btn-primary text-uppercase" type="submit" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>