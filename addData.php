<?php
session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}

// Memanggil atau membutuhkan file function.php
require 'function.php';

// Jika fungsi tambah lebih dari 0/data tersimpan, maka munculkan alert dibawah
if (isset($_POST['simpan'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('AddedProduct!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi tambah dari 0/data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Failed to add product!');
            </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/form.css">





    <title>Shopping Cart - Add Product</title>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="index.php">Shopping Cart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Add Product</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <div class="formbg-inner padding-horizontal--48">
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="field padding-bottom--24">
                            <label for="ID">Product ID</label>
                            <input type="number" name="nis" id="nis" required>
                        </div>
                        <div class="field padding-bottom--24">
                            <label for="title">Product Title</label>
                            <input type="text" name="nama" id="nama" required>
                        </div>
                        <div class="field padding-bottom--24">
                            <div class="grid--50-50">
                                <label for="ProductDescription">Product Description</label>

                            </div>
                            <input type="text" name="tmpt_Lahir" id="tmpt_Lahir" required>
                        </div>
                        <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Product Image Upload</label>
                            <input class="form-control form-control-sm w-50 fileadd" id="gambar" name="gambar"
                                type="file">
                        </div>
                        <div class="field padding-bottom--24">
                            <input type="submit" name="simpan" value="Add Product">
                            
                        </div>
                        <a href="index.php" class="btn btn-secondary">Return</a>


                    </form>
                </div>
               
    </div>
    </form>
    </div>
    </div>
    </div>
    



    

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>

</html>